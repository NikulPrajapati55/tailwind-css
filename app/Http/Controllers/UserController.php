<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TenantEmailController;

class UserController extends Controller
{
    private function tenantSlug($user)
    {
        return strtolower(
            Str::slug($user->name) . '-' . substr($user->tenant_id, 0, 4)
        );
    }

    public function index()
    {
        if (Auth::check()) {
            $tenantSlug = $this->tenantSlug(Auth::user());
            return redirect()->route('tenant.dashboard', ['tenant_slug' => $tenantSlug]);
        }
        return view('login.login');
    }

    /**
     * Register / Signup User and Create Dynamic Table
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Wrap in a transaction to ensure both user and table are created together
        return DB::transaction(function () use ($request) {

            // 1. Generate Unique Tenant ID
            $tenantId = (string) Str::uuid();

            // 2. IMPORTANT: Use the full UUID to prevent "4th user" naming conflicts
            // We replace dashes with underscores because MySQL table names can't have dashes
            $tableName = 't_' . str_replace('-', '_', $tenantId);

            // 3. Create the User record
            $user = Users::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => Hash::make($request->password),
                'tenant_id' => $tenantId,
            ]);

            // 4. Create Dynamic Table
            if (!Schema::hasTable($tableName)) {
                Schema::create($tableName, function (Blueprint $table) {
                    $table->id();
                    $table->string('name');
                    $table->string('data_key')->nullable();
                    $table->text('data_value')->nullable();
                    $table->timestamps();
                });
            }

            // 5. Send Email
            try {
                (new TenantEmailController())->sendTenantEmail($user, $tenantId);
            } catch (\Exception $e) {
                // Keep going if email fails
            }

            Auth::login($user);
            $tenantSlug = $this->tenantSlug($user);

            return redirect()->route('tenant.dashboard', ['tenant_slug' => $tenantSlug]);
        });
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = Users::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Invalid credentials');
        }

        Auth::login($user);
        $tenantSlug = $this->tenantSlug($user);

        return redirect()->route('tenant.dashboard', ['tenant_slug' => $tenantSlug]);
    }
}

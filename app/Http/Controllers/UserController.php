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


    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        return DB::transaction(function () use ($request) {

            $tenantId = (string) Str::uuid();


            $tableName = 't_' . str_replace('-', '_', $tenantId);

            $user = Users::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => Hash::make($request->password),
                'tenant_id' => $tenantId,
            ]);

            if (!Schema::hasTable($tableName)) {
                Schema::create($tableName, function (Blueprint $table) {
                    $table->id();
                    $table->string('name');
                    $table->string('email')->nullable();
                    $table->string('phone')->nullable();
                    $table->string('role')->default('admin');
                    $table->string('document_1')->nullable();
                    $table->string('document_2')->nullable();
                    $table->string('document_3')->nullable();
                    $table->string('password')->nullable();
                    $table->string('data_key')->nullable();
                    $table->text('data_value')->nullable();
                    $table->timestamps();
                });
            }
            try {
                (new TenantEmailController())->sendTenantEmail($user, $tenantId);
            } catch (\Exception $e) {
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

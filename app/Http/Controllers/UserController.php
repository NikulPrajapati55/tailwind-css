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
    /**
     * Generates the unique slug for the tenant dashboard URL.
     */
    private function tenantSlug($user)
    {
        return strtolower(
            Str::slug($user->name) . '-' . substr($user->tenant_id, 0, 4)
        );
    }

    /**
     * Show the login page or redirect if already logged in.
     */
    public function index()
    {
        if (Auth::check()) {
            $tenantSlug = $this->tenantSlug(Auth::user());
            return redirect()->route('tenant.dashboard', ['tenant_slug' => $tenantSlug]);
        }
        return view('login.login');
    }

    /**
     * Handle registration of a new tenant and creation of their private table.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $tenantId = (string) Str::uuid();
        $sanitizedId = str_replace('-', '_', $tenantId);
        $tableName = 't_' . $sanitizedId;
        $roleTableName = 'r_' . $sanitizedId; // New Role Table Name

        // 1. CREATE SCHEMAS (Outside transaction)

        // Create Roles Table
        if (!Schema::hasTable($roleTableName)) {
            Schema::create($roleTableName, function (Blueprint $table) {
                $table->id();
                $table->string('role_name'); // e.g., admin, editor, user
                $table->timestamps();
            });
        }

        // Create Tenant Users Table
        if (!Schema::hasTable($tableName)) {
            Schema::create($tableName, function (Blueprint $table) use ($roleTableName) {
                $table->id();
                $table->string('name');
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                // Store role_id instead of just a string
                $table->unsignedBigInteger('role_id')->nullable();
                $table->string('document_1')->nullable();
                $table->string('document_2')->nullable();
                $table->string('document_3')->nullable();
                $table->string('password')->nullable();
                $table->string('data_key')->nullable();
                $table->text('data_value')->nullable();
                $table->timestamps();
            });
        }

        // 2. DATA INSERTION (Inside transaction)
        $user = DB::transaction(function () use ($request, $tenantId, $tableName, $roleTableName) {
            // A. Create the main System User
            $newUser = Users::create([
                'name'   => $request->name,
                'email'   => $request->email,
                'password' => Hash::make($request->password),
                'tenant_id' => $tenantId,
            ]);

            // B. Insert default "admin" role into the new role table
            $roleId = DB::table($roleTableName)->insertGetId([
                'role_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // C. Insert the tenant admin into the private table linked to the role
            DB::table($tableName)->insert([
                'name'    => $request->name,
                'email'   => $request->email,
                'role_id'  => $roleId, // Linking to the role table
                'password'  => Hash::make($request->password),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return $newUser;
        });

        // 3. POST-REGISTRATION
        try {
            (new TenantEmailController())->sendTenantEmail($user, $tenantId);
        } catch (\Exception $e) {
        }

        Auth::login($user);

        return redirect()->route('tenant.dashboard', [
            'tenant_slug' => $this->tenantSlug($user)
        ]);
    }
    /**
     * Handle authentication and redirect to tenant-specific dashboard.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'  => 'required|email',
            'password' => 'required',
        ]);

        // 1. Find the user
        $user = Users::where('email', $request->email)->first();

        // 2. Check password and existence
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()
                ->withInput($request->only('email')) // Keep email in the form
                ->with('error', 'Invalid credentials');
        }

        // 3. Log the user in
        Auth::login($user);

        // 4. Regenerate session (Security Best Practice)
        $request->session()->regenerate();

        // 5. Get the slug
        $tenantSlug = $this->tenantSlug($user);

        if (!$tenantSlug) {
            // Handle case where user isn't assigned to a tenant
            return redirect()->route('login')->with('error', 'No tenant found for this account.');
        }

        return redirect()->route('tenant.dashboard', ['tenant_slug' => $tenantSlug]);
    }

}

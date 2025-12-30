<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\TenantEmailController;

class UserController extends Controller
{
    /**
     * Generate tenant slug
     * Example:  siddharth-shah-a1b2
     */
    private function tenantSlug($user)
    {
        return strtolower(
            Str::slug($user->name) . '-' . substr($user->tenant_id, 0, 4)
        );
    }

    /**
     * Show login page
     * If already logged in → redirect to dashboard
     */
    public function index()
    {
        if (Auth::check()) {

            $tenantSlug = $this->tenantSlug(Auth::user());

            return redirect()->route('tenant.dashboard', [
                'tenant_slug' => $tenantSlug
            ]);
        }

        return view('login.login');
    }

    /**
     * Register / Signup User
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $tenantId = (string) Str::uuid();

        $user = Users::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'tenant_id' => $tenantId,
        ]);

        // Send onboarding / tenant email
        (new TenantEmailController())->sendTenantEmail($user, $tenantId);

        // Auto-login after signup
        Auth::login($user);

        $tenantSlug = $this->tenantSlug($user);

        return redirect()->route('tenant.dashboard', [
            'tenant_slug' => $tenantSlug
        ]);
    }

    /**
     * Login User
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = Users::where('email', $request->email)->first();

        if (! $user) {
            return back()->with('error', 'User not found');
        }

        if (! Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Password incorrect');
        }

        Auth::login($user);

        $tenantSlug = $this->tenantSlug($user);

        return redirect()->route('tenant.dashboard', [
            'tenant_slug' => $tenantSlug
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeamController extends Controller
{
    /**
     * Handles adding a new team member to the private tenant table.
     */
    public function store(Request $request, $tenant_slug)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role_id' => 'required'
        ]);

        // Construct the dynamic table name using Auth::user()
        $tenantId = Auth::user()->tenant_id;
        $userTable = 't_' . str_replace('-', '_', $tenantId);

        DB::table($userTable)->insert([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Member added to your workspace.');
    }
}

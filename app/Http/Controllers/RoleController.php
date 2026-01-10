<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Helper to get the tenant's specific role table name.
     */
    private function getTenantRoleTable()
    {
        $tenantId = Auth::user()->tenant_id;
        $sanitizedId = str_replace('-', '_', $tenantId);
        return 'r_' . $sanitizedId;
    }

    /**
     * View all roles for the current tenant.
     */
    public function index()
    {
        $tableName = $this->getTenantRoleTable();

        // Fetch all roles from the tenant's private table
        $roles = DB::table($tableName)->get();

        return view('tenant.roles.index', compact('roles'));
    }

    /**
     * Create a new role.
     */
    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|string|max:255',
        ]);

        $tableName = $this->getTenantRoleTable();

        // Prevent duplicate roles for the same tenant
        $exists = DB::table($tableName)
            ->where('role_name', $request->role_name)
            ->exists();

        if ($exists) {
            return back()->with('error', 'This role already exists.');
        }

        DB::table($tableName)->insert([
            'role_name' => $request->role_name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Role created successfully.');
    }

    /**
     * Delete a role.
     */
    public function destroy($tenant_slug, $id) {
    $tenantId = Auth::user()->tenant_id;
    $tableName = 'r_' . str_replace('-', '_', $tenantId);

    DB::table($tableName)->where('id', $id)->delete();

    return back()->with('success', 'Role deleted successfully.');
}
}

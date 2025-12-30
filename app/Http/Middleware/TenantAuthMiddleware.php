<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TenantAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Extract hostname (remove port like :8000)
        $host = explode(':', $request->getHost())[0];

        // Prefer route param if exists
        $slug = $request->route('tenant_slug')
            ?? $request->route('tenant_id')
            ?? explode('.', $host)[0];

        // Must be logged in
        if (! Auth::check()) {
            return redirect()->route('signup');
        }

        $user = Auth::user();

        // If user does not have tenant yet
        if (! $user->tenant_id) {
            abort(403, 'No tenant assigned to this account');
        }

        // Generate normalized slug
        // name → slug-name (no spaces)
        $expectedSlug = strtolower(
            Str::slug($user->name) . '-' . substr($user->tenant_id, 0, 4)
        );

        // Deny if trying to access another tenant
        if ($slug !== $expectedSlug) {
            abort(403, 'Unauthorized Tenant Access');
        }

        return $next($request);
    }
}

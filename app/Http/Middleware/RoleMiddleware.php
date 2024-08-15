<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        /* This is checking if the user is authenticated and if their role matches any of the authorized roles
         allowed to access the routes.
        */
        if (!$user || !in_array($user->role_id, $roles)) {
            return redirect()->route('dashboard')->with('error', 'Unauthorized access.');
        }

        return $next($request);
    }
}

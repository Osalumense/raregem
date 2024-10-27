<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
{
    $allowedRoles = array_map('trim', $roles); // Trim any whitespace

    // Get the current user's role
    $userRole = $request->user()->role;

    // Check if the user's role is in the allowed roles array
    if (!in_array($userRole, $allowedRoles)) {
        return redirect('/')->with('error', 'Unauthorized access');
    }

    return $next($request);
}
}

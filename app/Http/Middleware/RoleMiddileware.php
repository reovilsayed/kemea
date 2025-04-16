<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddileware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    protected const ROLES = [
        'admin' => 1,
        'user' => 2,
        'agent' => 3,
    ];

    public function handle(Request $request, Closure $next, $role): Response
    {
        if (self::ROLES[$role] == auth()->user()->role_id) {
            return $next($request);
        }
        return abort('403', 'Unauthorised');
    }
}

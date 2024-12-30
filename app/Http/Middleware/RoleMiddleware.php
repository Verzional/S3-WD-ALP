<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Session::has('user')) {
            return redirect('/')->with('error', 'Please log in first. No User');
        }


        if (!Session::has('role')) {
            return redirect('/')->with('error', 'Please log in first. No Role');
        }


        if (Session::get('user') && Session::get('role') === $role) {
            return $next($request);
        }
        return redirect('/')->with('error', 'Unauthorized access.');
    }
}

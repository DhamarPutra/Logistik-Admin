<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Role
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        if (!in_array($user->role, ['admin', 'supervisor'])) {
            return redirect('/unauthorized');
        }

        return $next($request);
    }
}

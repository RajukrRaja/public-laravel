<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthRoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = session('user');

        //  Auth check
        if (!$user) {
            return redirect('/login')->with('error', 'Please login first');
        }

        //  Role check 
        if (!empty($roles) && !in_array($user->role, $roles)) {
            abort(403, 'Unauthorized Access');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateCustomUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if user is authenticated using your custom logic
        if (!auth()->check()) {
            return redirect('/login'); // Redirect to login if not authenticated
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Route;

class EnrollmentMiddleware
{
    /**
     * Redirect user to register page if unauthenticated
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! auth()->check()) {
            $route = Route::current();

            if (isset($route->parameters['event'])) {
                return redirect()->route('register', ['next' => $route->parameters['event']]);
            }

            return redirect()->route('register');
        }

        return $next($request);
    }
}

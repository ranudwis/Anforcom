<?php

namespace App\Http\Middleware;

use Closure;
use Route;

class DashboardEventMiddleware
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
        $route = Route::current();
        $event = $route->parameters['event'];
        $registration = $request->user()->registrations()->where('event_id', $event->id)->first();

        if ($registration) {
            if ($registration->status === 'active') {
                return $next($request);
            }

            return redirect()->route('dashboard.payment', ['event' => $event->slug]);
        }

        return redirect()->route('dashboard.index');
    }
}

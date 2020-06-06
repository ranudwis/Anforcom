<?php

namespace App\Http\Middleware;

use Closure;
use App\Event;

class NeedEventsMiddleware
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
        $sharedEvents = Event::all();
        view()->share('sharedEvents', $sharedEvents);

        return $next($request);
    }
}

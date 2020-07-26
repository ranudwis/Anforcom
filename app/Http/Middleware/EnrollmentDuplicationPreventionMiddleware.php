<?php

namespace App\Http\Middleware;

use App\Event;
use Closure;
use Route;

class EnrollmentDuplicationPreventionMiddleware
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
        $event = Route::current()->parameters['event'];

        $registrations = $request->user()->registrations()->with('event')->get();

        $available = Event::minusAlreadyRegistered($registrations)
            ->where('id', $event->id)
            ->exists();

        if ($available) {
            return $next($request);
        }

        return redirect()->route('alreadyregistered');
    }
}

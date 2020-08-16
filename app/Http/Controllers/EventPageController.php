<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventPageController extends Controller
{
    public function index()
    {
        $competitions = Event::where('type', 'competition')->get();

        return view('event.competition', compact('competitions'));
    }

    public function show($competition)
    {
        $event = Event::with('timelines')
            ->where('slug', $competition)
            ->firstOrFail();

        if (view()->exists('event.' . $event->template_name)) {
            return view('event.' . $event->template_name, compact('event'));
        }

        abort(404);
    }
}

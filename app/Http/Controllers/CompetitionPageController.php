<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class CompetitionPageController extends Controller
{
    public function index()
    {
        $competitions = Event::where('type', 'competition')->get();

        return view('event.competition', compact('competitions'));
    }

    public function show($competition)
    {
        $competition = Event::where('type', 'competition')
            ->with('timelines')
            ->where('slug', $competition)
            ->firstOrFail();

        if (view()->exists('event.' . $competition->template_name)) {
            return view('event.' . $competition->template_name, compact('competition'));
        }

        abort(404);
    }
}

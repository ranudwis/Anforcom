<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\DashboardEventMiddleware;
use App\Event;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware(DashboardEventMiddleware::class);
    }

    public function show(Request $request, Event $event)
    {
        $leader = $request->user()->load('team.members');

        $event->load([
            'tasks.submissions' => function ($query) use ($leader) {
                $query->where('submissions.team_id', $leader->team->id);
            }, 'tasks.timeline'
        ]);

        return view('dashboard.team', compact('event', 'leader'));
    }
}

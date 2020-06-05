<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use App\Timeline;

class TimelineController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('admin.timeline', compact('events'));
    }

    public function show(Event $event)
    {
        $event->load('timelines');
        $registration = $event->registrationTimeline();

        return view('admin.formtimeline', compact('event', 'registration'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required',
            'start' => 'required',
            'end' => 'required',
            'name' => 'required',
            'description' => 'nullable',
            'venue' => 'nullable',
        ]);

        Timeline::create($request->all());

        return back()->with('status', 'Timeline berhasil ditambahkan');
    }
}

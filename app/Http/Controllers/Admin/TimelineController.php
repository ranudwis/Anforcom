<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use App\Timeline;

class TimelineController extends Controller
{
    public function index(Event $event)
    {
        $event = Event::all();
        return view('admin.timeline', compact('event'));
    }

    public function showform(Event $event)
    {
        $timeline = Timeline::where('event_id', $event->id)->get();
        $registrasi = Timeline::where('id', $event->register_timeline_id)->get();
        return view('admin.formtimeline', compact('event', 'timeline', 'registrasi'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'event_id' => 'required',
            'start' => 'required',
            'end' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);

        Timeline::create($request->all());

        return back()->with('status', 'Timeline berhasil ditambahkan');
    }
}

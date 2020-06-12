<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Task;
use App\Timeline;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $event = Event::all();
        return view('admin.task', compact('event'));
    }

    public function formtask($event_id)
    {
        $timelines = Timeline::where('event_id', $event_id)->get();

        return view('admin.formtask', compact('timelines'));
    }

    public function addTask(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'name' => 'required',
            'description' => 'required',
            'timeline_id' => 'required',
        ]);

        Task::create(
            $request->only('event_id', 'timeline_id', 'name', 'description', 'deadline')
        );

        return back()->with('status', 'Tugas berhasil ditambahkan');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Task;
use App\Timeline;
use App\Submission;
use App\Team;
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
        $events = Event::where('id', $event_id)->get();
        $tasks = Task::where('event_id', $event_id)->get();
        return view('admin.formtask', compact('timelines', 'events', 'tasks'));
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

    public function submission($event_id, $task_id)
    {
        $teams = Team::with([
            'submissions' => function ($join) use ($task_id) {
                $join->where('id', '=', 'submissions.team_id')->where('submissions.task_id', $task_id);
            }
        ])
        ->where('competition_id', $event_id)
        ->get();

        return view('admin.submission', compact('teams'));
    }
}

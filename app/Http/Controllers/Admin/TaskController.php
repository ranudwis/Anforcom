<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $competitions = Event::all();
        return view('admin.task', compact('competitions'));
    }

    public function addTask(Request $request)
    {
        $request->validate([
            'competition_id' => 'required|exists:competitions,id',
            'name' => 'required',
            'description' => 'required',
            'deadline' => 'required|date',
        ]);

        Task::create(
            $request->only('competition_id', 'name', 'description', 'deadline')
        );

        return back()->with('status', 'Tugas berhasil ditambahkan');
    }
}

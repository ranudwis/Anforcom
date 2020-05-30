<?php

namespace App\Http\Controllers\Admin;

use App\Competition;
use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $competitions = Competition::all();
        return view('admin.task', compact('competitions'));
    }

    public function addTask(Request $request)
    {

        $request->validate([
            'competition_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'deadline' => 'required',
        ]);

        Task::create([
            'competition_id' => $request->competition_id,
            'name' => $request->name,
            'description' => $request->description,
            'deadline' => $request->deadline,
        ]);

        return back()->with('status', 'Tugas berhasil ditambahkan');
    }
}

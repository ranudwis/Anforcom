<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Submission;
use App\Task;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function submit(Request $request, Task $task)
    {
        $request->validate([
            'file' => 'required|file'
        ]);

        $task->submissions()->create([
            'file' => $request->file->store('public/submissions'),
            'team_id' => $request->user()->team->id,
        ]);

        return back();
    }
}

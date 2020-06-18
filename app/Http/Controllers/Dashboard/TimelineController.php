<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;

class TimelineController extends Controller
{
    public function index()
    {
        $events = Event::with('timelines')->get();

        return view('dashboard.timeline', compact('events'));
    }
}

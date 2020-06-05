<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Event;
use App\Timeline;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function setRegisterTimeline(Event $event, Request $request)
    {
        $event->register_timeline_id = $request->registrationid;
        $event->save();

        return back()->with('status', 'Registrasi berhasil di set');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Event;
use App\Timeline;
use Illuminate\Http\Request;


class EventController extends Controller
{
    public function addRegisterId(Request $request, $event_id)
    {
        Event::where('id', $event_id)
            ->update([
                'register_timeline_id' => $request->registrationid
            ]);

        return back()->with('status', 'Registrasi berhasil di set');
    }
}

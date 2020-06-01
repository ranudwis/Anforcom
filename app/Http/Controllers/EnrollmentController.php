<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\RegistrationRequest;
use App\Event;
use App\Team;

class EnrollmentController extends Controller
{
    public function index(Event $event)
    {
        // TODO: Check wheter event is an event or competition
        return view('enroll.index', compact('event'));
    }

    public function enroll(Request $request, Event $event)
    {
        $registration = $request->user()->registrations()->create([
            'event_id' => $event->id
        ]);

        $team = new Team([
            'name' => $request->team_name,
            'leader_id' => $request->user()->id,
            'competition_id' => $event->id,
            'university' => $request->university,
            'leader_nim' => $request->leader_nim,
            'leader_ktm' => $request->leader_ktm->store('public/images/ktm'),
        ]);

        $team = $registration->teams()->save($team);

        $team->members()->createMany(
            array_map(function ($member) {
                return $member + [
                    'ktm' => $member['ktm']->store('public/images/ktm')
                ];
            }, $request->members)
        );

        return redirect()->route('dashboard.index');
    }
}

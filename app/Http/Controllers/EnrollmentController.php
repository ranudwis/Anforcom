<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Events\NewEventRegistration;
use App\Event;
use App\Team;

class EnrollmentController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('enroll.index', compact('events'));
    }

    public function show(Event $event)
    {
        // TODO: Check wheter event is an event or competition
        return view('enroll.show', compact('event'));
    }

    public function enroll(RegistrationRequest $request, Event $event)
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
            array_map(
                function ($member) {
                    return $member + [
                        'ktm' => $member['ktm']->store('public/images/ktm')
                    ];
                },
                array_filter(
                    $request->members,
                    function ($member) {
                        return isset($member['name']) && $member['name'];
                    }
                )
            )
        );

        event(new NewEventRegistration($registration, $team));

        return redirect()->route('dashboard.index');
    }
}

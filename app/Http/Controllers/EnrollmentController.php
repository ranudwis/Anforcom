<?php

namespace App\Http\Controllers;

use App\Event;
use App\Events\NewEventRegistration;
use App\Http\Middleware\EnrollmentDuplicationPreventionMiddleware;
use App\Http\Requests\RegistrationRequest;
use App\Team;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function __construct()
    {
        $this->middleware(EnrollmentDuplicationPreventionMiddleware::class)
            ->except('index');
    }

    public function index(Request $request)
    {
        $userRegistrations = $request->user()->registrations()->with('event')->get();

        $events = Event::minusAlreadyRegistered($userRegistrations)->get();

        return view('enroll.index', compact('events'));
    }

    public function show(Event $event)
    {
        $workshop = "workshop";
        if ($event['slug'] === $workshop) {
            return view('enroll.workshop', compact('event'));
        } else {
            return view('enroll.show', compact('event'));
        }
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

    public function enrollworkshop(Request $request, Event $event)
    {
        $request->validate([
            'team_name' => 'required',
            'name' => 'required',
            'university' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'leader_ktm' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $registration = $request->user()->registrations()->create([
            'event_id' => $event->id
        ]);
        $team = new Team([
            'name' => $request->team_name,
            'leader_id' => $request->user()->id,
            'competition_id' => $event->id,
            'university' => $request->university,
            'leader_nim' => "",
            'leader_ktm' => $request->leader_ktm->store('public/images/ktm'),
            'tgl_lahir' => $request->tgl_lahir
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

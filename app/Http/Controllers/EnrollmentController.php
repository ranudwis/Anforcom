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
        if ($event->type === 'event') {
            return view('enroll.event', compact('event'));
        }

        return view('enroll.competition', compact('event'));
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
                        'ktm' => $member['ktm']->store('public/images/ktm'),
                        'ktp' => ''
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
            'university' => 'required',
            'leader_ktm' => 'nullable|image',
            'leader_ktp' => 'required|image',
        ]);

        $registration = $request->user()->registrations()->create([
            'event_id' => $event->id
        ]);
        $team = new Team([
            'name' => $request->team_name ?? $request->user()->name,
            'leader_id' => $request->user()->id,
            'competition_id' => $event->id,
            'university' => $request->university,
            'leader_nim' => " ",
            'leader_ktm' => $request->leader_ktm ? $request->leader_ktm->store('public/images/ktm') : '',
            'leader_ktp' => $request->leader_ktp->store('public/images/ktp')
        ]);

        $team = $registration->teams()->save($team);

        if ($request->members) {
            $members = array_filter(
                $request->members,
                function ($member) {
                    return isset($member['name']) && $member['name'];
                }
            );

            $team->members()->createMany(
                array_map(
                    function ($member) {
                        return $member + [
                            'ktm' => isset($member['ktm']) ? $member['ktm']->store('public/images/ktm') : '',
                            'ktp' => $member['ktp']->store('public/images/ktp'),
                            'nim' => ''
                        ];
                    },
                    $members
                )
            );
        }

        event(new NewEventRegistration($registration, $team));

        return redirect()->route('dashboard.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Auth;
use App\Competition;
use App\User;
use App\Member;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\RegistrationRequest;

class AuthController extends Controller
{
    public function payment()
    {
        return view('auth.payment');
    }

    public function login(Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            if (auth()->user()->role === 'admin') {
                return redirect()->route('admin.index');
            }

            return redirect()->route('dashboard.index')->with('status', 'Berhasil Login');
        }

        return back()->with('status', 'Anda belum mempunyai akun');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function competition()
    {
        $competitions = Competition::all();
        return view('auth.competition', compact('competitions'));
    }

    public function register(Competition $competition)
    {
        return view('auth.register', compact('competition'));
    }

    public function store(RegistrationRequest $request)
    {
        $leader = User::create([
            'name' => $request->leader_name,
            'email' => $request->leader_email,
            'password' => $request->password,
            'nim' => $request->leader_nim,
            'contact' => $request->leader_contact,
            'ktm' => $request->leader_ktm->store('public/images/ktm')
        ]);

        $team = $leader->team()->create([
            'name' => $request->team_name,
            'competition_id' => $request->competition_id,
            'university' => $request->university
        ]);

        $team->members()->createMany(
            array_map(function ($member) {
                return $member + [
                    'ktm' => $member['ktm']->store('public/images/ktm')
                ];
            }, $request->members)
        );

        auth()->login($leader);
        return redirect()->route('dashboard.index');
    }
}

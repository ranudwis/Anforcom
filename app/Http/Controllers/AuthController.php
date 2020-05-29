<?php

namespace App\Http\Controllers;

use App\Auth;
use App\Competition;
use App\User;
use App\Member;
use App\Team;
// use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
        return view('auth.dashboard');
    }

    public function payment()
    {
        return view('auth.payment');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function competition()
    {
        $competition = Competition::all();
        return view('auth.competition', compact('competition'));
    }


    // $team = Team::where('user_id', $data->id)->first();
    // $members = Member::where('team_id', $team->id);
    // Session::put('team', $team->name);
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect('/dashboard')->with('status', 'Berhasil Login');
        }

        return redirect('/')->with('status', 'Anda belum mempunyai akun');
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Competition $competition)
    {
        return view('auth.register', compact('competition'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'competition_id' => 'required|exists:competitions,id',
            'university' => 'required',
            'team_name' => 'required',
            'leader_name' => 'required',
            'leader_email' => 'required|unique:users,email',
            'password' => 'required',
            'leader_nim' => 'required',
            'leader_ktm' => 'required|image',
            'members' => 'required',
            'leader_contact' => 'required',
        ]);

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

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function show(Auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('auth.payment', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        Team::where('user_id', $user->id)
            ->update([
                'payment_confirm' => $request->payment_confirm->store('public/image/payment')
            ]);
        return redirect('/dashboard')->with('status', 'Berhasil di konfirmasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auth $auth)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Auth;
use App\Competition;
use App\User;
use App\Member;
use App\Team;
// use Illuminate\Validation\Validator;
use Illuminate\Http\Request;

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function competition()
    {
        $competition = Competition::all();
        return view('auth.competition', ['competition' => $competition]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function register()
    // {

    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create(Competition $competition)
    // {
    //     return view('auth.register', ['competition' => $competition]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Competition $competition)
    {
        return view('auth.register', ['competition' => $competition]);
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
            'leader_name' => 'required',
            'leader_email' => 'required',
            'password' => 'required',
            'leader_nim' => 'required',
            'leader_ktm' => 'required'
        ]);

        $leader = new User([
            'name' => $request->leader_name,
            'email' => $request->leader_email,
            'password' => bcrypt($request->password),
            'nim' => $request->leader_nim,
            'ktm' => $request->leader_ktm->store('public/images/ktm')
        ]);

        $leader->save();

        $request->validate([
            'team_name' => 'required',
            'university' => 'required',
            'payment_confirm' => 'required'
        ]);
        $team = new Team([
            'name' => $request->team_name,
            'competition_id' => $request->competition_id,
            'university' => $request->university,
            'payment_confirm' => $request->payment->store('public/images/payment')
        ]);

        $leader->teams()->save($team);

        $members = [];
        foreach ($request->members as $member) {
            $members[] = new Member([
                'name' => $member['name'],
                'email' => $member['email'],
                'nim' => $member['nim'],
                'ktm' => $member['ktm']->store('public/images/ktm')
            ]);
        }

        $team->members()->saveMany($members);
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
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auth $auth)
    {
        //
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

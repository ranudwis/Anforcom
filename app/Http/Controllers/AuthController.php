<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\RegistrationRequest;
use App\User;

class AuthController extends Controller
{
    public function payment()
    {
        return view('auth.payment');
    }

    public function login(Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            if (auth()->user()->admin) {
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

    public function register(Request $request)
    {
        $formAction = $request->has('next') ?
            route('register', ['next' => $request->next]) :
            route('register');

        return view('auth.register', compact('formAction'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'contact' => 'required',
        ]);

        $user = User::create($request->only('name', 'email', 'password', 'contact'));

        auth()->login($user);

        if ($request->has('next')) {
            return redirect()->route('enroll.show', ['event' => $request->next]);
        }

        return redirect()->route('enroll.index');
    }
}

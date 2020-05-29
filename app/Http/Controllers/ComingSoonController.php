<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class ComingSoonController extends Controller
{
    public function index()
    {
        $openDateEnv = env('ANFORCOM_OPEN_COMING_SOON');

        if (! $openDateEnv) {
            return redirect()->route('home');
        }

        $openDate = new DateTime($openDateEnv);
        $now = new DateTime('today');

        if ($now >= $openDate) {
            return redirect()->route('home');
        }

        return view('comingsoon');
    }
}

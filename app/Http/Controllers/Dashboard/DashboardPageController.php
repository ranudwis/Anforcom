<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPageController extends Controller
{
    public function index(Request $request)
    {
        $registrations = $request->user()->registrations()->with('event')->get();

        return view('dashboard.index', compact('registrations'));
    }
}

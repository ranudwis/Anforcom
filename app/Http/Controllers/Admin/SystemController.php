<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Artisan;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function linkStorage()
    {
        Artisan::call('storage:link');

        return back()->with('status', 'Storage linked');
    }
}

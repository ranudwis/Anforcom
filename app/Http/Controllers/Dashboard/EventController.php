<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\DashboardEventMiddleware;
use App\Event;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware(DashboardEventMiddleware::class);
    }

    public function show(Event $event)
    {
        return 'aaa';
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $request->validate([
            'payment_confirm' => 'required|image',
        ]);

        $team = $request->user()->team;
        $team->payment_confirm = $request->payment_confirm->store('public/images/payment_confirm');
        $team->save();

        return back()->with('status', 'Berhasil di konfirmasi');
    }
}

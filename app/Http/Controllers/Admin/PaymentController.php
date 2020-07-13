<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;
use App\Registration;
use App\Event;
use App\User;
use Storage;

class PaymentController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('admin.payment2', compact('events'));
    }

    public function confirm($regis)
    {
        $registration = Registration::where('id', $regis)->update(['status' => 'active']);

        return back()->with('status', 'Tim dikonfirmasi');
    }

    public function reject(Registration $regis)
    {
        Storage::delete($regis->payment_confirmation);
        $regis->payment_confirmation = null;
        $regis->save();

        return back()->with('status', 'Pembayaran tim ditolak dan dihapus');
    }

    public function delete(Registration $regis)
    {
        $regis->teams()->delete();
        $regis->delete();

        return back()->with('status', 'Tim dihapus');
    }

    public function show($id)
    {
        $registration = Registration::with('teams.leader')->where('event_id', $id)->get();

        return view('admin.payment', compact('registration'));
    }

    public function pay()
    {
        return 'Dimas Iktiar Pandawi';
    }
}

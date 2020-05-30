<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;
use Storage;

class PaymentController extends Controller
{
    public function index()
    {
        $teams = Team::where('is_active', false)->with('leader')->get();

        return view('admin.payment', compact('teams'));
    }

    public function confirm(Team $team)
    {
        $team->is_active = true;
        $team->save();

        return back()->with('status', 'Tim dikonfirmasi');
    }

    public function reject(Team $team)
    {
        Storage::delete($team->paymment_confirm);
        $team->payment_confirm = null;
        $team->save();

        return back()->with('status', 'Pembayaran tim ditolak dan dihapus');
    }

    public function delete(Team $team)
    {
        $team->leader->delete();
        $team->members()->delete();
        $team->delete();

        return back()->with('status', 'Tim dihapus');
    }
}

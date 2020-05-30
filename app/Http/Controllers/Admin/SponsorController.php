<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function uploadSponsor(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'sponsor' => 'required',
            'width' => 'required',
            'height' => 'required',
        ]);

        Sponsor::create([
            'name' => $request->name,
            'logo' => $request->sponsor->store('public/image/sponsor'),
            'width' => $request->width,
            'height' => $request->height,
        ]);

        return back()->with('status', 'Sponsor berhasil ditambahkan');
    }
}

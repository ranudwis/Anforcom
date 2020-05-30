<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Medpart;
use Illuminate\Http\Request;

class MedpartController extends Controller
{
    public function uploadMedpart(Request $request)
    {

        //data validate
        $request->validate([
            'name' => 'required',
            'logo' => 'required',
            'widht' => 'required',
            'height' => 'required'
        ]);

        //insert data
        Medpart::create([
            'name' => $request->name,
            'logo' => $request->medpart->store('public/images/medpart'),
            'widht' => $request->widht,
            'height' => $request->height
        ]);

        return back()->with('status', 'Media Partner berhasil di tambahkan');
    }
}

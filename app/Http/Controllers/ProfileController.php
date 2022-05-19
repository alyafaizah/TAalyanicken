<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function informasipribadi()
    {
        return view('modules.profile.informasipribadi');
    }

    public function informasiakun()
    {
        return view('modules.profile.informasiakun');
    }

    public function ubahkatasandi()
    {
        return view('modules.profile.ubahkatasandi');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    public function ubahkatasandi()
    {
        return view('modules.profile.ubahkatasandi');
    }

    //tampil informasi pribadi
    function index() {

        $identitas =Identitas::all();
    return view('modules.profile.informasipribadi', compact('identitas'));
    }

}

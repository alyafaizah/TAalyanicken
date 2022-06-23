<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Diskon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LandingPage extends Controller
{
    public function index()
    {
        $tiket = Ticket::first();
        $diskon = DB::table('diskon')->get();


        return view('modules.landingpage.landingpage2', compact('tiket','diskon'));


        // return view('modules.landingpage.landingpage2', compact('data'));
    }

}

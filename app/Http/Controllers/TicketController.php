<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    
    function index() {

        $data = array(

            'tiket' => DB::table('data_tiket')->get()
        );

        return view('modules.tiket.datatiket', $data);
    }

    function create(){ //halaman buat tiket
        return view('modules.tiket.createtiket');
    }
}

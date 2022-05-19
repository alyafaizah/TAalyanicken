<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function riwayattransaksi()
    {
        return view('modules.riwayat.riwayattransaksi');
    }
    public function riwayatpembayaran()
    {
        return view('modules.riwayat.riwayatpembayaran');
    }

}

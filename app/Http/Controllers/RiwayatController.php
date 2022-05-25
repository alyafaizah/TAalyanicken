<?php

namespace App\Http\Controllers;

use App\Models\PemesananTiket;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    public function riwayattransaksi()
    {
        $data = array(

            'pemesanan' => DB::table('pemesanan')->get()
        );
        return view('modules.riwayat.riwayattransaksi', $data);
    }
    public function riwayatpembayaran()
    {
        $data = array(

            'pembayaran' => DB::table('pembayaran')->get()
        );
        return view('modules.riwayat.riwayatpembayaran', $data);
    }

}

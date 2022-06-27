<?php

namespace App\Http\Controllers;

use App\Models\PemesananTiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $transaksi = PemesananTiket::get();
        $transaksi=DB::table('pemesanan')->select([
            DB::raw('count(*) as banyaktransaksi'),
            DB::raw('sum(total) as pendapatan')
        ])
        ->get();

        return view('modules.dashboard.index',compact('transaksi'));
    }

    public function dashboardpetugas()
    {
        return view('modules.dashboard.dashboardpetugas');
    }



    // scan camera
    public function checkQR( Request $request ) {

        $qr = $request->input('qr');

        $pesan = false;
        if ( $qr == "sinauka" ) {

            $pesan = true;
        }


        echo json_encode( ['status' => $pesan] );

    }
}

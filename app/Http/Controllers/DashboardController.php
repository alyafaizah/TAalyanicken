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



    function dinamisroute( $name ) {


        echo "<h1>Hello ". $name ."</h1>";
    }

    public function dashboardpetugas()
    {
        return view('modules.dashboard.dashboardpetugas');
    }
}

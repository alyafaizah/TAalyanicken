<?php

namespace App\Http\Controllers;

use App\Models\PemesananTiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $transaksionline = PemesananTiket::get();
        $transaksioffline = PemesananTiket::get();
        $transaksioffline = DB::table('pemesanan')->select(
            DB::Raw('count(*) as banyaktransaksioffline'),
            DB::raw('sum(total) as pendapatanoffline')
        )
            ->where("jenis_pemesanan", 'offline')
            ->first();

        $transaksionline = DB::table('pemesanan')->select(
            DB::Raw('count(*) as banyaktransaksionline'),
            DB::raw('sum(total) as pendapatanonline')
        )
            ->where("jenis_pemesanan", 'online')
            ->first();

        return view('modules.dashboard.index', compact('transaksionline', 'transaksioffline'));
    }

    public function dashboardpetugas()
    {
        $transaksionline = PemesananTiket::get();
        $transaksioffline = PemesananTiket::get();
        $transaksioffline = DB::table('pemesanan')->select(
            DB::Raw('count(*) as banyaktransaksioffline'),
            DB::raw('sum(total) as pendapatanoffline')
        )
            ->where("jenis_pemesanan", 'offline')
            ->first();

        $transaksionline = DB::table('pemesanan')->select(
            DB::Raw('count(*) as banyaktransaksionline'),
            DB::raw('sum(total) as pendapatanonline')
        )
            ->where("jenis_pemesanan", 'online')
            ->first();

        return view('modules.dashboard.dashboardpetugas', compact('transaksionline', 'transaksioffline'));
    }



    // scan camera
    public function checkQR(Request $request)
    {

        $qr = $request->input('qr');

        $pesan = false;
        if ($qr == "sinauka") {

            $pesan = true;
        }


        echo json_encode(['status' => $pesan]);
    }
}

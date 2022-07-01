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

        // inisialisasi
        $qr = $request->input('qr');
        $pesan = false;
        $data = [];

        // ambil query data pemesanan 
        $dt_pemesanan = DB::table('pemesanan')->where('kd_order', $qr);
        $jumlah = $dt_pemesanan->count();
        if ( $jumlah == 1 ){

            $pesan = true;
            $dt_pemesanan = $dt_pemesanan->first();

            // cek apakah pembeli (user) atau kasir 
            if ( $dt_pemesanan->jenis_pemesanan == "online" ) {

                $id_profile = $dt_pemesanan->id_profile;

                // ambil data profile 
                $identitas = DB::table('identitas')->where('id_profile', $id_profile)->first();

                $data = array(

                    'kd_order'  => $dt_pemesanan->kd_order,
                    'jenis_tiket'  => $dt_pemesanan->kd_order,
                    'tgl_kunjungan'  => date('d F Y', strtotime($dt_pemesanan->tgl_kunjungan)),
                    'jumlah'  => $dt_pemesanan->jumlah,
                    'harga'  => $dt_pemesanan->harga,
                    'total'  => $dt_pemesanan->total,

                    'identitas' => $identitas->nama_lengkap  
                );
            }
        }

        echo json_encode(['status' => $pesan, 'data' => $data]);
    }
}

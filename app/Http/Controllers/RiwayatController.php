<?php

namespace App\Http\Controllers;

use App\Models\PemesananTiket;
use App\Models\Pembayaran;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    public function riwayattransaksi()
    {
        $pemesanan = PemesananTiket::all();
        $jenis_tiket = Ticket::all();
        // $data = $pemesanan->join('kd_tiket', $jenis_tiket->kd_tiket, '=', $pemesanan->kd_tiket);
        $data = array(
            'jenis_tiket' => $jenis_tiket,
            'pemesanan' => $pemesanan
        );
        // echo "<pre>";
        // print_r($jenis_tiket);
        // die;
        return view('modules.riwayat.riwayattransaksi', $data);
    }

    public function riwayatpembayaran()
    {
        $pembayaran = Pembayaran::all();
        $jenis_tiket = Ticket::all();
        $data = array(
            'jenis_tiket' => $jenis_tiket,
            'pembayaran' => $pembayaran
        );
        // echo "<pre>";
        // print_r($jenis_tiket);
        // die;
        return view('modules.riwayat.riwayatpembayaran', $data);
    }

    public function riwayatById($kd_order)
    {
        $pemesanan = PemesananTiket::where('kd_order', $kd_order)->get();
        $jenis_tiket = Ticket::all();
        $pembayaran = Pembayaran::where('kd_order', $kd_order)->get();
        $data = array(
            'jenis_tiket' => $jenis_tiket,
            'pemesanan' => $pemesanan,
            'pembayaran' => $pembayaran
        );
        return view('modules.riwayat.detailriwayat', $data);
    }

    public function riwayatadmin()
    {
        return view('modules.riwayat.riwayatadmin');
    }
}

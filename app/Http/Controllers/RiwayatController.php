<?php

namespace App\Http\Controllers;

use App\Models\PemesananTiket;
use App\Models\Pembayaran;
use App\Models\Ticket;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    public function riwayattransaksi()
    {
        $id_profile = session("id");
        $pemesanan  = Profile::where('id_profile', $id_profile)->first();
        $pemesanan  = PemesananTiket::where('id_profile', $id_profile)->orderBy('created_at', 'desc')->get();

        // $data = $pemesanan->join('kd_tiket', $jenis_tiket->kd_tiket, '=', $pemesanan->kd_tiket);
        $data = array(

            'pemesanan' => $pemesanan
        );
        // echo "<pre>";
        // print_r($jenis_tiket);
        // die;
        return view('modules.riwayat.riwayattransaksi', $data, [
            "title" => "Riwayat Transaksi"
        ]);
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
        return view('modules.riwayat.riwayatpembayaran', $data, [
            "title" => "Riwayat Pembayaran"
        ]);
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
        
        $dt_pemesanan = array();


        // ambil data 
        $pemesanan = DB::table('pemesanan')->get(); 

        // print_r($data);
        return view('modules.riwayat.riwayatadmin', compact('pemesanan'));
    }
}

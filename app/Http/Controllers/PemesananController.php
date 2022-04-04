<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    //menampilkan
    function index()
    {

        $data = array(

            'dtpemesanan' => DB::table('pemesanan')->get()
        );

        return view('modules.pemesanantiket.dtpemesanantiket', $data);
    }

    // fungsi hapus 
    function delete( $kd ) {

        $dtpemesanan = Ticket::where('kd_order', $kd);
        
        if ( $dtpemesanan ) {

            $dtpemesanan->delete();
            return redirect('dtpemesanantiket')->with('pesan', 'Tiket berhasil terhapus');
        } else {

            return redirect('dtpemesanantiket')->with('pesan', 'Hapus gagal, Kode tiket ' . $kd.' tidak ditemukan');
        }

    }
}

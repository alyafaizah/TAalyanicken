<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemesananTiket;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $tiket = Ticket::first();
        return view('modules.checkout.checkout', compact('tiket'));
    }

    function process( Request $request ) {

        $ambilTanggal  = $request->input('tgl_kunjungan');
        $ambiljumlah        = $request->input('jumlah');

        // konversi menjadi Y-M-d
        $date_to_string = strtotime($ambilTanggal);
        $date = date('Y-m-d', $date_to_string);

        $data = array(
            'tanggal'      => $date,
            'jumlah'       => $ambiljumlah
        );

        // insert
        PemesananTiket::create( $data );

        return redirect('checkout');
    }

    public function struk()
    {
        return view('modules.checkout.struk');
    }





    // ambil data date
    public function request_date( Request $request ) {

        $tanggal = $request->input('tanggal');
        $dayOfIndex = date("w", strtotime( $tanggal ));

        $tiket = Ticket::first();
        
        $harga = 0;
        $hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

        if ( $dayOfIndex == 0 || $dayOfIndex == 6  ) {

            $type = "Weekend";
            $harga = $tiket->weekend;            

        } else {

            $type = "Weekday";
            $harga = $tiket->weekday;
        }


        echo json_encode( [$type, $harga, $hari[ $dayOfIndex ]] );
    }



    // proses pemesanan untuk pelanggan 
    public function proses_pemesanan( Request $request ) {

        $dt_pemesanan = array(

            
            'kd_order'      => $request->input('kd_order'),
            'id_profile'    => session('id'),
            'tgl_kunjungan' => date('Y-m-d H:i:s', strtotime($request->input('tanggal'))),
            'jumlah'        => $request->input('jumlah'),
            'harga'        => $request->input('harga'),
            'total'        => $request->input('jumlah')*$request->input('harga'),
            'status'        => "diproses",
            'jenis_tiket'   => strtolower($request->input('jenis_tiket')),
            'jenis_pemesanan' => "online",
        );

        // insert
        DB::table('pemesanan')->insert($dt_pemesanan);
        echo "Oke berhasil";
        // return redirect('transaction-success/'. $dt_pemesanan['kd_order']);
    }
}

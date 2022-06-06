<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemesananTiket;

class CheckoutController extends Controller
{
    public function checkout()
    {
        return view('modules.checkout.checkout');
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
}

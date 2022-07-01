<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemesananTiket;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CheckoutController extends Controller
{
    
    public function checkout( Request $request ){
        
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000, //total pembelian
            ),

            'item_details' => array(
                [
                    'id' => 'a1', //id produk
                    'price' => '10000',
                    'quantity' => 1,
                    'name' => 'Apel'
                ],

                [
                    'id' => 'b1', //id produk
                    'price' => '12000',
                    'quantity' => 1,
                    'name' => 'Jeruk'
                ],
            ),

            'customer_details' => array(
                'first_name' => $request->get('nama_lengkap'),
                'last_name' => 'pratama',
                'email' => $request->get('email'),
                'phone' => $request->get('nomor'),
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $tiket = Ticket::first();

        $data = array(

            "title" => "Pemesanan",
            'tiket' => $tiket,
            'snap_token' => $snapToken,
        );
        return view('modules.checkout.checkout', $data);
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


        echo json_encode( [$type, $harga, $tanggal, $hari[ $dayOfIndex ]]);
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

    public function payment(Request $request)
    {

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000, //total pembelian
            ),

            'item_details' => array(
                [
                    'id' => 'a1', //id produk
                    'price' => '10000',
                    'quantity' => 1,
                    'name' => 'Apel'
                ],

                [
                    'id' => 'b1', //id produk
                    'price' => '12000',
                    'quantity' => 1,
                    'name' => 'Jeruk'
                ],
            ),

            'customer_details' => array(
                'first_name' => $request->get('nama_lengkap'),
                'last_name' => 'pratama',
                'email' => $request->get('email'),
                'phone' => $request->get('nomor'),
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        echo $snapToken;
        // return view('payment', ['snap_token' => $snapToken]);
    }

    //Qr-Code
    public function qrcode(){
        return view('modules.checkout.qr-code');
    }
}

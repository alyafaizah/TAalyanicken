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
        $pemesanan = PemesananTiket::where('kd_order', $kd_order)->first();
        $pembayaran = Pembayaran::where('kd_order', $kd_order)->get();

        // customer
        $id_profile = $pemesanan->id_profile;
        $identitas = DB::table('identitas')->where('id_profile', $id_profile)->first();
        $profile = DB::table('profile')->where('id_profile', $id_profile)->first();

        $status_kupon = $pemesanan->coupon;
        $potongan = 0;


        $item_details = array([
            'id' => $pemesanan->id_pemesanan,
            'price' => $pemesanan->harga,
            'quantity' => $pemesanan->jumlah,
            'name' => "Tiket " . $pemesanan->jenis_tiket
        ]);

        if (!empty($status_kupon)) {

            // ambil data diskon
            $diskon = DB::table('diskon')->where('kode_diskon', $status_kupon)->first();
            // $potongan = $diskon->nilai_diskon;

            $total = $pemesanan->total;
            $diskon = $pemesanan->total * ($diskon->nilai_diskon / 100);

            $total_keseluruhan = $total - $diskon;


            array_push($item_details, array(

                'id'    => "D1",
                'price' => - ($diskon),
                'quantity'  => 1,
                'name'      => "Voucher " . $pemesanan->coupon
            ));
        }




        /** Midtrans Section */
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;








        $total_keseluruhan = $pemesanan->total;
        // if ( $diskon->nilai_diskon > 0 ) {

        //     $total = $pemesanan->total;
        //     $diskon = $pemesanan->total * ($diskon->nilai_diskon / 100);

        //     $total_keseluruhan = $total - $diskon;


        // }





        $params = array(
            'transaction_details' => array(
                'order_id' => strtoupper(uniqid()), // sementara
                'gross_amount' => $total_keseluruhan,
            ),
            'item_details' => $item_details,
            'customer_details' => array(
                'first_name' => $identitas->nama_lengkap,
                'last_name' => '',
                'email' => $profile->email,
                'phone' => $identitas->telepon,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        /** End Section */





        $data = array(
            'pemesanan' => $pemesanan,
            'pembayaran' => $pembayaran,
            'potongan'   => $potongan,

            // midtrans
            'snap_token'    => $snapToken
        );
        return view('modules.riwayat.detailriwayat', $data);
    }

    public function riwayatadmin()
    {

        $dt_pemesanan = array();
        $searchParam = request("search");
        $pemesanan = PemesananTiket::where([
            ["kd_order", "LIKE", "%" . $searchParam . "%"],
        ])->orderBy('created_at', 'desc')->get();

        // ambil data 
        $pemesanan = DB::table('pemesanan')->orderBy('created_at', 'desc')->get();

        // print_r($data);
        return view('modules.riwayat.riwayatadmin', [
            "pemesanan" => $pemesanan,
            "search" => $searchParam,
        ]);
    }

    public function riwayatpetugas()
    {
        $searchParam = request("search");
        $pemesanan = PemesananTiket::where([
            ["kd_order", "LIKE", "%" . $searchParam . "%"],
        ])->orderBy('created_at', 'desc')->get();
        // $dt_pemesanan = array();
        // $pemesanan = DB::table('pemesanan')->get();

        // ambil data 
        // $pemesanan = $pemesanan->paginate(10);


        // print_r($data);
        return view('modules.riwayat.riwayatpetugas', [
            "pemesanan" => $pemesanan,
            "search" => $searchParam,
        ]);
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
                'gross_amount' => 18000,
            ),
            'item_details' => array(
                [
                    'id' => 'a1',
                    'price' => '10000',
                    'quantity' => 1,
                    'name' => 'Apel'
                ], [
                    'id' => 'b1',
                    'price' => '8000',
                    'quantity' => 1,
                    'name' => 'Jeruk'
                ]
            ),
            'customer_details' => array(
                'first_name' => $request->get('uname'),
                'last_name' => '',
                'email' => $request->get('email'),
                'phone' => $request->get('number'),
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('modules.riwayat.dummy-payment', ['snap_token' => $snapToken]);
    }
}

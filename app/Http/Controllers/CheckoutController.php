<?php
namespace App\Http\Controllers;

use App\Models\Diskon;
use Illuminate\Http\Request;
use App\Models\PemesananTiket;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CheckoutController extends Controller
{
    
    public function checkout( Request $request ){
        
        

        $tiket = Ticket::first();

        $data = array(

            "title" => "Pemesanan",
            'tiket' => $tiket,
        );
        return view('modules.checkout.checkout', $data);
    }




    // ambil data input 
    public function createSnap( Request $request ) {


        $id_profile = session('id');
        $identitas = DB::table('identitas')->where('id_profile', $id_profile)->first();

        $kd_order = $request->kd_order;
        $radeem = $request->radeem;
        $harga = $request->harga;
        $jenis_tiket = $request->jenis_tiket;
        $jumlah = $request->jumlah;

        $total_keseluruhan = $harga * $jumlah;



        // item detail 
        $item_details = array([
            'id' => 1, //id produk
            'price' => $harga,
            'quantity' => $jumlah,
            'name' => "Tiket ". $jenis_tiket
        ]);
        
        
        if ( $radeem ) {

            // ambil data discount by code
            $dt_diskon = DB::table('diskon')->where('kode_diskon', $radeem)->first();
            $diskon = $dt_diskon->nilai_diskon / 100;

            $potongan = ($harga * $jumlah) * $diskon;
            $total_keseluruhan = $potongan;
            
            array_push( $item_details, array(

                'id'    => 2,
                'price'     => -($potongan),
                'quantity'  => 1,
                'name'      => "Kode Unik ". $radeem.' dengan potongan '. $dt_diskon->nilai_diskon.'%'
            ) );


        }

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
                'order_id' => $kd_order,
                'gross_amount' => $total_keseluruhan, //total pembelian
            ),
            'item_details' => $item_details,

            'customer_details' => array(
                'first_name' => $identitas->nama_lengkap,
                'last_name' => 'pratama',
                'email' => session('email'),
                'phone' => $identitas->telepon,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);


        echo json_encode($snapToken);
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

        $kupon = $request->input('radeem');
        $data_transaksi = $request->input('data-json');
        
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
            'coupon'    => $kupon
        );


        $json = json_decode($data_transaksi);
        $dt_pembayaran = array(

            'status'         => $json->transaction_status,
            'transaction_id' => $json->transaction_id,
            'kd_order'       => $json->order_id,
            'gross_amount'   => $json->gross_amount,
            'payment_type'  => $json->payment_type,
            'payment_code'  => $json->status_code,
            'pdf_url'       => ""
        );


        if ( $json->transaction_status == "settlement" ) {

            $dt_pemesanan["status"] = "diterima";
        }


        // generate new QR by kd_order
        QrCode::size(300)->format('svg')->generate($dt_pemesanan['kd_order'], '../public/assets/qrcodes/' .$dt_pemesanan['kd_order']. '.svg');


        if ( $kupon ) {

            // cek apakah kode kupon tidak berubah
            $cek_kupon = DB::table('diskon')->where('kode_diskon', $request->input('discount'));
            if ( $cek_kupon->count() > 0 ) {


                $id_diskon = $cek_kupon->first()->id_diskon;
                // insert
                $id_pemesanan = DB::table('pemesanan')->insertGetId($dt_pemesanan);
                DB::table('pembayaran')->insert( $dt_pembayaran );

                $data_history_diskon = array(

                    'id_diskon'     => $id_diskon,
                    'id_profile'    => session('id'),
                    'id_pemesanan'  => $id_pemesanan
                );

                DB::table('diskon_history')->insert( $data_history_diskon );
                return redirect('checkout-success/'. $dt_pemesanan['kd_order']);

            } else {


                echo "Kode diskon berubah, kode tidak valid";
            }
        } else {

            // insert
            DB::table('pemesanan')->insert($dt_pemesanan);
            DB::table('pembayaran')->insert( $dt_pembayaran );
            return redirect('checkout-success/'. $dt_pemesanan['kd_order']);
        }

        

       
        
        // 
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



    // check coopon
    public function check_coupon( Request $request ) {

        $id_profile = session('id');
        $kupon = $request->input('kupon');


        $cek = Diskon::where('kode_diskon', $kupon);

        $status = false; 
        $pesan = "";
        $data = [];
        
        // kode valid ? 
        if ( $cek->count() == 1 ){

            // cek apakah diskon belum kadaluarsa ? 
            $dt_diskon = $cek->first();

            $now = strtotime("now");
            $start = strtotime( $dt_diskon->tgl_awal );
            $end = strtotime( $dt_diskon->tgl_akhir );


            // cek
            if ( ($start <= $now) && ($now <= $end) ) {

                // masih berjalan
                
                // cek apakah user sudah pernah menggunakan diskon ?
                $where = array(

                    'id_profile'    => $id_profile,
                    'id_diskon'     => $dt_diskon->id_diskon
                ); 
                $cek_user = DB::table('diskon_history')->where($where);

                if ( $cek_user->count() == 0 ) {


                    $data = $dt_diskon;
                    $pesan = "Oke kode digunakan";
                    $status = true;
                } else {

                    $pesan = "Kode sudah digunakan";
                }

            } else {

                $pesan = "Kode diskon telah kadaluarsa";
            }
        } else {

            $pesan = "Kode tidak ditemukan";
        }

        echo json_encode([
            'status'    => $status,
            'pesan'     => $pesan,
            'data'      => $data
        ]);

    }
    public function pemesanan_berhasil(){
        return view('modules.checkout.view_success_cust');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemesananTiket;
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

    // view edit
    function view_edit($kd)
    {

        $data['pemesanan'] = PemesananTiket::where('kd_order', $kd)->first();
        $data['kd_order'] = $kd;

        return view('modules.pemesanantiket.dtpemesanantiket', $data);
    }

    function update(Request $request, $kd)
    {

        $dtpemesanan = PemesananTiket::where('kd_order', $kd);

        if ($dtpemesanan) {

            $ambilKodeTiket = $request->input('kd_tiket');
            $ambilTgl  = $request->input('tgl_kunjungan');
            $ambilStatus   = $request->input('status');

            $data = array(

                'kd_order'     => strtoupper(uniqid()),
                'kd_tiket'     => $ambilKodeTiket,
                'tgl_kunjungan'=> $ambilTgl,
                'status'       => $ambilStatus
            );


            $dtpemesanan->update($data);
            return redirect('dtpemesanantiket');

        } else {


            echo "invalid kd " . $kd;
        }
    }

    // fungsi hapus 
    function delete($kd)
    {

        $dtpemesanan = PemesananTiket::where('kd_order', $kd);

        if ($dtpemesanan) {

            $dtpemesanan->delete();
            return redirect('dtpemesanantiket')->with('pesan', 'Data Pemesanan Tiket Berhasil Terhapus');
        } else {

            return redirect('dtpemesanantiket')->with('pesan', 'Hapus gagal, Kode Order ' . $kd . ' tidak ditemukan');
        }
    }












    /**
     * 
     *  Pemesanan Tiket 
     * 
     */
    
    // view form order
    public function form_orderoffline() {
            
        $data['tiket'] = DB::table('data_tiket')->get();

        return view('modules.orderoffline.view_form_order', $data);
    }
    




    public function form_orderoffline_pembayaran( Request $request ) {
    
        $input = array(
            
            'kode_order'    => $request->input('kode_order'),
            'nama_pengunjung'       => $request->input('nama_pengunjung'),
            'id_profile'    => 1,// session
            'tgl_kunjungan' => strtotime("now"),
            'jumlah'        => $request->input('jumlah'),
            'status'        => "berhasil",
            'jenis_tiket' => $request->input('jenis'),
            'jenis_pemesanan' => "offline"
        );


        // ambil informasi data tiket 
        $dt_tiket = DB::table('data_tiket')->first();

        $data = array(

            'input' => $input,
            'tiket' => $dt_tiket
        );
    
        return view('modules.orderoffline.view_form_orderpembayaran', $data);
    }





    /** Proses pemesanan */
    public function proses_pemesanan( Request $request ) {

        $dt_pemesanan = array(

            
            'kd_order'      => $request->input('kode_order'),
            'id_profile'    => session('id'),
            'tgl_kunjungan' => date('Y-m-d H:i:s'),
            'jumlah'        => $request->input('jumlah'),
            'status'        => "berhasil",
            'jenis_tiket'   => $request->input('jenis_tiket'),
            'jenis_pemesanan' => "offline",
        );


        $dt_pembayaran = array(
            'kd_order'      => $request->input('kode_order'),
            'total_bayar'   => $request->input('bayar'),
            'type'      => "",
            'tanggal'   => date('Y-m-d H:i:s'),
            'file'      => ""
        );


        // insert
        DB::table('pemesanan')->insert($dt_pemesanan);
        DB::table('pembayaran')->insert($dt_pembayaran);

        return redirect('transaction-success/'. $dt_pemesanan['kd_order']);
        
    }



    public function pemesanan_berhasil( $kd_order ) {

        return view('modules.orderoffline.view_success');
    }



}

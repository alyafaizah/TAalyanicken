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

            'pemesan'       => $request->input('nama_pengunjung'),
            'kd_order'      => $request->input('kode_order'),
            'kd_tiket'      => $request->input('jenis_tiket'),
            'id_profile'    => 1,// session
            'tgl_kunjungan' => strtotime("now"),
            'jumlah'        => $request->input('jumlah'),
            'jenis_pemesanan' => "offline"
        );


        // ambil informasi data tiket 
        $dt_tiket = DB::table('data_tiket')->where('kd_tiket', $request->input('jenis_tiket'))->first();

        $data = array(

            'input' => $input,
            'tiket' => $dt_tiket
        );
        
        return view('modules.orderoffline.view_form_orderpembayaran', $data);
    }
}

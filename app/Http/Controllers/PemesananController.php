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
     */
    
    // view form order
    public function form_orderoffline() {

        return view('modules.orderoffline.view_form_order');
    }



    public function form_orderoffline_pembayaran() {

        return view('modules.orderoffline.view_form_orderpembayaran');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PemesananTiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $transaksionline = PemesananTiket::get();
        $transaksioffline = PemesananTiket::get();
        $transaksioffline = DB::table('pemesanan')->select(
            DB::Raw('count(*) as banyaktransaksioffline'),
            DB::raw('sum(total) as pendapatanoffline')
        )
            ->where("jenis_pemesanan", 'offline')
            ->first();

        $transaksionline = DB::table('pemesanan')->select(
            DB::Raw('count(*) as banyaktransaksionline'),
            DB::raw('sum(total) as pendapatanonline')
        )
            ->where("jenis_pemesanan", 'online')
            ->first();

        return view('modules.dashboard.index', compact('transaksionline', 'transaksioffline'));
    }

    public function dashboardpetugas()
    {
        $transaksionline = PemesananTiket::get();
        $transaksioffline = PemesananTiket::get();
        $transaksioffline = DB::table('pemesanan')->select(
            DB::Raw('count(*) as banyaktransaksioffline'),
            DB::raw('sum(total) as pendapatanoffline')
        )
            ->where("jenis_pemesanan", 'offline')
            ->first();

        $transaksionline = DB::table('pemesanan')->select(
            DB::Raw('count(*) as banyaktransaksionline'),
            DB::raw('sum(total) as pendapatanonline')
        )
            ->where("jenis_pemesanan", 'online')
            ->first();

        return view('modules.dashboard.dashboardpetugas', compact('transaksionline', 'transaksioffline'));
    }



    // scan camera
    public function checkQR(Request $request)
    {

        // inisialisasi
        $qr = $request->input('qr');
        $status = false;
        $pesan = "";
        $data = [];

        // ambil query data pemesanan 
        $dt_pemesanan = DB::table('pemesanan')->where('kd_order', $qr);
        $jumlah = $dt_pemesanan->count();
        if ( $jumlah == 1 ){

            $pesan = true;
            $dt_pemesanan = $dt_pemesanan->first();

            // cek apakah pembeli (user) atau kasir 
            if ( $dt_pemesanan->jenis_pemesanan == "online" ) {


                // kode belum di gunakan
                if ( $dt_pemesanan->status != "berhasil" ) {

                    $tanggal_jadwal = date('Y-m-d', strtotime($dt_pemesanan->tgl_kunjungan));
                    $tanggal_jadwal = strtotime( $tanggal_jadwal );
                    $now            = strtotime( date('Y-m-d') );

                    if ( $tanggal_jadwal == $now ) {

                        $id_profile = $dt_pemesanan->id_profile;

                        // ambil data profile 
                        $identitas = DB::table('identitas')->where('id_profile', $id_profile)->first();

                        $data = array(

                            'kd_order'  => $dt_pemesanan->kd_order,
                            'jenis_tiket'  => $dt_pemesanan->jenis_tiket,
                            'tgl_kunjungan'  => date('d F Y', strtotime($dt_pemesanan->tgl_kunjungan)),
                            'jumlah'  => $dt_pemesanan->jumlah,
                            'harga'  => $dt_pemesanan->harga,
                            'total'  => $dt_pemesanan->total,

                            'identitas' => $identitas->nama_lengkap  
                        );


                        // update status terpakai 
                        $data_update = array(

                            'status'    => "berhasil"
                        );

                        DB::table('pemesanan')->where('kd_order','=', $qr)->update( $data_update );
                        $pesan = "Kode QR Valid ! Selamat Datang";

                        $status = true;


                    } else if ( $now > $tanggal_jadwal ) {

                        $pesan = "Maaf tiket anda sudah kadaluarsa pada ". date('d F Y', $tanggal_jadwal);
                    } 
                    
                    
                    else {

                        $pesan = "Jadwal Kunjungan anda pada ". date('d F Y', $tanggal_jadwal);
                    }

                } else {

                    $pesan = "Kode Tiket sudah digunakan !";
                }

                
            }
        } else {

            $pesan = "Kode Tiket tidak valid !";
        }

        echo json_encode(['status' => $status, 'pesan' => $pesan, 'data' => $data]);
    }



    // manual check code
    public function manualCheckCode( Request $request ) {

        // inisialisasi
        $kode = $request->input('kode');
        $status = false;
        $pesan = "";
        $data = [];

        // ambil query data pemesanan 
        $dt_pemesanan = DB::table('pemesanan')->where('kd_order', $qr);
        $jumlah = $dt_pemesanan->count();
        if ( $jumlah == 1 ){

            $pesan = true;
            $dt_pemesanan = $dt_pemesanan->first();

            // cek apakah pembeli (user) atau kasir 
            if ( $dt_pemesanan->jenis_pemesanan == "online" ) {


                // kode belum di gunakan
                if ( $dt_pemesanan->status != "berhasil" ) {

                    $tanggal_jadwal = date('Y-m-d', strtotime($dt_pemesanan->tgl_kunjungan));
                    $tanggal_jadwal = strtotime( $tanggal_jadwal );
                    $now            = strtotime( date('Y-m-d') );

                    if ( $tanggal_jadwal == $now ) {

                        $id_profile = $dt_pemesanan->id_profile;

                        // ambil data profile 
                        $identitas = DB::table('identitas')->where('id_profile', $id_profile)->first();

                        $data = array(

                            'kd_order'  => $dt_pemesanan->kd_order,
                            'jenis_tiket'  => $dt_pemesanan->jenis_tiket,
                            'tgl_kunjungan'  => date('d F Y', strtotime($dt_pemesanan->tgl_kunjungan)),
                            'jumlah'  => $dt_pemesanan->jumlah,
                            'harga'  => $dt_pemesanan->harga,
                            'total'  => $dt_pemesanan->total,

                            'identitas' => $identitas->nama_lengkap  
                        );


                        // update status terpakai 
                        $data_update = array(

                            'status'    => "berhasil"
                        );

                        DB::table('pemesanan')->where('kd_order','=', $qr)->update( $data_update );
                        $pesan = "Kode QR Valid ! Selamat Datang";

                        $status = true;


                    } else if ( $now > $tanggal_jadwal ) {

                        $pesan = "Maaf tiket anda sudah kadaluarsa pada ". date('d F Y', $tanggal_jadwal);
                    } 
                    
                    
                    else {

                        $pesan = "Jadwal Kunjungan anda pada ". date('d F Y', $tanggal_jadwal);
                    }

                } else {

                    $pesan = "Kode Tiket sudah digunakan !";
                }

                
            }
        } else {

            $pesan = "Kode Tiket tidak valid !";
        }

        echo json_encode(['status' => $status, 'pesan' => $pesan, 'data' => $data]);
    }
}

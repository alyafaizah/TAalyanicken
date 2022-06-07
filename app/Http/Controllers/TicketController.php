<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    
    function index() {

        $data = array(

            'tiket' => DB::table('data_tiket')->get()
        );

        return view('modules.tiket.datatiket', $data);
    }

    function create(){ //halaman buat tiket
        return view('modules.tiket.createtiket');
    }



    // proses tambah 
    function process( Request $request ) {

        $ambilJenis = $request->input('jenis'); 
        $ambilHarga = $request->input('harga'); 
        $ambilStok  = $request->input('stok'); 
        $ambilKet   = $request->input('keterangan');

        $data = array(

            'kd_tiket'  => date('ymdHis'),
            'jenis'     => $ambilJenis,
            'harga'     => $ambilHarga,
            'stok'      => $ambilStok,
            'keterangan'=> $ambilKet
        );

        // insert
        Ticket::create( $data );
        
        return redirect('tiket');
    }



    // fungsi hapus 
    function delete( $kd ) {

        $tiket = Ticket::where('kd_tiket', $kd);
        
        if ( $tiket ) {

            $tiket->delete();
            return redirect('tiket')->with('pesan', 'Tiket berhasil terhapus');
        } else {

            return redirect('tiket')->with('pesan', 'Hapus gagal, Kode tiket ' . $kd.' tidak ditemukan');
        }

    }




    // view edit
    function view_edit( $kd ) {

        $data['tiket'] = Ticket::where('kd_tiket', $kd)->first();
        $data['kd_tiket'] = $kd;
        
        return view('modules.tiket.edittiket', $data);
    }




    // function proses update
    function update( Request $request, $kd ) {

        $tiket = Ticket::where('kd_tiket', $kd);
        
        if ( $tiket ) {

            $ambilJenis = $request->input('jenis'); 
            $ambilHarga = $request->input('harga'); 
            $ambilStok  = $request->input('stok'); 
            $ambilKet   = $request->input('keterangan');

            $data = array(

                'kd_tiket'  => strtoupper(uniqid()),
                'jenis'     => $ambilJenis,
                'harga'     => $ambilHarga,
                'stok'      => $ambilStok,
                'keterangan'=> $ambilKet
            );


            $tiket->update( $data);
            return redirect('tiket');
        } else {


            echo "invalid kd ". $kd;
        }

        
    }


    function dtpemesanantiket(){
        $dt = array(
            'dtpemesanantiket'=>DB::table('pemesanan')->get()
        );
        return view('modules.pemesanantiket.dtpemesanantiket', $dt);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    function index() //halaman tampil
    {

        $data = array(

            'petugas' => DB::table('profile')->get()
        );

        return view('modules.petugas.datapetugas', $data);
    }

    function create(){ //halaman buat petugas
        return view('modules.petugas.createpetugas');
    }

    // proses tambah 
    function process( Request $request ) {

        $ambilUsername  = $request->input('username'); 
        $ambilEmail     = $request->input('email'); 
        $ambilPassword  = $request->input('password'); 

        $data = array(

            'id_profile'    => strtoupper(uniqid()),
            'username'      => $ambilUsername,
            'email'         => $ambilEmail,
            'password'      => $ambilPassword,
        );

        // insert
        Petugas::create( $data );
        
        return redirect('petugas');
    }



    // fungsi hapus 
    function delete( $kd ) {

        $petugas = Petugas::where('id_profile', $kd);
        
        if ( $petugas ) {

            $petugas->delete();
            return redirect('petugas')->with('pesan', 'Petugas berhasil terhapus');
        } else {

            return redirect('petugas')->with('pesan', 'Hapus gagal, Kode petugas ' . $kd.' tidak ditemukan');
        }

    }




    // view edit
    function view_edit( $kd ) {

        $data['petugas'] = Petugas::where('id_profile', $kd)->first();
        $data['id_profile'] = $kd;
        
        return view('modules.petugas.editpetugas', $data);
    }




    // function proses update
    function update( Request $request, $kd ) {

        $petugas = Petugas::where('id_profilet', $kd);
        
        if ( $petugas ) {

            $ambilUsername  = $request->input('username'); 
            $ambilEmail     = $request->input('email'); 
            $ambilPassword  = $request->input('password'); 
            

            $data = array(

                'id_profile'    => strtoupper(uniqid()),
                'username'      => $ambilUsername,
                'email'         => $ambilEmail,
                'password'      => $ambilPassword,
            );


            $petugas->update( $data);
            return redirect('petugas');
        } else {


            echo "invalid kd ". $kd;
        }

        
    }

}

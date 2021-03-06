<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    function index() //halaman tampil
    {
        $tb_profile = Petugas::where('level',"petugas tiket")->get();

        // echo "<pre>";
        // print_r($tb_profile);
        // die;
        $data = array(

            'petugas' => $tb_profile
        );

        return view('modules.petugas.datapetugas', $data);
    }

    function create()
    { //halaman buat petugas
        return view('modules.petugas.createpetugas');
    }

    // proses tambah
    function process(Request $request)
    {
        $ambilEmail     = $request->input('email');
        $ambilPassword  = $request->input('password');

        $data = array(
            'password'      => Hash::make($ambilPassword),
            'level' => "petugas tiket",
            'email'         => $ambilEmail,
        );

        // insert
        Petugas::create($data);

        return redirect('petugas');
    }



    // fungsi hapus
    function delete($kd)
    {

        $petugas = Petugas::where('id_profile', $kd);

        if ($petugas) {

            $petugas->delete();
            return redirect('petugas')->with('pesan', 'Petugas berhasil terhapus');
        } else {

            return redirect('petugas')->with('pesan', 'Hapus gagal, Kode petugas ' . $kd . ' tidak ditemukan');
        }
    }




    // view edit
    function view_edit($kd)
    {

        $data['petugas'] = Petugas::where('id_profile', $kd)->first();
        $data['id_profile'] = $kd;

        return view('modules.petugas.editpetugas', $data);
    }




    // function proses update
    function update(Request $request, $kd)
    {

        $petugas = Petugas::where('id_profile', $kd);

        if ($petugas) {

            $ambilEmail     = $request->input('email');
            $ambilStatus  = $request->input('status_akun');


            $data = array(

                'email'         => $ambilEmail,
                'status_akun'      => $ambilStatus,
            );


            $petugas->update($data);
            return redirect('petugas');
        } else {


            echo "invalid kd " . $kd;
        }
    }
}

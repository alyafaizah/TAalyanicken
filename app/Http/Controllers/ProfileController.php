<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function dashboardcust()
    {
        return view('modules.profile.dashboardcust');
    }

    public function ubahkatasandi()
    {
        return view('modules.profile.ubahkatasandi');
    }

    //tampil informasi pribadi
    function index()
    {

        $identitas = Identitas::all();
        return view('modules.profile.informasipribadi', compact('identitas'));
    }

    // view edit
    function view_edit($kd)
    {

        $data['identitas'] = Identitas::where('id_profile', $kd)->first();
        $data['id_profile'] = $kd;

        return view('modules.profile.editinformasipribadi', $data);
    }


    function update(Request $request, $kd)
    {

        $identitas = Identitas::where('id_profile', $kd);

        if ($identitas) {

            $ambilNama = $request->input('nama_lengkap');
            $ambilAlamat = $request->input('alamat');
            $ambilTelp = $request->input('telepon');
            $ambilTmptlahir  = $request->input('tempat_lahir');
            $ambilTgllahir  = $request->input('tgl_lahir');


            $data = array(

                'id_profile'        => strtoupper(uniqid()),
                'nama_lengkap'      => $ambilNama,
                'telepon'           => $ambilAlamat,
                'stok'              => $ambilTelp,
                'tempat_lahir'      => $ambilTmptlahir,
                'tgl_lahir'         => $ambilTgllahir

            );


            $identitas->update($data);
            return redirect('informasipribadi');
        } else {


            echo "invalid kd " . $kd;
        }
    }
}

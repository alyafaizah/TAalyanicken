<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function dashboardcust()
    {
        $id_profile = session("id");
        $identitas = Identitas::where('id_profile', $id_profile)->first();
        return view('modules.profile.dashboardcust', compact('identitas'));
    }

    public function ubahkatasandi()
    {
        return view('modules.profile.ubahkatasandi');
    }

    //tampil informasi pribadi
    function index()
    {

        $id_profile = session("id");
        $identitas = Identitas::where('id_profile', $id_profile)->first();

        // echo $id_profile;
        return view('modules.profile.informasipribadi', compact('identitas'));

    }

    // view edit
    function view_edit($kd)
    {

        $data['identitas'] = Identitas::where('id_profile', $kd)->first();
        $data['id_profile'] = $kd;

        return view('modules.profile.editinformasipribadi', $data);
    }


    function update(Request $request)
    {

        $id_profile = session("id");
        $identitas = Identitas::where('id_profile', $id_profile);

        if ($identitas) {

            $ambilNama = $request->input('nama_lengkap');
            $ambilAlamat = $request->input('alamat');
            $ambilTelp = $request->input('telepon');
            $ambilTmptlahir  = $request->input('tempat_lahir');
            $ambilTgllahir  = $request->input('tgl_lahir');

            // konversi menjadi Y-M-d 
            $date_to_string = strtotime($ambilTgllahir);
            $date = date('Y-m-d', $date_to_string);

            $data = array(

                'nama_lengkap'      => $ambilNama,
                'alamat'           => $ambilAlamat,
                'telepon'              => $ambilTelp,
                'tempat_lahir'      => $ambilTmptlahir,
                'tgl_lahir'         => $date

            );

            // print_r($data);
            $identitas->update($data);
            return redirect('informasipribadi/');
        } else {


            echo "invalid kd " . $id_profile;
        }
    }
}

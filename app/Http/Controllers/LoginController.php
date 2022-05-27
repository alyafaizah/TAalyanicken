<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    // main utama
    function index()
    {

        return view('modules.login.login');
    }

    // proses pencocokan akun 
    function proses_oldversion(Request $request)
    {

        // $this->validate($request, 

        //     ['email'    => "required"],
        //     ['password' => "required"]
        // );

        // ambil nilai email dan password dari database
        $email      = $request->input('email');
        $password   = $request->input('password');

        $profile = DB::table('profile')->where('email', $email)->first();

        if ($profile) {

            if (Hash::check($password, $profile->password)) {


                $sess = array(

                    'id'        => $profile->id_profile,
                    'username'  => $profile->username,
                    'level'     => $profile->level
                );
                session($sess);

                if ($profile->level == "admin") {

                    return redirect('/dashboard');
                } else if ($profile->level == "petugas_tiket") {

                    // return ...
                    return redirect('/dashboard');
                } else if ($profile->level == "pengunjung") {

                    return redirect('/informasipribadi');
                }
            } else {

                return redirect('/login')->with('pesan', 'Kata sandi salah');
            }
        } else {

            return redirect('/login')->with('pesan', 'Email tidak terdaftar !');
        }


        // echo Hash::make('123');
    }


    function proses(Request $request)
    {

        // $this->validate($request, 

        //     ['email'    => "required"],
        //     ['password' => "required"]
        // );

        // ambil nilai email dan password dari database
        $email      = $request->input('email');
        $password   = $request->input('password');

        $profile = DB::table('profile')->where('email', $email)->first();

        $pesan = "";
        $url = "";

        if ($profile) {

            if (Hash::check($password, $profile->password)) {


                $sess = array(

                    'id'        => $profile->id_profile,
                    'username'  => $profile->username,
                    'level'     => $profile->level
                );
                session($sess);

                if ($profile->level == "admin") {

                    // return redirect('/dashboard');
                    $pesan = "success";
                    $url = url('/dashboard');


                } else if ($profile->level == "petugas_tiket") {

                    $pesan = "success";
                    $url = url('/dashboard');

                } else if ($profile->level == "pengunjung") {

                    $pesan = "success";
                    $url = url('/dashboardcust');
                }
            } else {

                // return redirect('/login')->with('pesan', 'Kata sandi salah');

                $pesan = "Kata sandi salah";
            }
        } else {

            // return redirect('/login')->with('pesan', 'Email tidak terdaftar !');
            $pesan = "Email tidak terdaftar";
        }


        echo json_encode([

            'status'    => $pesan,
            'url'       => $url
        ]);
    }



    //proses sign up
    public function prosesregis_oldversion(Request $request)
    {
        $request->validate([
            // 'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nama_lengkap' => 'required'
        ]);

        $data = array(

            'email'     => strtolower($request->input('email')),
            'password'  => bcrypt($request->input('password')),
            'level'     => "pengunjung"
        );

        $id_profile = DB::table('profile')->insertGetId($data);
        
        

        $dt_identitas = array(

            'id_profile'   => $id_profile,
            'nama_lengkap' => $request->input('nama_lengkap')
        );

        DB::table('identitas')->insert( $dt_identitas );

        session()->flash('message', 'Akun Anda telah dibuat');

        return redirect('/login');
    }

    public function prosesregis(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'nama_lengkap' => 'required'
        ]);

        $data = array(

            'email'     => strtolower($request->input('email')),
            'password'  => bcrypt($request->input('password')),
            'level'     => "pengunjung"
        );

        $id_profile = DB::table('profile')->insertGetId($data);
        
        $pesan = "";
        $url = "";
        

        $dt_identitas = array(

            'id_profile'   => $id_profile,
            'nama_lengkap' => $request->input('nama_lengkap')
        );

        DB::table('identitas')->insert( $dt_identitas );

        // session()->flash('message', 'Akun Anda telah dibuat');
        $pesan = "success";
        $url = url('/login');

        // return redirect('/login');
    }
}

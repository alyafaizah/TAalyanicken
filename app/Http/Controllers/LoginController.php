<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    // main utama
    function index() {

        return view('modules.login.login');
    }

    // proses pencocokan akun 
    function proses( Request $request ) {

        // $this->validate($request, 

        //     ['email'    => "required"],
        //     ['password' => "required"]
        // );

        // ambil nilai email dan password dari database
        $email      = $request->input('email');
        $password   = $request->input('password');

        $profile = DB::table('profile')->where('email', $email)->first();

        if ( $profile ) {

            if ( Hash::check($password, $profile->password) ){


                $sess = array(

                    'id'        => $profile->id_profile,
                    'username'  => $profile->username,
                    'level'     => $profile->level
                );
                session( $sess );
                
                if ( $profile->level == "admin" )  {

                    return redirect('/dashboard');

                } else if ( $profile->level == "petugas_tiket" ) {

                    // return ...
                    echo "Login sebagai petugas tiket";
                }


            } else {

                return redirect('/login')->with('pesan', 'Kata sandi salah');
            }


        } else {

            return redirect('/login')->with('pesan', 'Email tidak terdaftar !');
        }


        // echo Hash::make('123');
    }

}

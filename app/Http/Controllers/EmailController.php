<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmailController extends Controller
{
    public function index()
    {
    }

    public function forgotpass(Request $request)
    {

        $pesan = "success";
        $url = url('/login');

        echo json_encode([

            'status'    => $pesan,
            'url'       => $url
        ]);

        Mail::to('octaviananicken@gmail.com')->send(new SendEmail);
        return 'Berhasil Mengirim Email';
    }
}

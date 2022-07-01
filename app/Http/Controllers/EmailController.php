<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    public function index()
    {
    }

    public function forgotpass(Request $request)
    {

        Mail::to('octaviananicken@gmail.com')->send(new SendEmail);

        $pesan = "success";
        $url = url('/login');

        echo json_encode([

            'status'    => $pesan,
            'url'       => $url
        ]);

        return 'Berhasil Mengirim Email';
    }
}

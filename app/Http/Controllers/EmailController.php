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
        $email = $request->input('email-forgot');
        $url = url('/login');

    
        Mail::to( $email )->send(new SendEmail);
        
        
        echo json_encode([

            'status'    => $pesan,
            'url'       => $url
        ]);
    }
}

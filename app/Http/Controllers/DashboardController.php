<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('layout.template.template-backend');
    }



    function dinamisroute( $name ) {


        echo "<h1>Hello ". $name ."</h1>";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('modules.dashboard.index');
    }

    public function dashboardpengunjung()
    {
        return view('modules.dashboard.indexpengunjung');
    }



    function dinamisroute( $name ) {


        echo "<h1>Hello ". $name ."</h1>";
    }
}

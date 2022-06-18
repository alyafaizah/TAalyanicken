<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DiskonController extends Controller
{
    function index() {

        $data = array(

            'diskon' => DB::table('diskon')->get()
        );

        return view('modules.diskon.datadiskon', $data);
    }
}

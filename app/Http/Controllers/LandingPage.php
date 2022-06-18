<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class LandingPage extends Controller
{
    public function index()
    {
        $tiket = Ticket::first();
        return view('modules.landingpage.landingpage2', compact('tiket'));
    }
}

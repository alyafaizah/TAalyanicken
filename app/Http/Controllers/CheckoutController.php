<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        return view('modules.checkout.checkout');
    }
    public function struk()
    {
        return view('modules.checkout.struk');
    }
}

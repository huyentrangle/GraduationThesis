<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    function getCheckOut() {
        return view('frontend.checkout.checkout');
    }
    function getComplete() {
        return view('frontend.checkout.complete');
    }
}

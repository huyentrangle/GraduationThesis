<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function getHome(){
        return view('frontend.info.index');
    }
    function getAbout() {
        return view('frontend.info.about');
    }
    function getContact() {
        return view('frontend.info.contact');
    }
}

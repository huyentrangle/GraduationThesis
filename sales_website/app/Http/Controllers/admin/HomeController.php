<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller  
{
    function getDashboard() {
        return view('admin.index');
    }
    function logOut() {
        //
    }
}

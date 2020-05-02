<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function getLogin() {
        return view('admin.login.login');
    }
    function Login() {
        
    }
}

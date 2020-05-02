<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function getUsers() {
        return view('admin.users.listuser');
    }
    function getAddUser() {
        return view('admin.users.adduser');
    }
    function addUser() {
        // return view('admin.product.listproduct');
    }
    function getEditUser() {
        return view('admin.users.edituser');
    }
    function editUser() {
        // return view('admin.product.listproduct');
    }
    function deteteUser() {
        // return view('admin.product.listproduct');
    }
}

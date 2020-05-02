<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function getCategories() {
        return view('admin.category.category');
    }
    function addCategory() {
        //
    }
    function getEditCategory() {
        return view('admin.category.editcategory');
    }

    function editCategory() {
        //
    }
    function deteteCategory() {
        //
    }
}

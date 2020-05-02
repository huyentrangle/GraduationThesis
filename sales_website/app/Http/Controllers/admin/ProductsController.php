<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function getProducts() {
        return view('admin.product.listproduct');
    }
    function getAddProduct() {
        return view('admin.product.addproduct');
    }
    function addProduct() {
        // return view('admin.product.listproduct');
    }
    function getEditProduct() {
        return view('admin.product.editproduct');
    }
    function editProduct() {
        // return view('admin.product.listproduct');
    }
    function deteteProduct() {
        // return view('admin.product.listproduct');
    }
}

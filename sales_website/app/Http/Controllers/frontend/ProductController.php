<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getDetail() {
        return view('frontend.products.detail');
    }
    function getProducts() {
        return view('frontend.products.shop');
    }
}

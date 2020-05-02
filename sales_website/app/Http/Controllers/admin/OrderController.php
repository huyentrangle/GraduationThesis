<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function getOrder() {
        return view('admin.order.order');
    }
    function getDetailOrder() {
        return view('admin.order.detailorder');
    }
    function paymentOrders() {
        // return view('admin.order.order');
    }
    function processed() {
        return view('admin.order.processed');
    }
}

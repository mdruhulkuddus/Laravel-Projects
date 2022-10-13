<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }

    public function productDetails(){
        return view('frontEnd.product.product-details');
    }
}

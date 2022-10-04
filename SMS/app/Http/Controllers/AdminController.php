<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home.home');
    }

    public function logout(){
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
        
    }

    public function add_regular(){
        return view('add_regular');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplyController extends Controller
{
    public function index(){
        
    }

    public function add_supplier(){
        return view('add_supplier');
    }
}

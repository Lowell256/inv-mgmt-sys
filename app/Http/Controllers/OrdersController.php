<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regular_customers_tbl;
use DateTime;

class OrdersController extends Controller
{
    public function index(){
        $regulars = Regular_customers_tbl::all();
        return view('regulars_index')->with('regulars', $regulars);
    }

    public function add_regular(Request $request){
        if ($request->isMethod('POST')){
            $created_at = new DateTime();
            $supplier = Regular_customers_tbl::insert([
                'customer_name' => $request->input('full_name'),
                'address' => $request->input('address'),
                'contact_number' => $request->input('contact_number'),
                'email' => $request->input('email'),
                'created_at' => $created_at
            ]);
            return redirect()->route('regulars_index')->with('success', 'Successfuly added!');
        }
        return view('add_regular');
    }
}

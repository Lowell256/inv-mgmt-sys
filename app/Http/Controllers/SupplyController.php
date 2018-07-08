<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suppliers_tbl;
use DateTime;

class SupplyController extends Controller
{
    public function index(){
        $suppliers = Suppliers_tbl::all();
        return view('suppliers_index')->with('suppliers', $suppliers);
    }

    public function add_supplier(Request $request){
        if ($request->isMethod('POST')){
            $created_at = new DateTime();
            $supplier = Suppliers_tbl::insert([
                'supplier_name' => $request->input('supplier_name'),
                'address' => $request->input('address'),
                'contact_number' => $request->input('contact_number'),
                'email' => $request->input('email'),
                'contact_one_name' => $request->input('c1_name'),
                'contact_one_email' => $request->input('c1_email'),
                'contact_one_number' => $request->input('c1_number'),
                'contact_two_name' => $request->input('c2_name'),
                'contact_two_email' => $request->input('c2_email'),
                'contact_two_number' => $request->input('c2_number'),
                'contact_three_name' => $request->input('c3_name'),
                'contact_three_email' => $request->input('c3_email'),
                'contact_three_number' => $request->input('c3_number'),
                'created_at' => $created_at
            ]);
            return redirect()->route('supplier_add');
        }
        return view('add_supplier');
    }
}

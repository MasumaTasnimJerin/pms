<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;


class SupplierController extends Controller
{
  public function add_supplier()
  {
    return view('supplier.add_supplier');

  }
  public function create_supplier(Request $request)
  {
    Supplier::create([
      'name' =>$request-> name,
       'phone'=>$request-> phone,
        'address'=>$request-> address,
    ]);

    return redirect()->route('add_supplier')->with('message',' Supplier Created Successfully.');
}
public function supplier_list()
{

  $suppliers = Supplier::all();
    return view('supplier.supplier_list',compact('suppliers'));
}
}

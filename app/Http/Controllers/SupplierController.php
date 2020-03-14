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
//Supplier List
public function supplier_list()
{

  $suppliers = Supplier::all();
    return view('supplier.supplier_list',compact('suppliers'));
}

//Supplier Update
public function edit($id)
{

  $supplier = Supplier::find($id);
    return view('supplier.supplier_update',compact('supplier'));
}
public function update(Request $request,$id)
{
  $supplier = Supplier::find($id);
    $supplier->update([
        'name' =>$request->name,
        'phone_number' =>$request->phone_number,
        'address' =>$request->address,


    ]);
    return redirect()->route('supplier_list')->with('message',' Supplier Updated Successfully.');

}
}

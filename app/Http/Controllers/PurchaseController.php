<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use App\Medicine;

class PurchaseController extends Controller
{
  public function add_purchase()
  {
    $medicines = Medicine::all();
    return view('purchase.add_purchase',compact('medicines'));

  }
  public function create_purchase(Request $request)
  {
    //dd($request->all());
    Purchase::create([
      'manufacturer' =>$request-> manufacturer,
       'invoice_no'=>$request-> invoice_no,
         'medicine_id' =>$request-> medicine_id,
          'batch_id'=>$request-> batch_id,
            'quantity'=>$request-> quantity,
            'manufacturer_price'=>$request-> manufacturer_price,





    ]);
    return redirect()->route('add_purchase')->with('message',' Purchase Created Successfully.');
}
public function manage_purchase()
{

  $purchases = Purchase::all();
    return view('purchase.manage_purchase',compact('purchases'));
}
}

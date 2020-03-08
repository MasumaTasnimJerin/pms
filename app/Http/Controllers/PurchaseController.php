<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;


class PurchaseController extends Controller
{
  public function add_purchase()
  {
    return view('purchase.add_purchase');

  }
  public function create_purchase(Request $request)
  {
    Purchase::create([
      'manufacturer' =>$request-> manufacturer,
       'invoice_no'=>$request-> invoice_no,
        'payment'=>$request-> payment,
         'item_information' =>$request-> item_information,
          'batch_id'=>$request-> batch_id,
           'expire_date'=>$request-> expire_date,
            'stock'=>$request-> stock,
            'quantity'=>$request-> quantity,
            'manufacturer_price'=>$request-> manufacturer_price,
            'total'=>$request-> total,





    ]);



    return back()->with('success','Purchase Added Sucessfully');
}
public function manage_purchase()
{

  $purchase = Purchase::all();
    return view('purchase.manage_purchase',compact('purchase'));
}
}

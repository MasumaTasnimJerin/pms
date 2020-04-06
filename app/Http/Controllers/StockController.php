<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;
use App\Stock;

class StockController extends Controller
{
  public function add_stock()
  {
    $medicines = Medicine::all();
    return view('stock.add_stock',compact('medicines'));

  }
  public function create_stock(Request $request)
  {
  //  dd($request->all());
    Stock::create([
      'medicine_id' =>$request-> medicine_id,
       'quantity'=>$request-> quantity,
    ]);

    return redirect()->route('add_stock')->with('message',' Stock Created Successfully.');
}
//Stock List
public function stock_list(){
  $medicines = Medicine::with('purchase')->get();
//dd($medicines);
    return view('stock.stock_list',compact('medicines'));
}
//Stock Update
  public function edit($id)
  {
    $stock=Stock::find($id);
    return view('stock.stock_update',compact('stock'));
  }
  public function update(Request$request,$id)
  {

    $stock=Stock::find($id);
    $stock->update([
      'medicine_name'=>$request->medicine_name,
      'quantity'=>$request->quantity,
    ]);
    return redirect()->route('stock_list')->with('message',' Stock Updated Successfully.');

  }
  public function delete($id){
    $stockDelete = Stock::find($id);
    $stockDelete->delete();
    return redirect()->route('stock_list')->with('message','Stock Deleted Successfully.');
  }
}

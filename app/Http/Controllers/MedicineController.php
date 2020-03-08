<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;
class MedicineController extends Controller
{
  public function add_medicine()
  {
    return view('medicine.add_medicine');

  }


  public function create_medicine(Request $request)
  {
    Medicine::create([
      'name' =>$request-> name,
       'category'=>$request-> category,
        'purchase_price'=>$request-> purchase_price,
        'selling_price'=>$request-> selling_price,
         'quantity'=>$request-> quantity,
          'medicine_shelf'=>$request-> medicine_shelf,
          'generic_name'=>$request-> generic_name,
           'company'=>$request-> company,
            'effects'=>$request-> effects,
            'expire_date'=>$request-> expire_date,
    ]);
    return back()->with('success','Medicine Added Sucessfully');

  }


  //Medicine List
  public function medicine_list()
  {
    $medicines = Medicine::all();
      return view('medicine.medicine_list',compact('medicines'));
  }
}

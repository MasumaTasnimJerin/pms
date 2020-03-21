<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;
use App\Category;
class MedicineController extends Controller
{
  public function add_medicine()
  {
    $categories = Category::all();
    return view('medicine.add_medicine',compact('categories'));

  }


  public function create_medicine(Request $request)
  {

    $data =[
      'name' =>$request->name,
       'category'=>$request->category,
        'purchase_price'=>$request->purchase_price,
        'selling_price'=>$request->selling_price,
         'quantity'=>$request->quantity,
          'medicine_shelf'=>$request->medicine_shelf,
          'generic_name'=>$request->generic_name,
           'company'=>$request->company,
            'effects'=>$request->effects,
            'expire_date'=>$request->expire_date,
    ];

    Medicine::create($data);
    return redirect()->route('add_medicine')->with('message',' Medicine Created Successfully.');


  }


  //Medicine List
  public function medicine_list()
  {
    $medicines = Medicine::with('categoryTable')->get();

      return view('medicine.medicine_list',compact('medicines'));
  }
  //Update Medicine
  public function edit($id)
  {
  $categories = Category::all();
    $medicine = Medicine::find($id);
      return view('medicine.medicine_update',compact('medicine','categories'));
  }
  public function update(Request $request,$id)
  {
      $data =[
          'name' =>$request->name,
          'category'=>$request-> category,
           'purchase_price'=>$request-> purchase_price,
           'selling_price'=>$request-> selling_price,
          'quantity'=>$request-> quantity,
           'medicine_shelf'=>$request-> medicine_shelf,
           'generic_name'=>$request-> generic_name,
            'company'=>$request-> company,
             'effects'=>$request-> effects,
             'expire_date'=>$request-> expire_date,
      ];

      $medicine=Medicine::find($id);

      $medicine->update($data);
      return redirect()->route('medicine_list')->with('message',' Medicine Updated Successfully.');

  }
  public function delete($id){
    $medicineDelete = Medicine::find($id);
    $medicineDelete->delete();
    return redirect()->route('medicine_list')->with('message','Medicine Deleted Successfully.');
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
  public function add_category()
  {
    return view('medicine.add_category');

  }
  public function create_category(Request $request)
  {
    Category::create([
      'name'=>$request->name,
       'description'=>$request->description,
    ]);


  return view('medicine.add_category');

  }
  //Medicine Category
  public function medicine_category()
  {

    $medicine = Medicine::all();
      return view('medicine.medicine_category',compact('medicine'));
  }
}

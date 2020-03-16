<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
  public function add_category()
  {
    return view('category.add_category');

  }
  public function create_category(Request $request)
  {
    Category::create([
      'name'=>$request->name,
       'description'=>$request->description,
    ]);
    return redirect()->route('add_category')->with('message',' Category Created Successfully.');
  }

  //Medicine Category
  public function medicine_category()
  {

    $categories = Category::all();
      return view('category.medicine_category',compact('categories'));
  }
  //Category Update
  public function edit($id)
  {

    $category = Category::find($id);

      return view('category.category_update',compact('category'));
  }
  public function update(Request $request,$id)
  {

    $category = Category::find($id);

      $category->update([
          'name' =>$request->name,
          'description' =>$request->description,

      ]);
      return redirect()->route('medicine_category')->with('message',' Category Updated Successfully.');

  }
  public function delete($id){
    $categoryDelete = Category::find($id);
    $categoryDelete->delete();
    return redirect()->route('medicine_category')->with('message','Category Deleted Successfully.');
  }


}

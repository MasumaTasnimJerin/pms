<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;


class RoleController extends Controller
{
  public function add_role()
  {
    return view('user.add_role');

  }
  public function create_role(Request $request)
  {
  Role::create([
      'name' =>$request-> name,
       'description'=>$request-> description,
    ]);

    return redirect()->route('add_role')->with('message',' Role Created Successfully.');
}
//Role List
public function role_list()
{
 $roles = Role::all();
 return view('user.role_list',compact('roles'));
}
}

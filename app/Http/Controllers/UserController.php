<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
//User List
  public function user_list()
  {

    $users = User::all();
      return view('user.user_list',compact('users'));
  }
  //User Update
  public function edit($id)
  {

    $role = Role::find($id);

      return view('user.role_update',compact('role'));
  }
  public function update(Request $request,$id)
  {

      $role=Role::find($id);

      $role->update([
          'name' =>$request->name,
      ]);
      return redirect()->route('role_list')->with('message',' Role Updated Successfully.');

  }
}

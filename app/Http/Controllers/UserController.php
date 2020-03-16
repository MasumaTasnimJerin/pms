<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;


class UserController extends Controller
{
//User List
  public function user_list()
  {

    $users = User::all();
      return view('user.user_list',compact('users'));
  }
//user Update
public function user_update($user)
{
     $roles = Role::all();
     $user = User::findOrFail($user);
      return view('user.user_update')->with([
        'user' => $user,
        'roles'=> $roles
      ]);
}
public function update(Request $request,User $user)
{
 $user->roles()->sync($request->roles);
   return redirect()->route('user_list')
             ->with('success','User updated successfully.');
}
}

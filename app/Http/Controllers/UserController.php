<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Hash;
use Validator;
use Session;


class UserController extends Controller
{
	//show data
  public function index(){      
    $data["users"] = User::all();
    
    return view('systemsettings.user.index', $data); 
  }

  	// Insert record
  public function store(Request $request) {

		//validate incoming request
    $request->validate([
      'email' => 'required|email|unique:users',
      'name' => 'required|string|max:50',
      'password' => 'required|min:6',
      'role' => 'required',
      'status' => 'required'
    ]);

    $data = $request->all();

    $data["password"] = Hash::make($data["password"]);

    User::create($data);

    return redirect()->route('user.index')
      ->with('success', 'New User Successfully Created!');
 }

 public function create() {
   $data["roles"] = Role::all();
   return view('systemsettings.user.create', $data);
 }

	// Update record
 public function update(Request $request){
  $user = User::find($request->id);
  if($user->update(array_filter($request->except('_token')))){
    return "User Record Updated successfully";
  }
  return "Can't update user.";
}

}

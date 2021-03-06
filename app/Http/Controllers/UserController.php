<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Hash;
use Validator;


class UserController extends Controller
{
	//show data
  public function index(){     
    $data['users'] = User::with('roles')->get();
    
    return view('systemsettings.user.index', $data);
  }

  	// Insert record
  public function store(Request $request) {

		 //validate incoming request
    $validate = $request->validate([
      'name' => 'required|Regex:/^[\D]+$/i|max:50|min:6',
      'email' => 'required|email|unique:users|max:50',
      'password' => 'required|min:6',
      'role' => 'required',
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
  public function update(Request $request, $id){

    $validate = $request->validate([
      'name' => 'required|Regex:/^[\D]+$/i|max:50|min:6',
      'email' => 'required|email|unique:users|max:50',
      'password' => 'min:6',
      'role' => 'required',
    ]);

    $user = User::find($id);

    if($request->password !== null){
      $request->merge([
        'password' => Hash::make($request->password)
      ]);
    }


    if( $user->update( $request->all()->filter() ) ) {

      return redirect()->route('user.index')
        ->with('success', 'New User Successfully Created!');
    }
    return "Can't update user.";
  }
  
  public function edit(Request $request, $userId)
  {
    $data["users"] = User::find($userId);
    $data["roles"] = Role::all();
    return view('systemsettings.user.edit', $data);
  }

}

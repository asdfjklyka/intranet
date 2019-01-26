<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    //show data
  public function index(){
   $data["roles"] = Role::all();
   return view('systemsettings.role.index', $data);
 }

	// Insert record
 public function store(Request $request) 
 {
   $request->validate([
    'name' => 'required',
    'description' => 'required'
  ]);

   Role::create($request->all());
   return redirect()->route('role.index')
      ->with('success', 'New Role Successfully Created!');
 }

 public function create() {
   return view('systemsettings.role.create');
 }

	// Update record
 public function update(Request $request){
  $role = Role::find($request->id);
  if($role->update(array_filter($request->except('_token')))){
    return "User Record Updated successfully";
  }
  return "Can't update user.";
}
}

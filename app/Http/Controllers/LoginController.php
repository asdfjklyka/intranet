<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

	public function login(){
		return view("admin.login");
	}

	public function authenticate(Request $request){
		
		$validate = $request->validate([
			'email' => 'required|email|confirmed|unique:users|max:50',
			'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
			'role' => 'required',
		]);

		$data = $request->all();

		if($validate -> fails()){
			return view("admin.login");
		}

	}


}

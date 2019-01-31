<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class ManageController extends Controller
{
    public function archive(){
    	$data['users'] = User::with('roles')->get();
    	return view("manage.userarchive");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function index(){
    	return view("employee.personalinfo");
    }
}

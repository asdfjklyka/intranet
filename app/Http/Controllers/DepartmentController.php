<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    //show data
	public function index(){
		$data["departments"] = Department::all();
		return view('systemsettings.department.index', $data);
	}

  	// Insert record
	public function store(Request $request) {
		$data = $request->all();

		Department::create($request->all());
		return redirect()->route('department.index')
		->with('success', 'New Department Successfully Created!');
	}

	public function create() { 		
		return view('systemsettings.department.create');
	}

}

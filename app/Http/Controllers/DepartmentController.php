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

		$validate = $request->validate([
            'name' => 'required|string|max:50|unique:departments'
        ]);

		$data = $request->all();

		Department::create($request->all());
		return redirect()->route('department.index')
		->with('success', 'New Department Successfully Created!');
	}

	public function create() { 		
		return view('systemsettings.department.create');
	}

	public function update(Request $request){

		return view('systemsettings.department.update');

		$request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

		$department = Department::find($request->id);

		if($department->update(array_filter($request->except('_token')))){
			return redirect()->route('department.index')
			->with('success', 'Department Successfully Updated!');
		}
		return "Can't update user.";
	}

}

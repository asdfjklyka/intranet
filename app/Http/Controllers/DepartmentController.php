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

		Department::create($data);

		return redirect()->route('department.index')
		->with('success', 'New Department Successfully Created!');
	}

	public function create() { 		
		return view('systemsettings.department.create');
	}

	public function update(Request $request, $id){
/*
    $validate = $request->validate([
      'name' => 'string|max:50|min:6',
    ]);*/

    $department = Department::find($id);

    if( $department->update( array_filter($request->all()) ) ) {

      return redirect()->route('department.index')
        ->with('success', 'Department Successfully Updated!');
    }
    
    return "Can't update department.";

  }
  
  public function edit(Request $request, $departmentId)
  {
    $data["departments"] = Department::find($departmentId);
    /*$data["roles"] = Role::all();*/
    return view('systemsettings.department.edit', $data);
  }


}

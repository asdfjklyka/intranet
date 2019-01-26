<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', function () {
    return view('admin.home');
});

Route::get('home/dashboard', 'HomeController@dashboard');


//UserController
Route::resource('systemsettings/user', 'UserController');
Route::post('/addUser', 'UserController@store');


//DepartmentController
Route::resource('systemsettings/department', 'DepartmentController');
Route::post('/addDepartment', 'DepartmentController@store');


//RoleController
Route::resource('systemsettings/role', 'RoleController');
Route::post('/addRole', 'RoleController@store');

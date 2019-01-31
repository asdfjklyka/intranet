<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


    public function login(){
        return view("admin.login");
    }


   /* public function redirectTo(){
       // User role
    $role = Auth::user()->role->name; 
    
    // Check user role
    switch ($role) {
        case 'Admin':
                return '/home';
            break;
        case 'Human Resource':
                return '/hr';
            break; 
        case 'Employee':
            return '/employee';
            break; 
        default:
                return '/login'; 
            break;
        }
    }
*/
 /*   protected function guard()
{
    return Auth::guard('guard-name');
}*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


}

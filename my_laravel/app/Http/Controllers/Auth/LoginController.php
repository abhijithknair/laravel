<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\UserModel;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
￼
•••••

     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function signInChecking(Request $request){
        $toCheck = [];
        $toCheck['email']=$request['email'];
        $toCheck['password']=$request['password'];
        if($toCheck) {
            $checkObj= new UserModel();
            $response = $checkObj->authenticatingUser($toCheck);
            if($response == "Sucess"){
                return view('dashboard');
            }else{
                print_r('Not A Member!!!');
            }


        }


    }



}

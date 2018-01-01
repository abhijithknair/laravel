<?php

namespace App\Http\Controllers;

use App\Model\UserModel;
use Illuminate\Http\Request;
use Illuminate\Session;

class RegisterController extends Controller
{

    public function register(Request $request){

        $userData = [];

        $this->validate($request,array(
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|unique',
            'phnumber' => 'required',
            'dob' => 'required',
            'password' => 'required',
        ));

        $userData['fname'] = $request['firstname'];
        $userData['lname'] = $request['lastname'];
        $userData['email'] = $request['email'];
        $userData['phnumber'] = $request['phnumber'];
        $userData['dob'] = $request['dob'];
        $userData['password'] = $request['password'];

        if($userData){
            $userObj = new UserModel();
            $response = $userObj->saveUserDetails($userData);
            if($response == "Sucess"){
                Session::flash('success','Successfully registered.');
                return view('login');
            }else{
                return view('register');
            }

        }

    }
}


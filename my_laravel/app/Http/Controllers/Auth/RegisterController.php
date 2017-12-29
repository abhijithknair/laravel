<?php

namespace App\Http\Controllers;

use App\Model\UserModel;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function register( Request $request){

        $userData = [];
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
                return view('login-new');
            }else{
                return view('register');
            }

        }

    }
}


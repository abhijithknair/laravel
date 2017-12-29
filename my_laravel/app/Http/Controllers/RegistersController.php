<?php

namespace App\Http\Controllers;


use App\Model\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;


class RegistersController extends Controller
{


    public function register( Request $request){

        $userData = [];
        $userData['fname'] = $request['firstname'];
        $userData['lname'] = $request['lastname'];
        $userData['email'] = $request['email'];
        $userData['phnumber'] = $request['phnumber'];
        $userData['role'] = "user";
        $userData['dob'] = $request['dob'];
        $userData['password'] = $request['password'];


        $password = Input::get('password'); // password is form field
        $hashed = Hash::make($password);
        $userData['password'] = $hashed;

        if($userData){
            $userObj = new UserModel();
            $response = $userObj->saveUserDetails($userData);
            if($response == "Sucess"){
                return view('/login');
            }else{
                return view('register-new');
            }

        }

    }

}


<?php

namespace App\Model;
use App\Model\AuthModel;
use App\Basemodel\BaseUserModels;

class UserModel extends BaseUserModels
{
    public function saveUserDetails($user)
    {
        $returnData = '';

        if ($user) {

            $this->fname = $user['fname'];
            $this->lname = $user['lname'];
            $this->email = $user['email'];
            $this->phnumber = $user['phnumber'];
            $this->role = $user['role'];
            $this->dob = $user['dob'];
            $this->password = $user['password'];





            if ($this->save()) {
                $returnData = "Success";
            } else {
                $returnData = "Error";
            }

            return $returnData;
        }
    }

    public function authenticatingUser($user)
    {
//        print_r($user); die;
        $isUserAlreadyExist = null;
        $returnControl = '';
        $isUserAlreadyExist = BaseUserModels::where('email', $user['email'])->first();
        if (!empty($isUserAlreadyExist)) {
            if (password_verify($user['password'],$isUserAlreadyExist->password)) {


//                print_r("<pre>".$isUserAlreadyExist->id); die;

                $var1 = bcrypt($user['email'].$user['password']);
                $obj = new AuthModel();
                $obj->saveAuthToken($isUserAlreadyExist['id'],$var1);
//                print_r("<pre>".$isUserAlreadyExist);die;



                if($isUserAlreadyExist->role == "admin")
                {
                    $returnControl = "Super success";
                }
                else{
                    $returnControl = "Success";
                }
            }
            else {
                $returnControl = "Error";
            }
        }
        else{
                $returnControl = "Error";
            }

        return $returnControl;
    }




    public function showAdminDboard(){

        $returnControl = "Super success";
        return $returnControl;

    }



    public function showUserDboard(){

        $returnControl = "Success";
        return $returnControl;

    }



    public function fetchUser(){
        $result=BaseUserModels::All();
        return $result;


    }
    public function fetchMyIssue($user){
        $email = BaseUserModels::where('email', $user['email'])->first();
        return $email;
    }

    public function updateUserDetails($userDetails){
        $returnData = [];
//        print_r('jkjjjj');die;
        if($userDetails){
            $result = UserModel::where('id',$userDetails['id'])->first();
            if($result->save()){
                $returnData = "Success";
                } else {
                    $returnData = "Error";
                }
            }
            return $returnData;

    }

    public function showUserUpdate(){
        $result=BaseUserModels::All();
        return $result;
    }

}
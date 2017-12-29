<?php

namespace App\Http\Controllers;

use App\Model\AuthModel;
use App\Model\UserModel;
use App\Model\IssueModel;
use App\Basemodel\BaseUserModels;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function dash()
{

    return view('admindashboard')->with('pending',$result);
}
public function userDeetailsUpdate(Request $request){

    print_r("<pre>".$request);die;
    $user = UserModel::findOrFail($id);
    $user->fname = $request->get('fname');
    $user->lname = $request->get('lname');
    //$user->email = $request->get('email');
    $user->phnumber = $request->get('phnumber');
    $user->password = $request->get('dob');
    $user->password = $request->get('password');
    if($user->save()){
        print_r('User data has been updated');
    }else{
        print_r('Could not update');
    }
    //return \Redirect::route('', [$user->id])->with('message', 'User has been updated!');
    //return view('userupdate');
}

public function show(){

        $checkObj = new UserModel();
        $result1 = $checkObj->showUserUpdate();

//    echo "<pre>";
//    print_r("<pre>".$result);die;

    $result=[
        'user'=>$result1
    ];
//    print_r($result);die;
    if($result){
        return view('userupdate')->with('users',$result);
    }

}

public function userDetailsUpdate(Request $request){
    $toCheck = [];
    $toCheck['fname'] = $request['fname'];
    $toCheck['lname'] = $request['lname'];
    $toCheck['phnumber'] = $request['phnumber'];
    $toCheck['dob'] = $request['dob'];
    $toCheck['password'] = $request['password'];

//    print_r($toCheck);die;
    if($toCheck){
        $checkObj = new UserModel();
        $result = $checkObj->updateUserDetails($toCheck);
    }
    if($result == 'Success'){
        print_r('Details updated');
    }else{
        print_r('Could not update');
    }

}

public function pending(){
    $checkObj = new IssueModel();
    $checkObj2=new UserModel();
    $result1 =$checkObj->fetchPending();
    $result2=$checkObj2->fetchUser();
    $result=[
        'pendings'=>$result1,
        'users' =>$result2
    ];
    return view('pending')->with('pending',$result);
}


    public function userPending(){
        $checkObj = new IssueModel();
        $checkObj2=new UserModel();
        $result1 =$checkObj->fetchPending();
        $result2=$checkObj2->fetchUser();
        $result=[
            'pendings'=>$result1,
            'users' =>$result2
        ];
        return view('user_pending')->with('pending',$result);
    }


public function resolved(){
    $checkObj = new IssueModel();
    $result =$checkObj->fetchResolved();
    return view('resolved')->with('resolved',$result);

}


    public function userResolved(){
        $checkObj = new IssueModel();
        $result =$checkObj->fetchResolved();
        return view('user_resolved')->with('resolved',$result);

    }


//    public function dash(Request $request){
//
//        $isUserAlreadyExist= null;
//        $isUserAlreadyExist = BaseUserModels::where('email', $user['email'])->first();
//        return $isUserAlreadyExist;
//    }



    public function login(Request $request)
    {
        $email = $request->input( 'email');
        $password = $request->input( 'password');
        if($email=="tudip@gmail.com" && $password=="123")
        {return view('login');}
    }
    public function signInChecking(Request $request)
    {
        $toCheck = [];
//        print_r("<pre>".$request);die;
        $toCheck['email'] = $request['email'];
        $toCheck['password'] = $request['password'];
//        print_r($toCheck);die;
        if ($toCheck) {
            $checkObj = new UserModel();
            $response = $checkObj->authenticatingUser($toCheck);
//            print_r($toCheck);die;
            $data = BaseUserModels::where('email', $request['email'])->first();
//            print_r("<pre>".$data['id']);die;
            $checkObj = new IssueModel();
            $result1 =$checkObj->fetchPending();
            $result=[
                'pendings'=>$result1
            ];


            $checkObj = new IssueModel();
            $result2 =$checkObj->fetchResolved();
            if ($response == "Success") {

                return view('dashboard');
            }
            if($response == "Super success")
            {
                return view('admindashboard')->with('pending',$result);
//                return view('admindashboard')->with('resolved',$result2);

            }
            else {
                print_r('Not A Member!!!');
            }

        }

    }

    public function showAdminDashboard(){


            $checkObj = new UserModel();
            $response = $checkObj->showAdminDboard();
            $checkObj = new IssueModel();
            $result1 =$checkObj->fetchP();
            $result=[
                'pendings'=>$result1
            ];


//            $checkObj = new IssueModel();
//            $result2 =$checkObj->fetchR();

            if($response == "Super success")
            {
                return view('admindashboard')->with('pending',$result);
//                return view('admindashboard')->with('resolved',$result2);

            }

    }




    public function showUserDashboard(){


        $checkObj = new UserModel();
        $response = $checkObj->showUserDboard();
        $checkObj = new IssueModel();
        $result1 =$checkObj->fetchUserP();
        $result=[
            'pendings'=>$result1
        ];


//        $checkObj = new IssueModel();
//        $result2 =$checkObj->fetchR();

        if($response == "Success")
        {
            return view('dashboard')->with('pending',$result);
//                return view('admindashboard')->with('resolved',$result2);

        }

    }





//    public function ajax(Request $request){
//
//        $toCheck = [];
//        $toCheck['email'] = $request->email;
//        $toCheck['password'] = $request->password;
//        if ($toCheck) {
//            $checkObj = new UserModel();
//            $response = $checkObj->authenticatingUser($toCheck);
//            $checkObj = new IssueModel();
//            $result1 =$checkObj->fetchPending();
//            $result=[
//                'pendings'=>$result1
//            ];
//
//
//            $checkObj = new IssueModel();
//            $result2 =$checkObj->fetchResolved();
//            if ($response == "Success") {
//                return view('dashboard');
//            }
//            if($response == "Super success")
//            {
//                return view('admindashboard')->with('pending',$result);
////                return view('admindashboard')->with('resolved',$result2);
//
//            }
//            else {
//                print_r('Not A Member!!!');
////                return 'Not A Member!!!';
//            }
//
//        }
//
//    }



}

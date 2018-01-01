<?php

namespace App\Http\Controllers;

use App\Model\IssueModel;
use Illuminate\Http\Request;

class AdminIssueController extends Controller
{
    public function resolved()
    {
        $checkObj = new IssueModel();
        $result = $checkObj->fetchResolved();
        return view('resolved')->with('issue', $result);

    }

    public function adminupdate(Request $request)
    {
        $toCheck = [];
//        $toCheck['filepath'] = $request['filepath'];
//        $authToken = $request['_token'];
        $toCheck['status'] = $request['status'];
        $toCheck['id'] = $request['id'];

//        print_r("<pre>".$request);die;

//        $obj = new IssueModel();
//        $authUser = $obj->getUserByAuthToken($authToken);

        if ($toCheck) {
            $checkObj = new IssueModel();
            $response = $checkObj->adminUpdate($toCheck);
            if ($response == "Success") {
                print_r('Details updated');
            } else {
                print_r('Details not updated');
//                return view('admindashboard');
            }


        }
    }


    public function userIssueUpdate(Request $request)
    {
        $toCheck = [];
        $toCheck['desc'] = $request['desc'];
        $toCheck['id'] = $request['id'];

//        print_r("<pre>".$request);die;

//        $obj = new IssueModel();
//        $authUser = $obj->getUserByAuthToken($authToken);

        if ($toCheck) {
            $checkObj = new IssueModel();
            $response = $checkObj->userPendingUpdate($toCheck);
            if ($response == "Success") {
                print_r('Details updated');
            } else {
                print_r('Details not updated');
//                return view('admindashboard');
            }


        }
    }



    public function userPendingUpdate(Request $request)
    {
        $toCheck = [];
        $toCheck['id'] = $request['id'];
        $toCheck['desc'] = $request['desc'];

        if ($toCheck) {
            $checkObj = new IssueModel();
            $response = $checkObj->userPendingUpdate($toCheck);
            if ($response == "Success") {
                print_r('Details updated');
            } else {
                print_r('Details not updated');
//                return view('admindashboard');
            }


        }
    }





    public function adminn(){
        $checkObj = new IssueModel();
        $result = $checkObj->fetchResolved();
        return view('adminissues')->with('issue', $result);
    }

}
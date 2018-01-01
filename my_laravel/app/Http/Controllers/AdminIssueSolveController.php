<?php

namespace App\Http\Controllers;

use App\Model\UserModel;
use App\Model\IssueModel;

use Illuminate\Http\Request;

class AdminIssueSolveController extends Controller
{
//    public function viewissue($id){
//        $result = UserModel::find($id);
//        return view('adminissues', compact(result));
//    }

    public function viewissue(Request $request){

//        print_r("<pre>".$request);die;

        $id = $request->input('id');
//        print_r("<pre>".$id);die;
        $checkObj = new IssueModel();
        $result =$checkObj->fetchIssue($id);
//        print_r("<pre>".$result);die;
        $resultData = [
          'data' => $result
        ];
//        print_r($resultData['data']);die;
        return $this->viewNoCache('adminissues', $resultData);
    }


    public function userviewissue1(Request $request){

//        print_r("<pre>".$request);die;

        $id = $request->input('id');
//        print_r("<pre>".$id);die;
        $checkObj = new IssueModel();
        $result =$checkObj->fetchIssue($id);
//        print_r("<pre>".$result);die;
        $resultData = [
            'data' => $result
        ];
//        print_r($resultData['data']);die;
        return $this->viewNoCache('userissueview', $resultData);
    }


    public function userviewissue2(Request $request){

//        print_r("<pre>".$request);die;

        $id = $request->input('id');
//        print_r("<pre>".$id);die;
        $checkObj = new IssueModel();
        $result =$checkObj->fetchIssue($id);
//        print_r("<pre>".$result);die;
        $resultData = [
            'data' => $result
        ];
//        print_r($resultData['data']);die;
        return $this->viewNoCache('userissueedit2', $resultData);
    }

}

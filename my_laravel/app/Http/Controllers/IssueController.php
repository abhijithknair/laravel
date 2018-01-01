<?php

namespace App\Http\Controllers;

use App\Basemodel\BaseIssueModel;
use App\Model\UserModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Model\IssueModel;
use App\Model\AuthModel;
//use Illuminate\Support\Facades\Storage;
use Session;

class IssueController extends Controller
{

    public function upload(Request $request){

            $toCheck=[];
//            $id = UserModel::find($id);
//            print_r("<pre>".$id);die;
            if (Input::hasFile('file')) {

                $file = $request->file('file');
                $fileName = rand(1, 9999) . date("Y") . date("m") . $file->getClientOriginalName();
                $filePath = "/uploads/".$fileName;
                $file->storeAs('/uploads', $fileName);
                $file->move('uploads', $filePath);


                $toCheck['desc'] = $request['desc'];
                $toCheck['status'] = "Pending";
                $toCheck['fname'] = $request['fname'];
                $toCheck['email'] = $request['email'];




//                print_r("<pre>".$request);die;
//                $obj = new IssueModel();
//                $authToken = $request['_token'];
//                $authUser = $obj->getUserByAuthToken($authToken);
//                $au = BaseIssueModel::with('id')->get();
//                print_r($au);die;


                $toCheck['user_id']="1";
                $toCheck['filepath'] = $filePath;

                $issue = new IssueModel();
                $response = $issue->renameImage($toCheck);
                $res = IssueModel::orderBy('id', 'desc')->paginate(10);

                if ($response == "Success") {
                    Session::flash('success','The issue was successfully posted.');
                    return view('/userhomepage')->with('issues', $res);
//                    print_r("Issue posted.");
                } else {
                    Session::flash('success','The issue was successfully posted.');
                    return view('/userhomepage')->with('issues', $res);
//                    print_r("Issue not posted.");
                }
            }

        }

}




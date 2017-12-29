<?php

namespace App\Http\Controllers;

use App\Basemodel\BaseIssueModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Model\IssueModel;
use App\Model\AuthModel;
//use Illuminate\Support\Facades\Storage;

class IssueController extends Controller
{

    public function upload(Request $request){

            $toCheck=[];

//            print_r("<pre>".$request);die;
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
                if ($response == "Success") {
                    print_r("Issue posted.");
                } else {
                    print_r("Issue not posted.");
                }
            }

        }

}




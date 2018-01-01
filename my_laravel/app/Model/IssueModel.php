<?php

namespace App\Model;
use App\Basemodel\BaseAuthModel;
use App\Basemodel\BaseIssueModel;
use Illuminate\Http\Request;

class IssueModel extends BaseIssueModel
{

    public function renameImage($issues)
    {

        if ($issues) {
//            print_r($issues);die;

            $this->desc = $issues['desc'];
            $this->status = $issues['status'];
            $this->filepath = $issues['filepath'];
            $this->user_id = $issues['user_id'];
//            $this->fname = $issues['fname'];
//            $this->email = $issues['email'];
        }


            if ($this->save()) {
                $returnData = "Success";
            }
            else {
                $returnData = "Error";
            }

            return $returnData;
    }
    public function fetchPending(){
       $result=BaseIssueModel::All();
        return $result;
    }



    public function fetchResolved(){
        $result=BaseIssueModel::All();
        return $result;
    }


    public function fetchP(){
        $result=BaseIssueModel::All();
        return $result;
    }


    public function fetchUserP(){
        $result=BaseIssueModel::All();
        return $result;
    }


    public function fetchR(){
        $result=BaseIssueModel::All();
        return $result;
    }


    public function fetchIssue($id){
        $result=BaseIssueModel::where('id', '=', $id)->first();
        return $result;
    }


    public function adminUpdate($issues){
        $returnData = [];
        if ($issues) {
//            $issues['status']="Resolved";


//            $this->user_id = "1";
//            $this->filepath = $issues['filepath'];


//            $this->status = $issues['status'];


//            $result = BaseIssueModel::update(array('status' => 'Resolved'));
//            return $result;


//            print_r($issues);die;
            $result = BaseIssueModel::where('id',$issues['id'])->first();

//            print_r("<pre>".$result);die;

            if($result){
                $result->status = 'Resolved';
                if ($result->save()) {
                    $returnData = "Success";
                } else {
                    $returnData = "Error";
                }
            }

        }
        return $returnData;
    }


    public function userPendingUpdate($issues){
        $returnData = [];
        if ($issues) {


//            print_r($issues);die;
            $result = BaseIssueModel::where('id',$issues['id'])->first();

//            print_r("<pre>".$result);die;

            if($result){
                $result->desc = $issues['desc'];
                if ($result->save()) {
                    $returnData = "Success";
                } else {
                    $returnData = "Error";
                }
            }

        }
        return $returnData;
    }


    public function getUserByAuthToken($authtoken){

            $returnData = [];
        if($authtoken){
            $authUser = BaseAuthModel::where('auth_token', $authtoken);
            if($authtoken){
                $returnData = $authUser;
            }else{
              $returnData = "Not Valid User";
            }

            return $returnData;
        }
    }


    public function viewIssue(){

    }


}

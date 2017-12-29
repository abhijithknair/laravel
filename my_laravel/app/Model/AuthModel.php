<?php

namespace App\Model;

use App\Basemodel\BaseAuthModel;
use Illuminate\Database\Eloquent\Model;

class AuthModel extends BaseAuthModel
{
    public function saveAuthToken($userid,$authtoken)
    {

            $this->user_id = $userid;
            $this->auth_token = $authtoken;

            $this->save();


    }


}

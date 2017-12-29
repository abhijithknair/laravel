<?php

namespace App\Model;
use App\Basemodel\BaseUserModels;

class PostModel extends BasePostModel
{
    public function saveUserDetails($issues)
    {

        if ($issues) {

            //$this->fileToUpdate = $issues['fileToUpload'];
            $this->desc = $issues['desc'];
            if ($this->save()) {
                $returnData = "Success";
            } else {
                $returnData = "Error";
            }

            return $returnData;
        }
    }

}
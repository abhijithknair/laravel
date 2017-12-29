<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\Storage;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected function viewNoCache($view, $array = [])
    {
        return response()
            ->view($view, $array)
            ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', '0');
    }

    protected function jsonNoCache($response, $code = 200)
    {
            return response()
            ->json($response, $code)
            ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', '0');
    }

//return $this->viewNoCache('group', [
//'menu' => $menu,
//'user' => $user,
//'broker' => $broker,
//'group' => $group,
//'groups' => $groups,
//'rfp' => $rfp
//]);
//
//.
//$response = [
//'status' => 'success',
//'data' => []
//];
//
//return $this->jsonNoCache($response);

}

<?php

namespace App\Http\Controllers\rewards_department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class points_controller extends Controller
{
    function  test(){
        return "hi";
    }

    function  post_test(Request $request){
        return $request;
    }
}

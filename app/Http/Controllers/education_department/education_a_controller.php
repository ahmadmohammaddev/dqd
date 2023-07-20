<?php

namespace App\Http\Controllers\education_department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class education_a_controller extends Controller
{
    function  test(){
        return "hi";
    }

    function  post_test(Request $request){
        return $request;
    }

    function  student_info()
    {
        return view('educational.student_info');

    }


}

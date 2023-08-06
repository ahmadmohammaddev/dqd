<?php

namespace App\Http\Controllers\rewards_department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\students;
use App\Models\recitations_evaluations;
use App\Models\surahs;
use App\Models\staffs;
use App\Models\staffs_positions;
use App\Models\groups;
use App\Models\students_groups;
use App\Models\quran_recitations;
use GuzzleHttp\RetryMiddleware;
use App\Services\PayUService\Exception;
use Illuminate\Database\QueryException;
class points_controller extends Controller
{



//shift +alt + a
//ctrl + k+c
//ctrl + u


    function course_points(){
        $students = students::select('*')->get();

        $students_points = [
        ];

        foreach($students as $student){

            $quran_recitations = quran_recitations::select('*')->where('students_id',  $student->id)->get();
            $surahs = surahs::select('*')->get();
            $student_balance = 0;
            $cell_volume = 232;
            foreach($quran_recitations as $student_recitation){
                $surah_id = $student_recitation['surah'];
                $surah_id--;
                $one_page_checker =  $surahs[$surah_id]->end_in_page - $surahs[$surah_id]->start_from_page;
                if($one_page_checker==0){
                    $cell_volume =  $surahs[$surah_id]->surahs_start_proportion_to_entire_page;
                }
                else {
                    if($student_recitation->page  ==  $surahs[$surah_id]->start_from_page){
                        $cell_volume = $surahs[$surah_id]->surahs_start_proportion_to_entire_page;
                    }
                    else if($student_recitation->page  ==  $surahs[$surah_id]->end_in_page ){
                        $cell_volume = $surahs[$surah_id]->surahs_end_proportion_to_entire_page;
                    }
                    else {
                        $cell_volume = 1;
                    }
                }


                if($student_recitation['recitations_evaluations_id']==1)$student_balance+=(5*$cell_volume);
                else if($student_recitation['recitations_evaluations_id']==2)$student_balance+=(3*$cell_volume);
                else $student_balance+=(2*$cell_volume);

                $students_points[$student->id]['name'] = $student->student_fn.$student->student_ln; // Store student's name
                $students_points[$student->id]['points'] = $student_balance; // Store student's points

            }
        }


        return view('rewards.course_points',compact('students_points'));

    }

    function student_points_calaculator(Request $request)
    {
        $student_id =  $request->input('student_id');

        $quran_recitations = quran_recitations::select('*')->where('students_id',  $student_id )->get();
        $surahs = surahs::select('*')->get();
        $student_balance = 0;
        $cell_volume = 232;
        foreach($quran_recitations as $student_recitation){
            $surah_id = $student_recitation['surah'];
            $surah_id--;
            $one_page_checker =  $surahs[$surah_id]->end_in_page - $surahs[$surah_id]->start_from_page;
            if($one_page_checker==0){
                $cell_volume =  $surahs[$surah_id]->surahs_start_proportion_to_entire_page;
            }
            else {
                if($student_recitation->page  ==  $surahs[$surah_id]->start_from_page){
                    $cell_volume = $surahs[$surah_id]->surahs_start_proportion_to_entire_page;
                }
                else if($student_recitation->page  ==  $surahs[$surah_id]->end_in_page ){
                    $cell_volume = $surahs[$surah_id]->surahs_end_proportion_to_entire_page;
                }
                else {
                    $cell_volume = 1;
                }
            }


            if($student_recitation['recitations_evaluations_id']==1)$student_balance+=(5*$cell_volume);
            else if($student_recitation['recitations_evaluations_id']==2)$student_balance+=(3*$cell_volume);
            else $student_balance+=(2*$cell_volume);
        }
        return $student_balance;

        }


    function student_selector()
    {
        $students_names = students::select('id', 'student_fn', 'student_ln')->get();
        $groups_names = groups::select('id', 'group_name')->get();
        $students_groups = students_groups::select('id', 'students_id', 'groups_id')->get();

        return view('rewards.students_selector', compact('students_names', 'groups_names', 'students_groups'));
    }


    function  test(){
        return "hi";
    }

    function  post_test(Request $request){
        return $request;
    }
}

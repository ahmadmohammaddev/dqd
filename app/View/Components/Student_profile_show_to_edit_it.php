<?php

namespace App\View\Components;
use App\Models\students;

use Illuminate\View\Component;

class Student_profile_show_to_edit_it extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $student;

    public function __construct($student)
    {
       $this->student = students::select('student_fn', 'student_ln')
        ->where('id', '=', $student)->first();
    //$this->sss = $studentId;
    }

    public function render()
    {
        //return $this->studentInfo;
       // return view('components.student_profile_show_to_edit_it',compact('student_info'));
      //  ->with('student_info', $this->student_info);
      //['student_info' => $this->student_info]
      //return $this->student_info;
      //return view('components.student_profile_maininfo',compact('student_info'));
    }
}

<?php

namespace App\Http\Controllers\management_department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\courses;

class management_courses_controller extends Controller
{
    function manin_home()
    {

        $courses_info = courses::select('*')->get();

        return view('management.courses', compact('courses_info'));
    }


    public function addCourse(Request $request)
    {
        ///return $request->days;
        // validate input data
        $request->validate([
            'type' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'days' => 'required|array',
            'days.*' => 'required|in:saturday,sunday,monday,tuesday,wednesday,thursday,friday'
        ]);

        // create a new course record with the validated data
        $res = courses::create([
            'type' =>  $request->input('type'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'saturday' => in_array('saturday', $request->input('days')) ? 1 : 0,
            'sunday' => in_array('sunday', $request->input('days')) ? 1 : 0,
            'monday' => in_array('monday', $request->input('days')) ? 1 : 0,
            'tuesday' => in_array('tuesday', $request->input('days')) ? 1 : 0,
            'wednesday' => in_array('wednesday', $request->input('days')) ? 1 : 0,
            'thursday' => in_array('thursday', $request->input('days')) ? 1 : 0,
            'friday' => in_array('friday', $request->input('days')) ? 1 : 0,
        ]);

        // redirect back to the course list page

        if ($res)
            return redirect()->route('management.courses.main')->with('success', 'تم اضافة الخلية بنجاح.');
        else  return redirect()->route('management.courses.main')->with('error', 'مشكلة !');
    }

    public function editCourse(Request $request)
    {


        $res = courses::find($request->input('original_id'))->update(
            [
                'type' =>  $request->input('type'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'start_time' => $request->input('start_time'),
                'end_time' => $request->input('end_time'),
                'saturday' => in_array('saturday', $request->input('days')) ? 1 : 0,
                'sunday' => in_array('sunday', $request->input('days')) ? 1 : 0,
                'monday' => in_array('monday', $request->input('days')) ? 1 : 0,
                'tuesday' => in_array('tuesday', $request->input('days')) ? 1 : 0,
                'wednesday' => in_array('wednesday', $request->input('days')) ? 1 : 0,
                'thursday' => in_array('thursday', $request->input('days')) ? 1 : 0,
                'friday' => in_array('friday', $request->input('days')) ? 1 : 0,

            ]
        );


        // redirect back to the course list page

        if ($res)
            return redirect()->route('management.courses.main')->with('success', 'تم التعديل بنجاح.');
        else  return redirect()->route('management.courses.main')->with('error', 'مشكلة !');
    }
}

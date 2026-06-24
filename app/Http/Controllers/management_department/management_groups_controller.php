<?php

namespace App\Http\Controllers\management_department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\groups;
use App\Models\courses;

class management_groups_controller extends Controller
{
    public function main_home()
    {
        // Join with courses to show course info for each group
        $groups_info = groups::select('groups.*', 'courses.type as course_type', 'courses.start_date as course_start_date')
            ->join('courses', 'courses.id', '=', 'groups.courses_id')
            ->get();
            
        $courses = courses::all();

        return view('management.groups', compact('groups_info', 'courses'));
    }

    public function addGroup(Request $request)
    {
        $request->validate([
            'group_name' => 'required|string|max:255',
            'courses_id' => 'required|exists:courses,id'
        ]);

        $res = groups::create([
            'group_name' => $request->input('group_name'),
            'courses_id' => $request->input('courses_id'),
        ]);

        if ($res) {
            return redirect()->route('management.groups.main')->with('success', 'تم إضافة الحلقة بنجاح.');
        } else {
            return redirect()->route('management.groups.main')->with('error', 'حدث خطأ أثناء إضافة الحلقة!');
        }
    }

    public function editGroup(Request $request)
    {
        $request->validate([
            'original_id' => 'required|exists:groups,id',
            'group_name' => 'required|string|max:255',
            'courses_id' => 'required|exists:courses,id'
        ]);

        $res = groups::find($request->input('original_id'))->update([
            'group_name' => $request->input('group_name'),
            'courses_id' => $request->input('courses_id'),
        ]);

        if ($res) {
            return redirect()->route('management.groups.main')->with('success', 'تم تعديل الحلقة بنجاح.');
        } else {
            return redirect()->route('management.groups.main')->with('error', 'حدث خطأ أثناء تعديل الحلقة!');
        }
    }
}

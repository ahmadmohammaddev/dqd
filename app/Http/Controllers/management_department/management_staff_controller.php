<?php

namespace App\Http\Controllers\management_department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\common_medicines;
use App\Models\chronic_diseases;
use App\Models\neighborhoods;
use App\Models\staffs;
use App\Models\educational_levels;
use App\Models\jobs;
use App\Models\qualifications;
use App\Models\staffs_qualifications;

class management_staff_controller extends Controller
{
    function staff_main_info()
    {
        $staff_info = staffs::select('*')->get();

        return view('management.staff.main', compact('staff_info'));
    }

    function data_to_add_staff()
    {
        $common_medicines = common_medicines::select('*')->get();
        $chronic_diseases = chronic_diseases::select('*')->get();
        $neighborhoods = neighborhoods::select('*')->get();
        $educational_levels = educational_levels::select('*')->get();
        $jobs = jobs::select('*')->get();
        return view('management.staff.register', compact('neighborhoods', 'common_medicines', 'chronic_diseases', 'educational_levels', 'jobs'));
    }

    public function register_staff(Request $request)
    {

        $validatedData = $request->validate([
            'fn' => 'required|string|max:255', //
            'ln' => 'required|string|max:255', //
            'home_number' => 'nullable|string|max:255', //
            'phone_number' => 'string|max:255', //
            'work_phone_number' => 'nullable|string|max:255', //
            'notes' => 'nullable|string', //
            'birth' => 'required|date', //
            'is_mother_alive' => 'required|boolean', //
            'is_father_alive' => 'required|boolean', //
            'marital_status' => 'required|boolean', //
            'chronic_diseases_id' => 'required|integer', //
            'home_address_id' => 'required|integer', //
            'resident_address_id' => 'required|integer', //
            'work_address_id' => 'required|integer',
            'educational_levels_id' => 'required|integer', //
            'work_address_id' => 'required|integer', //
            'job_id' => 'required|integer', //
        ]);
        // Create a new staff instance
        $staff = new staffs([
            'staff_fn' => $validatedData['fn'],
            'staff_ln' => $validatedData['ln'],
            'home_number' => $request->input('home_number'),
            'phone_number' => $request->input('phone_number'),
            'work_phone_number' => $request->input('work_phone_number'),
            'notes' => $validatedData['notes'],
            'birth' => $validatedData['birth'],
            'is_mother_alive' => $validatedData['is_mother_alive'],
            'is_father_alive' => $validatedData['is_father_alive'],
            'marital_status' => $validatedData['marital_status'],
            'chronic_diseases_id' => $validatedData['chronic_diseases_id'],
            'home_address_id' => $validatedData['home_address_id'],
            'resident_address_id' => $validatedData['resident_address_id'],
            'work_address_id' => $validatedData['work_address_id'],
            'educational_levels_id' => $validatedData['educational_levels_id'],
            'work_address_id' => $validatedData['work_address_id'],
            'job_id' => $validatedData['job_id'],
        ]);



        // Save the staff instance to the database
        $staff->save();

        $full_name = $request->fn . ' ' . $request->ln;

        // Redirect the user back to the form with a success message
        return redirect()->route('management.staff.main')->with('success', 'تم تسجيل الاستاذ' . ' ' . $full_name . ' بنجاح')->with('full_name', $full_name);
    }

    function brief_staff_info($id)
    {
        $staff_info = staffs::select('*')->where('id', '=', $id)->first();

        return view('management.staff.brief_info', compact('staff_info'));
    }

    
    function show_staff_main_info_to_edit($id)
    {

        $educational_levels = educational_levels::select('*')->get();
        $neighborhoods = neighborhoods::select('*')->get();
        $chronic_diseases = chronic_diseases::select('*')->get();
        $jobs = jobs::select('*')->get();

        $staff_info = staffs::select(
            'staffs.*',

            'educational_levels.educational_level as educational_level_name',
            'home_address_table.neighborhood_name as home_address',
            'resident_address_table.neighborhood_name as resident_address',
            'work_address_table.neighborhood_name as work_address',
            'chronic_diseases.chronic_disease_name as chronic_disease_name',
            'jobs.job_type as job_type_name'
        )

            ->join('educational_levels', 'educational_levels.id', '=', 'staffs.educational_levels_id')
            ->join('chronic_diseases', 'chronic_diseases.id', '=', 'staffs.chronic_diseases_id')
            ->join('neighborhoods as home_address_table', 'home_address_table.id', '=', 'staffs.home_address_id')
            ->join('neighborhoods as resident_address_table', 'resident_address_table.id', '=', 'staffs.resident_address_id')
            ->join('neighborhoods as work_address_table', 'work_address_table.id', '=', 'staffs.work_address_id')
            ->join('jobs', 'jobs.id', '=', 'staffs.job_id')

            ->where('staffs.id', '=', $id)
            ->get();


        return view('management.staff.edit', compact('staff_info', 'jobs', 'chronic_diseases', 'neighborhoods', 'educational_levels'));

        return $id;
    }

    function edit_staff_main_info(Request $request)
    {

        $validatedData = $request->validate([
            'fn' => 'required|string|max:255', //
            'ln' => 'required|string|max:255', //
            'home_number' => 'nullable|string|max:255', //
            'phone_number' => 'string|max:255', //
            'work_phone_number' => 'nullable|string|max:255', //
            'notes' => 'nullable|string', //
            'birth' => 'required|date', //
            'is_mother_alive' => 'required|boolean', //
            'is_father_alive' => 'required|boolean', //
            'marital_status' => 'required|boolean', //
            'chronic_diseases_id' => 'required|integer', //
            'home_address_id' => 'required|integer', //
            'resident_address_id' => 'required|integer', //
            'work_address_id' => 'required|integer',
            'educational_levels_id' => 'required|integer', //
            'work_address_id' => 'required|integer', //
            'job_id' => 'required|integer', //
        ]);

        $staff = staffs::findOrFail($request->id);

        // Update the staff record with the validated data
        $staff->update([
            'staff_fn' => $validatedData['fn'],
            'staff_ln' => $validatedData['ln'],
            'home_number' => $request->input('home_number'),
            'phone_number' => $request->input('phone_number'),
            'work_phone_number' => $request->input('work_phone_number'),
            'notes' => $validatedData['notes'],
            'birth' => $validatedData['birth'],
            'is_mother_alive' => $validatedData['is_mother_alive'],
            'is_father_alive' => $validatedData['is_father_alive'],
            'marital_status' => $validatedData['marital_status'],
            'chronic_diseases_id' => $validatedData['chronic_diseases_id'],
            'home_address_id' => $validatedData['home_address_id'],
            'resident_address_id' => $validatedData['resident_address_id'],
            'work_address_id' => $validatedData['work_address_id'],
            'educational_levels_id' => $validatedData['educational_levels_id'],
            'job_id' => $validatedData['job_id'],
        ]);
        if ($staff->save()) {
            return redirect()->route('management.staff.main')->with('success', ' تم تعديل بيانات الأستاذ' . ' ' . $request->fn . '  ' . ' بنجاح')->with('full_name', $request->ln);;
        } else {
            // The save operation failed
            return "Failed to save student.";
        }
    }

    function get_qualifications($id)
    {
        $qualifications = qualifications::select('*')->get();

        $staff_info = staffs::select('*')->where('id', $id)->first();

            $staff_qualifications = staffs_qualifications::select(
                'staffs_qualifications.*',

                'staffs.staff_fn','staffs.staff_ln',
                'qualifications.qualification_type',
            )

                ->join('staffs', 'staffs.id', '=', 'staffs_qualifications.staffs_id')
                ->join('qualifications', 'qualifications.id', '=', 'staffs_qualifications.qualifications_id')

                ->where('staffs_qualifications.staffs_id', '=', $id)
                ->get();

        return view('management.staff.qualifications',compact('staff_qualifications','qualifications','staff_info'));
    }
    function test()
    {
        return view('management.staff.main');
    }
}

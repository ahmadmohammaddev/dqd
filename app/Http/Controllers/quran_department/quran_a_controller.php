<?php

namespace App\Http\Controllers\quran_department;

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
use PDF;

class quran_a_controller extends Controller
{
    function get_basic_info_for_cell()
    {
        $students_names = students::select('id', 'student_fn', 'student_ln')->get();
        $groups_names = groups::select('id', 'group_name')->get();
        $recitations_evaluations = recitations_evaluations::select('id', 'reciting_evaluation')->orderby('id')->get();
        $surahs_info = surahs::select('*')->get();
        $students_groups = students_groups::select('id', 'students_id', 'groups_id')->get();

        $staff_reciever = staffs_positions::select('staffs_positions.*', 'staffs.staff_fn as staff_fn', 'staffs.staff_ln as staff_ln')
            ->whereBetween('staffs_positions.positions_id', [1, 3])
            ->join('staffs', 'staffs.id', 'staffs_positions.staffs_id')
            ->get();
        return view('quran.add_cell', compact('students_groups', 'students_names', 'groups_names', 'recitations_evaluations', 'surahs_info', 'staff_reciever'));
    }

    function post_one_cell(Request $request)
    {
        try {
            $res = quran_recitations::create([
                'students_id' => $request->student_name_selector,
                'receiver_id' => $request->reciever_name_selector,
                'surah' => $request->surah_name_selector,
                'page' => $request->page_number_selector,
                'recitations_evaluations_id' => $request->evaluation_selector,
                'recitation_date' => $request->recitting_date,
            ]);

            if ($res) {
                return redirect()->route('quran.add_cell')->with('success', 'تم اضافة الخلية بنجاح.');
            } else {
                return redirect()->route('quran.add_cell')->with('error', 'مشكلة !');
            }
        } catch (QueryException $e) {
            // If a MySQL exception occurred, handle the error

            // Get the error message
            $errorMessage = $e->getMessage();

            // Log the error
            //Log::error('MySQL Error: ' . $errorMessage);

            // Return an error response or redirect to an error page
            return redirect()->route('quran.add_cell')->with('error', "قد تكون هناك مشكلة بتكرار البيانات" . "\n" . $errorMessage);
        }
    }
    function get_basic_info_for_cells()
    {
        $students_names = students::select('id', 'student_fn', 'student_ln')->get();
        $groups_names = groups::select('id', 'group_name')->get();
        $recitations_evaluations = recitations_evaluations::select('id', 'reciting_evaluation')->orderby('id')->get();
        $surahs_info = surahs::select('*')->get();
        $students_groups = students_groups::select('id', 'students_id', 'groups_id')->get();

        $staff_reciever = staffs_positions::select('staffs_positions.*', 'staffs.staff_fn as staff_fn', 'staffs.staff_ln as staff_ln')
            ->whereBetween('staffs_positions.positions_id', [1, 3])
            ->join('staffs', 'staffs.id', 'staffs_positions.staffs_id')
            ->get();
        return view('quran.add_cells', compact('students_groups', 'students_names', 'groups_names', 'recitations_evaluations', 'surahs_info', 'staff_reciever'));
    }









    function post_multi_cell(Request $request)
    {

        try {
            $surahs_info = surahs::select('*')->get();
            $first_surah = $request->surah_name_selector_1;
            $last_surah = $request->surah_name_selector_2;
            $first_page = $request->page_number_selector_1;
            $last_page = $request->page_number_selector_2;

            $temp_page = $first_page;
            $temp_surah = $first_surah;

            if ($temp_surah == $last_surah) {
                while ($temp_page <  $last_page + 1) {
                    quran_recitations::create([
                        'students_id' => $request->student_name_selector,
                        'receiver_id' => $request->reciever_name_selector,
                        'surah' =>  $temp_surah,
                        'page' => $temp_page,
                        'recitations_evaluations_id' => $request->evaluation_selector,
                        //'in_our_mosque ' => $req->recitting_date, //it has a default value
                        //'is_new ' => $req->recitting_date,        //it has a default value
                        'recitation_date' => $request->recitting_date,
                    ]);
                    $temp_page++;
                }
            } else {
                while ($temp_surah < $last_surah + 1) {
                    if ($temp_surah == $last_surah) {
                        $last_page = $request->page_number_selector_2;
                    } else  $last_page = $surahs_info[$temp_surah - 1]->end_in_page;

                    if ($temp_surah != $request->surah_name_selector_1) $temp_page  = $surahs_info[$temp_surah - 1]->start_from_page;

                    while ($temp_page <  $last_page + 1) {
                        quran_recitations::create([
                            'students_id' => $request->student_name_selector,
                            'receiver_id' => $request->reciever_name_selector,
                            'surah' =>  $temp_surah,
                            'page' => $temp_page,
                            'recitations_evaluations_id' => $request->evaluation_selector,
                            //'in_our_mosque ' => $req->recitting_date, //it has a default value
                            //'is_new ' => $req->recitting_date,        //it has a default value
                            'recitation_date' => $request->recitting_date,
                        ]);
                        $temp_page++;
                    }
                    $temp_surah++;
                }
            }



            return redirect()->route('quran.add_cells')->with('success', 'تم اضافة الخلايا بنجاح بفضل الله.');
        } catch (QueryException $e) {
            // If a MySQL exception occurred, handle the error

            // Get the error message
            $errorMessage = $e->getMessage();

            // Log the error
            //Log::error('MySQL Error: ' . $errorMessage);

            // Return an error response or redirect to an error page
            return redirect()->route('quran.add_cells')->with('error', "قد تكون هناك مشكلة بتكرار البيانات" . "\n" . $errorMessage);
        }
    }



    function get_basic_info_for_surahs()
    {
        $students_names = students::select('id', 'student_fn', 'student_ln')->get();
        $groups_names = groups::select('id', 'group_name')->get();
        $recitations_evaluations = recitations_evaluations::select('id', 'reciting_evaluation')->orderby('id')->get();
        $surahs_info = surahs::select('*')->get();
        $students_groups = students_groups::select('id', 'students_id', 'groups_id')->get();

        $staff_reciever = staffs_positions::select('staffs_positions.*', 'staffs.staff_fn as staff_fn', 'staffs.staff_ln as staff_ln')
            ->whereBetween('staffs_positions.positions_id', [1, 3])
            ->join('staffs', 'staffs.id', 'staffs_positions.staffs_id')
            ->get();
        return view('quran.add_surahs', compact('students_groups', 'students_names', 'groups_names', 'recitations_evaluations', 'surahs_info', 'staff_reciever'));
    }

    function post_surahs(Request $request)
    {
        try {
            $surahs_info = surahs::select('*')->get();
            $selected_surahs = $request->input('surah_name_selector');

            foreach ($selected_surahs as $selected_surah) {
                $temp_page = $surahs_info[$selected_surah - 1]->start_from_page;
                $last_page = $surahs_info[$selected_surah - 1]->end_in_page;

                while ($temp_page <  $last_page + 1) {
                    quran_recitations::create([
                        'students_id' => $request->student_name_selector,
                        'receiver_id' => $request->reciever_name_selector,
                        'surah' =>  $selected_surah,
                        'page' => $temp_page,
                        'recitations_evaluations_id' => $request->evaluation_selector,
                        'recitation_date' => $request->recitting_date,
                    ]);
                    $temp_page++;
                }
            }

            return redirect()->route('quran.add_surahs')->with('success', 'تمت الإضافة بنجاح.');
        } catch (QueryException $e) {
            // If a MySQL exception occurred, handle the error

            // Get the error message
            $errorMessage = $e->getMessage();

            // Log the error
            //Log::error('MySQL Error: ' . $errorMessage);

            // Return an error response or redirect to an error page
            return redirect()->route('quran.add_surahs')->with('error', "قد تكون هناك مشكلة بتكرار البيانات" . "\n" . $errorMessage);
        }
    }



    //test commit git lab


    function get_courses_names($id)
    {
        $res = staffs_positions::select('courses_id', 'courses.start_time')->where('staffs_id', '=', $id)
            ->join('courses', 'courses.id', 'staffs_positions.courses_id')
            ->get();
        return $res;
    }
    //TOdo::

    function get_groups_names($id)
    {
        $res = groups::select('id', 'group_name')->where('courses_id', '=', $id)->get();
        return $res;
    }

    function get_students_names($id)
    {
        $res = students_groups::select('students_id', 'students.student_fn', 'students.student_ln')->where('groups_id', '=', $id)
            ->join('students', 'students.id', 'students_groups.students_id')
            ->get();
        return $res;
    }

    function get_recitation_info()
    {
        $students_names = students::select('id', 'student_fn', 'student_ln')->get();
        $groups_names = groups::select('id', 'group_name')->get();
        $recitations_evaluations = recitations_evaluations::select('id', 'reciting_evaluation')->orderby('id')->get();
        $surahs_info = surahs::select('*')->get();
        $students_groups = students_groups::select('id', 'students_id', 'groups_id')->get();
        return compact('students_groups', 'students_names', 'groups_names', 'recitations_evaluations', 'surahs_info');
    }


    function student_selector()
    {
        $students_names = students::select('id', 'student_fn', 'student_ln')->get();
        $groups_names = groups::select('id', 'group_name')->get();
        $students_groups = students_groups::select('id', 'students_id', 'groups_id')->get();

        return view('quran.show.student_selector', compact('students_names', 'groups_names', 'students_groups'));
    }

    function get_students_info(Request $request)
    {
        $recitations = quran_recitations::select('*','surahs.surah_name','staffs.staff_fn','staffs.staff_fn','recitations_evaluations.reciting_evaluation')
        ->join('surahs','surahs.id','=','quran_recitations.surah')
        ->join('staffs','staffs.id','=','quran_recitations.receiver_id')
        ->join('recitations_evaluations','recitations_evaluations.id','=','quran_recitations.recitations_evaluations_id')

        ->where('quran_recitations.students_id','=',$request->student_name_selector)
        ->orderBy('quran_recitations.page','ASC')
        ->get();
        return  view('quran.show.student_info',compact('recitations'));


    }

    function get_students_info_details()
    {
        return view('quran.show.further_quran_details');
    }








    function  test()
    {
        $students_names = students::select('id', 'student_fn', 'student_ln')->get();
        $groups_names = groups::select('id', 'group_name')->get();
        $recitations_evaluations = recitations_evaluations::select('id', 'reciting_evaluation')->orderby('id')->get();
        $surahs_info = surahs::select('*')->get();
        $students_groups = students_groups::select('id', 'students_id', 'groups_id')->get();

        $staff_reciever = staffs_positions::select('staffs_positions.*', 'staffs.staff_fn as staff_fn', 'staffs.staff_ln as staff_ln')
            ->whereBetween('staffs_positions.positions_id', [1, 3])
            ->join('staffs', 'staffs.id', 'staffs_positions.staffs_id')
            ->get();
        return view('TESTS.test', compact('students_groups', 'students_names', 'groups_names', 'recitations_evaluations', 'surahs_info', 'staff_reciever'));
    }
    function  post_test(Request $request)
    {
        return $request;
    }

    function sss(Request $request)
    {
        return "pjo";
    }

    public function export(Request $ajax_request)
    {
        return "ji";
        // Retrieve the table data from the AJAX request
        $tableData = $ajax_request->input('tableData');

        // Your code to process the table data goes here
        // You can modify and format the data as needed before generating the PDF

        $pdf = PDF::loadView('TESTS.pdfex', compact('tableData'));

        return $pdf->download('table.pdf');
    }

}

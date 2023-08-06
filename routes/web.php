<?php

use App\Http\Controllers\auth_controller;
use App\Http\Controllers\management_department\management_staff_controller;
use App\Http\Controllers\management_department\management_courses_controller;
use App\Http\Controllers\management_department\management_students_controller;
use App\Http\Controllers\management_department\rewa;

use App\Http\Controllers\education_department\education_a_controller;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\quran_department\quran_a_controller;
use App\Http\Controllers\rewards_department\points_controller;




/*


|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('general.index');
    return view('general.index');
});
Route::post('/export-pdf', [QuranAController::class, 'export'])->name('export.pdf');
Route::get('test', [quran_a_controller::class, 'test'])->name('test');
Route::post('sss', [quran_a_controller::class, 'sss'])->name('sss');

Route::get('accounts/registeration', [auth_controller::class, 'registeration'])->name('account.registeration');

Route::prefix('quran')->group(function () {

    Route::get('/home', function () {
        return view('quran.home');
    })->name('quran.home');

    Route::get('add/cells', [quran_a_controller::class, 'get_basic_info_for_cells'])->name('quran.add_cells');
    Route::post('post/cell/multi', [quran_a_controller::class, 'post_multi_cell'])->name('quran.post_multi_cells');


    Route::get('add/cell', [quran_a_controller::class, 'get_basic_info_for_cell'])->name('quran.add_cell');
    Route::post('post/cell/one', [quran_a_controller::class, 'post_one_cell'])->name('quran.post_one_cell');


    Route::get('add/surahs', [quran_a_controller::class, 'get_basic_info_for_surahs'])->name('quran.add_surahs');
    Route::post('post/surahs', [quran_a_controller::class, 'post_surahs'])->name('quran.post_surahs');

    Route::view('show/home', 'quran.show.home')->name('quran.show_home');
    Route::get('show/student/selector', [quran_a_controller::class, 'student_selector'])->name('quran.show.student_selector');
    Route::get('show/student/info', [quran_a_controller::class, 'get_students_info'])->name('quran.show.student_info');

    //sorting by date or surah name or evaluation
});


Route::prefix('management')->group(function () {
    Route::get('courses/home', [management_courses_controller::class, 'manin_home'])->name('management.courses.main');
    Route::post('/courses/add', [management_courses_controller::class, 'addCourse'])->name('management.courses.add');
    Route::put('/courses/edit', [management_courses_controller::class, 'editCourse'])->name('management.courses.edit');

    Route::get('students/profile/main_info', [management_students_controller::class, 'edit_student_main_info'])->name('management.student.profile.editstudent');
    Route::get('students/home', [management_students_controller::class, 'main_home'])->name('management.students.main');

    Route::get('students/profile/brief/{id}', [management_students_controller::class, 'brief_student_info'])->name('management.student.profile.brief');

    Route::get('students/required/data', [management_students_controller::class, 'data_to_add_student'])->name('management.student.required.data');
    Route::get('students/required/data/parent', [management_students_controller::class, 'data_to_add_parent'])->name('management.parent.required.data');

    Route::post('students/register', [management_students_controller::class, 'register_student'])->name('management.student.register');
    Route::post('students/register/parent', [management_students_controller::class, 'register_parent'])->name('management.student.parent.register');

    Route::get('students/profile/relative_info_selector/{id}', [management_students_controller::class, 'student_relative_info_selector'])->name('management.student.profile.parentinfo.selector');
    Route::get('students/profile/relative_info/edit/{relative_id}/{student_id}', [management_students_controller::class, 'show_relative_main_info_to_edit'])->name('management.student.relative.profile.show.to.edit');
    Route::post('students/profile/relative_info/edit/apply', [management_students_controller::class, 'edit_student_relative_info'])->name('management.student.relative.edit');

    Route::get('students/profile/quran_info', [quran_a_controller::class, 'get_students_info'])->name('management.student.profile.quraninfo');
    Route::get('students/profile/quran_info_details', [quran_a_controller::class, 'get_students_info_details'])->name('management.student.profile.quraninfo.details');
    Route::get('students/profile/education', [education_a_controller::class, 'student_info'])->name('management.student.profile.education');
    //////////////////////////////////////////////
    Route::get('students/profile/edit/{id}', [management_students_controller::class, 'show_student_main_info_to_edit'])->name('management.student.profile.show.to.edit');
    Route::post('students/profile/edit/apply', [management_students_controller::class, 'edit_student_main_info'])->name('management.student.profile.edit');


    Route::get('students/duties/courses', [management_students_controller::class, 'show_courses'])->name('management.student.show.courses');
    Route::get('students/duties/groups/{id}', [management_students_controller::class, 'show_groups'])->name('management.student.show.groups');

    Route::get('students/duties/group/students', [management_students_controller::class, 'show_students_to_add_duties'])->name('management.students.show.to.add.duties');
    Route::post('students/duties/group/students/add', [management_students_controller::class, 'students_add_duties'])->name('management.students.add.duties');

    Route::get('students/duties/show/readonly', [management_students_controller::class, 'students_duties'])->name('management.students.duties.readonly');



    Route::get('students/points/student/selector', [points_controller::class, 'student_selector'])->name('students.points.students.selector');
    Route::post('students/points/show', [points_controller::class, 'student_points_calaculator'])->name('students.points.student.show');

 //   Route::post('students/points/show', [points_controller::class, 'student_points_calaculator'])->name('students.points.student.show');
    Route::get('students/points/course', [points_controller::class, 'course_points'])->name('students.points.course.points');




    Route::get('staff/required/data', [management_staff_controller::class, 'data_to_add_staff'])->name('management.staff.required.data');
    Route::post('staff/register', [management_staff_controller::class, 'register_staff'])->name('management.staff.register');

    Route::get('staff/main', [management_staff_controller::class, 'staff_main_info'])->name('management.staff.main');
    Route::get('staff/profile/brief/{id}', [management_staff_controller::class, 'brief_staff_info'])->name('management.staff.profile.brief');
    Route::get('staff/profile/edit/{id}', [management_staff_controller::class, 'show_staff_main_info_to_edit'])->name('management.staff.profile.show.to.edit');
    Route::post('staff/profile/edit/apply', [management_staff_controller::class, 'edit_staff_main_info'])->name('management.staff.profile.edit');
    Route::get('staff/profile/qualification', [management_staff_controller::class, 'staff_info'])->name('management.staff.profile.qualification');
    Route::get('staff/required/data', [management_staff_controller::class, 'data_to_add_staff'])->name('management.staff.required.data');
    Route::post('staff/register', [management_staff_controller::class, 'register_staff'])->name('management.staff.register');
    Route::get('staff/profile/qualifications/{id}', [management_staff_controller::class, 'get_qualifications'])->name('management.staff.profile.qualifications');


//staff profile

});



Route::prefix('educational')->group(function () {
    Route::get('student/info', [education_a_controller::class, 'student_info'])->name('educational.student.info');
});

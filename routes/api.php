<?php

use App\Http\Controllers\auth_controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\quran_department\quran_a_controller;
use App\Http\Controllers\education_department\education_a_controller;
use App\Http\Controllers\management_department\management_students_controller;
use App\Http\Controllers\rewards_department\points_controller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('accounts/login',[auth_controller::class,'api_login']);

Route::prefix('quran')->group(function () {
    Route::get('courses/names/{id}',[quran_a_controller::class,'get_courses_names'])->name('quran.courses.names');//reciever id
    Route::get('groups/names/{id}',[quran_a_controller::class,'get_groups_names'])->name('quran.groups.names');//course id
    Route::get('group/students/names/{id}',[quran_a_controller::class,'get_students_names'])->name('quran.group.students.names');//group_id

    Route::get('student/recitation/info',[quran_a_controller::class,'get_recitation_info'])->name('quran.student.recitation.info');//students id ,reason id



    Route::post('student/recitation/add/cell',[quran_a_controller::class,'post_one_cell'])->name('quran.student.recitation.add.cell');//students id ,reason id
    Route::post('student/recitation/add/multicells',[quran_a_controller::class,'post_multi_cell'])->name('quran.student.recitation.add.multicells');//students id ,reason id
    Route::post('student/recitation/add/surahs',[quran_a_controller::class,'post_surahs'])->name('quran.student.recitation.add,surahs');//students id ,reason id

    Route::get('student/recitation/get/info/cell',[quran_a_controller::class,'get_basic_info_for_cell'])->name('quran.student.recitation.get.info.cell');//students id ,reason id
    Route::get('student/recitation/get/info/multicells',[quran_a_controller::class,'get_basic_info_for_cells'])->name('quran.student.recitation.get.info.multicells');//students id ,reason id
    Route::get('student/recitation/get/info/surahs',[quran_a_controller::class,'get_basic_info_for_surahs'])->name('quran.student.recitation.get.info.surahs');//students id ,reason id




    Route::get('student/recitation/get',[quran_a_controller::class,'test'])->name('quran.student.recitation.get');//students id ,reason id
    Route::put('student/recitation/update',[quran_a_controller::class,'post_test'])->name('quran.student.recitation.update');//students id ,reason id
    Route::delete('student/recitation/delete',[quran_a_controller::class,'post_test'])->name('quran.student.recitation.delete');//students id ,reason id

});

//test test
//achieve
//receive
//archive

Route::prefix('education')->group(function () {
    Route::get('groups/names/{id}',[education_a_controller::class,'test'])->name('education.groups.names');//reciever id
    Route::get('group/students/names/{id}',[education_a_controller::class,'test'])->name('education.group.students.names');//group_id
    Route::get('books/names',[education_a_controller::class,'test'])->name('education.books.names');
    Route::get('book/sections/{id}',[education_a_controller::class,'test'])->name('education.book.sections');
    Route::get('group/lessons/given/{id}',[education_a_controller::class,'test'])->name('education.group.lessons.given');//group_id
    Route::post('group/lesson/add/{id}',[education_a_controller::class,'post_test'])->name('education.group.lesson.add');//group_id ,lesson id ,book id
    Route::put('group/lesson/update/{id}',[education_a_controller::class,'post_test'])->name('education.group.lesson.update');//group_id ,lesson id ,book id
    Route::delete('group/lesson/delete',[education_a_controller::class,'post_test'])->name('education.group.lesson.delete');//group_id ,lesson id ,book id

});

Route::prefix('managemnet')->group(function () {
    Route::get('students/groups/names/{id}',[management_students_controller::class,'test'])->name('managemnet.students.groups.names');//reciever id
    Route::get('students/group/students/names/{id}',[management_students_controller::class,'test'])->name('managemnet.students.students.names');//group_id
    Route::post('students/group/students/attendance',[management_students_controller::class,'post_attendance'])->name('managemnet.students.students.attendance');
});

Route::prefix('rewards')->group(function () {
    Route::post('students/points/add',[points_controller::class,'post_test'])->name('students.points.add');//students id ,reason id
    Route::get('student/points/get/{id}',[points_controller::class,'test'])->name('student.points.get');//students id
    Route::put('student/points/update',[points_controller::class,'post_test'])->name('student.points.update');//students id ,edited info,edited point record id
    Route::delete('student/points/delete',[points_controller::class,'post_test'])->name('student.points.delete');//students id ,reason id


});

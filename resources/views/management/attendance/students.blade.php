@extends('general.admin_master')

@section('admin')
<div class="form-check form-switch">
    <input checked onchange="takingOrShowingAttendance()" class="form-check-input" type="checkbox" role="switch" id="takingOrShowingAttendanceSwitch">
    <label class="form-check-label" for="takingOrShowingAttendanceSwitch">أخذ التفقد أو عرضه</label>
  </div>

  <form id="takingAttendanceForm" action="{{ route('management.attendance.students.post') }}" method="POST">
    @csrf
    @include('quran.components.attendance_student_flash')

    <div class="form-group">
        <h2 for="attendance_date"><center>تققد الطلاب</center></h2>
        <center>
            <input style="width: 50%" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}" type="date"
                name="attendance_date" id="attendance_date" class="form-control" required>
        </center>
    </div>



    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    <h3>
                        <center>الحضور</center>
                    </h3>
                </th>

                <th scope="col">
                    <h3>
                        <center>وقت الحضور</center>
                    </h3>
                </th>
                <th scope="col">
                    <h3>
                        <center>اسم الطالب</center>
                    </h3>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>
                        <center>
                            <input type="checkbox" name="attendance[]" value="{{ $student->id }}"
                                class="checkbox-input">
                        </center>
                    </td>

                    <td>
                        @php
                            $currentTime = Carbon\Carbon::now()->timezone('GMT+3');
                        @endphp
                        <center>
                            <input style="width: 50%" value="{{ $currentTime->format('H:i:s') }}" type="time"
                                name="attendance_time[]" class="form-control" required>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h3>{{ $student->student_fn . ' ' . $student->student_ln }}</h3>
                        </center>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit" class="btn btn-primary">تسجيل</button>

</form>


    <form style="display: none;" id="showinAttendanceForm" action="" method="">
        @csrf
        @include('quran.components.attendance_student_flash')

        <div class="form-group">
            <h2 for="attendance_date"><center>الطلاب الحاضرين</center></h2>
            <center>
                <input  onchange="onChangeDate()" style="width: 50%" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}" type="date"
                    name="attendance_date" id="attendance_date" class="form-control" required>
            </center>
            <button style="font: bold" id="editDateButton" type="submit" class="btn btn-primary">الأستعلام عن هذا التاريخ</button>
   //
        </div>



        <table class="table">
            <thead>
                <tr>
                    <th scope="col">
                        <h3>
                            <center>الحضور</center>
                        </h3>
                    </th>

                    <th scope="col">
                        <h3>
                            <center>وقت الحضور</center>
                        </h3>
                    </th>
                    <th scope="col">
                        <h3>
                            <center>اسم الطالب</center>
                        </h3>
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i =0;
                    $checkboxStudentAttendance = "StudentAttendance".$i;
                @endphp

                @foreach ($studentsAttendance as $student)
                    <tr>
                        <td>
                            <center>
                                <input id={{ $checkboxStudentAttendance }} type="checkbox" name="attendance[]" value="{{ $student->id }}"
                                    class="checkbox-input-2" checked>
                            </center>

                            @php
                                $i++;
                                $checkboxStudentAttendance = "StudentAttendance".$i;
                            @endphp
                        </td>

                        <td>
                            @php
                                $currentTime = Carbon\Carbon::now()->timezone('GMT+3');
                            @endphp
                            <center>
                                <input style="width: 50%" type="time" value="{{ $student->arrival_time }}"
                                    name="attendance_time[]" class="form-control" required>
                            </center>
                        </td>
                        <td>
                            <center>
                                <h3>{{ $student->student_fn . ' ' . $student->student_ln }}</h3>
                            </center>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button onclick="checkAttendanceEditing()" id="submitUpdatedAttendance" type="submit" class="btn btn-primary">تعديل</button>

    </form>





@endsection

@section('styles')
    <style>
        .attendance-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .checkbox-label {
            display: block;
            margin-bottom: 5px;
        }

        .checkbox-input {
            margin-right: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 15px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
@endsection

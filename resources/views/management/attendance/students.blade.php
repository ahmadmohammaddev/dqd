@extends('general.admin_master')

@section('admin')
    <div class="attendance-form">
        <h2>التفقد</h2>

        <form action="{{ route('management.attendance.students.post') }}" method="POST">
            @csrf
            @include('quran.components.attendance_student_flash')


            <div class="form-group">
                <label for="attendance_date">التاريخ</label>
                <input value="{{ Carbon\Carbon::now()->format('Y-m-d') }}" type="date" name="attendance_date" id="attendance_date" class="form-control" required>
            </div>

            <div class="student-list">
                <h3>الطلاب:</h3>
                @foreach ($students as $student)
                    <label style="font-size:30px" class="checkbox-label">
                        <input  type="checkbox" name="attendance[]" value="{{ $student->id }}" class="checkbox-input">
                        {{ $student->student_fn ." ". $student->student_ln}}
                    </label>
                </br>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">تسجيل</button>
        </form>
    </div>
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

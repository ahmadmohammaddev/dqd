@extends('general.admin_master')

@section('admin')
    <h1 style="margin: 0;">نقاط دورة</h1>

    <div style="margin-top: 20px;">
        <table class="table">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Points</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students_points as $studentId => $data)
                    <tr>
                        <td>{{ $studentId }}</td>
                        <td>{{ $data['name'] }}</td>
                        <td>{{ $data['points'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

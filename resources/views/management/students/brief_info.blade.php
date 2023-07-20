@extends('general.admin_master')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('admin')
    <x-student_sidebar_choices student_id="{{ $student_info->id }}" />
    @include('general.components.flash')



    <h1>لمحة مختصرة عن الطالب {{ $student_info->student_fn . ' ' . $student_info->student_ln }}</h1>
    <br />
    <br />
    <br />
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>عدد الأقسسام القرآنية التي سمعها الطالب : {{ $accepted_Cells }}</h1>
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="col-xs-12">
            <h1></h1>
            @if ($course == null)
                <h1>الدورة الحالية : الطالب غير مسجل حالياَ<h1>
                    @else
                        <h1> {{ $course }} : الدورة الحالية</h1>
            @endif
        </div>
        <br />
        <br />
        <br />
        <div class="row">
            <div class="col-xs-12">
                <h1></h1>
                @if ($group == null)
                    <h1>الحلقة الحالية : الطالب غير مسجل حالياَ<h1>
                        @else
                            <h1> {{ $group }} : الحلقة الحالية</h1>
                @endif
            </div>
        </div>

    </div>
@endsection

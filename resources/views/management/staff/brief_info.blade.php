@extends('general.admin_master')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('admin')
    {{-- <x-staff_sidebar_choices satff_id="{{ $staff_info->id }}"/> --}}
    @include('general.components.flash')


<h1>ملخص لمعلومات الأستاذ: {{ $staff_info->staff_fn . ' ' . $staff_info->staff_ln }}</h1>
<br />
<br />
<br />
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1>المؤهلات العلمية</h1>
            <h1>دوره في المسجد مع اسم الدورة واذا كان استاذ  مع الحلقة</h1>

        </div>
    </div>

</div>




@endsection

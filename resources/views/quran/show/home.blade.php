@extends('general.admin_master')

@section('admin')

<div class="col-12 text-center">
    <h1 class="fw-light">أهلاً وسهلاً بكم في قسم بيانات القرآن الكريم</h1>
    <p class="lead">ولله العزة ولرسوله وللمؤمنين</p>
</div>
<br />
<br />
<br />
<br />
<br />

<div class="row">
    <div  class="col-sm-12" >
        <center>
    <img src="{{ asset('backend\assets\img\quran\quran.png') }}" />
        </center>
    </div>
</div>

<br />
<br />
<br />
<br />
<br />


<div class="row">

    <div class="col-xs-12 col-md-4">
    <center>
        <a href="{{ route('quran.show.student_info') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">بيانات طالب</a>
    </center>
    <br/>
    </div>


    <div class="col-xs-12 col-md-4">
        <center>
            <a href="{{ route('quran.add_cells') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">بيانات حلقة</a>
        </center>
        <br/>
    </div>

    <div class="col-xs-12 col-md-4">
        <center>
            <a href="{{ route('quran.add_surahs') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">بيانات دورة</a>
        </center>
        <br/>
    </div>

</div>





@endsection

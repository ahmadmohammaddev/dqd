@extends('general.admin_master')

@section('admin')

<div class="row">

    <div class="col-xl-3 col-md-12"></div>

    <div class="col-xl-6 col-md-12">
        <!-- Sales Graph -->
        <div class="card card-default" data-scroll-height="500">
            <div class="card-header">
                <h2 class="test123">مخطط تسميع القرآن الكريم في الأشهر الماضية</h2>
            </div>
            <div class="card-body">
                <canvas id="linechart" class="chartjs"></canvas>
            </div>
            <div class="card-footer d-flex flex-wrap bg-white p-0">
                <div class="col-6 px-0">
                    <div class="text-center p-4">
                        <h4>6,308</h4>
                        <p class="mt-2">عدد الخلايا التي تم تسميها ضمن 2022</p>
                    </div>
                </div>
                <div class="col-6 px-0">
                    <div class="text-center p-4 border-left">
                        <h4>311</h4>
                        <p class="mt-2 ">عدد الطلاب</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-12"></div>
</div>
<br/>
<br/>
<center>
<h1> اختر نوع التسميع </h1>
</center>
<br/><br/>
<div class="row">

    <div class="col-xs-12 col-md-4">
    <center>
        <a href="{{ route('quran.add_cell') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">تسميع خلية</a>
    </center>
    <br/>
    </div>


    <div class="col-xs-12 col-md-4">
        <center>
            <a href="{{ route('quran.add_cells') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">تسميع خلايا</a>
        </center>
        <br/>
    </div>

    <div class="col-xs-12 col-md-4">
        <center>
            <a href="{{ route('quran.add_surahs') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">تسميع سورة او اكثر</a>
        </center>
        <br/>
    </div>

</div>



@endsection

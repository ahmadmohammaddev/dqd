<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">الملف الشخصي للطالب : {{ $student_info->student_fn .' '. $student_info->student_ln}}</h3>
                </div>


                <div class="card-body">
                    <p>الحلقة : {{ $student_info->student_fn }}</p>
                    <p>أيام الدورة: سبت أحد إثنين</p>
                    <p>عدد أيام الغياب : 55</p>
                    <p>عدد الصفحات المقبولة: {{ $accepted_Cells }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

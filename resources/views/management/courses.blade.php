@extends('general.admin_master')

@section('admin')
    <div calss=row>
        <div class="col-12">
            {{-- Message --}}
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="fa fa-times"></i>
                    </button>
                    {{ session('success') }}
                </div>
        </div>
        @endif

        @if (Session::has('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="fa fa-times"></i>
                </button>
                <strong>Error !</strong> {{ session('error') }}
            </div>
        @endif

    </div>
    <div class="row">

        <div class="col-md-6" style="left:30%;margin-top:5%">



            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="padding:10px" class="title">معلومات الدورات</h4>

                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCourseModal">
                            إضافة دورة جديدة
                        </button>




                        <div class="card-body">
                            <table class="table table-bordered table-condensed " style="text-align: center">
                                @php
                                    $i = 1;
                                @endphp
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">نوع الدورة</th>
                                        <th scope="col">تاريخ البدء</th>
                                        <th scope="col">تاريخ النهاية</th>
                                        <th scope="col">توقيت البدء</th>
                                        <th scope="col">توقيت النهاية</th>
                                        <th scope="col">أيام الدوام</th>
                                        <th scope="col">تعديل</th>
                                    </tr>
                                </thead>

                                @php
                                    $i = 1;
                                @endphp


                                @foreach ($courses_info as $course)
                                    @php
                                        $course_day = '';
                                        $course_season = '';

                                        if ($course->saturday == 1) {
                                            $course_day .= 'السبت ';
                                        }
                                        if ($course->sunday == 1) {
                                            $course_day .= 'الأحد ';
                                        }
                                        if ($course->monday == 1) {
                                            $course_day .= 'الإثنين ';
                                        }
                                        if ($course->tuesday == 1) {
                                            $course_day .= 'الثلاثاء ';
                                        }
                                        if ($course->wednesday == 1) {
                                            $course_day .= 'الأربعاء ';
                                        }
                                        if ($course->thursday == 1) {
                                            $course_day .= 'الخميس ';
                                        }
                                        if ($course->friday == 1) {
                                            $course_day .= 'الجمعة ';
                                        }

                                        if ($course->type) {
                                            $course_season .= 'صيفية';
                                        } else {
                                            $course_season .= 'شتوية';
                                        }
                                    @endphp


                                    <tr>


                                        <td>{{ $course->id }}</td>
                                        <td>{{ $course_season }}</td>
                                        <td>{{ $course->start_date }}</td>
                                        <td>{{ $course->end_date }}</td>
                                        <td>{{ $course->start_time }}</td>
                                        <td>{{ $course->end_time }}</td>
                                        <td>{{ $course_day }}</td>
                                        <td> <a class="btn btn-info" data-target={{ '#editCourseModal' . $course->id }}
                                                data-toggle="modal" role="button" style="color:black">تعديل</a>

                                            <div class="modal fade" id={{ 'editCourseModal' . $course->id }} tabindex="-1"
                                                role="dialog" aria-labelledby="editCourseModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editCourseModalLabel">تعديل دورة
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST"
                                                                action="{{ route('management.courses.edit') }}">
                                                                @csrf
                                                                @method('PUT')

                                                                <div class="form-group">
                                                                    <label for="type">نوع الدورة</label>
                                                                    <select class="form-control" id="type"
                                                                        name="type">
                                                                        <option value="0"
                                                                            {{ $course->type == 0 ? 'selected' : '' }}>دورة
                                                                            شتوية</option>
                                                                        <option value="1"
                                                                            {{ $course->type == 1 ? 'selected' : '' }}>دورة
                                                                            صيفية</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="start_date">تاريخ البدء</label>
                                                                    <input type="date" class="form-control"
                                                                        id="start_date" name="start_date"
                                                                        value="{{ $course->start_date }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="end_date">تاريخ الانتهاء</label>
                                                                    <input type="date" class="form-control"
                                                                        id="end_date" name="end_date"
                                                                        value="{{ $course->end_date }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="start_time">وقت البدء</label>
                                                                    <input type="time" class="form-control"
                                                                        id="start_time" name="start_time"
                                                                        value="{{ $course->start_time }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="end_time">وقت الانتهاء</label>
                                                                    <input type="time" class="form-control"
                                                                        id="end_time" name="end_time"
                                                                        value="{{ $course->end_time }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="days">أيام الدوام</label><br>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="saturday" name="days[]"
                                                                            value="saturday"
                                                                            @if ($course->saturday) checked @endif>
                                                                        <label class="form-check-label"
                                                                            for="saturday">السبت</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="sunday" name="days[]" value="sunday"
                                                                            @if ($course->sunday) checked @endif>
                                                                        <label class="form-check-label"
                                                                            for="sunday">الأحد</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="monday" name="days[]" value="monday"
                                                                            @if ($course->monday) checked @endif>
                                                                        <label class="form-check-label"
                                                                            for="monday">الإثنين</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="tuesday" name="days[]" value="tuesday"
                                                                            @if ($course->tuesday) checked @endif>
                                                                        <label class="form-check-label"
                                                                            for="tuesday">الثلاثاء</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="wednesday" name="days[]"
                                                                            value="wednesday"
                                                                            @if ($course->wednesday) checked @endif>
                                                                        <label class="form-check-label"
                                                                            for="wednesday">الأربعاء</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="thursday" name="days[]"
                                                                            value="thursday"
                                                                            @if ($course->thursday) checked @endif>
                                                                        <label class="form-check-label"
                                                                            for="thursday">الخميس</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="friday" name="days[]" value="friday"
                                                                            @if ($course->friday) checked @endif>
                                                                        <label class="form-check-label"
                                                                            for="friday">الجمعة</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="hidden" value={{ $course->id }}
                                                                        name="original_id">
                                                                </div>


                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cancel</button>
                                                                    <button id="submit-btn" type="submit"
                                                                        class="btn btn-primary">Save</button>
                                                                </div>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </td>


                                    </tr>
                                @endforeach


                                <!-- -->





                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="addCourseModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCourseModalLabel">إضافة دورة جديدة</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('management.courses.add') }}">
                            @csrf

                            <div class="form-group">
                                <label for="type">نوع الدورة</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="0">دورة شتوية</option>
                                    <option value="1">دورة صيفية</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="start_date">تاريخ البدابة</label>
                                <input type="date" class="form-control" id="start_date" name="start_date">
                            </div>

                            <div class="form-group">
                                <label for="end_date">ترايخ النهاية</label>
                                <input type="date" class="form-control" id="end_date" name="end_date">
                            </div>

                            <div class="form-group">
                                <label for="start_time">وقت البداية</label>
                                <input type="time" class="form-control" id="start_time" name="start_time">
                            </div>

                            <div class="form-group">
                                <label for="end_time">وقت النهاية</label>
                                <input type="time" class="form-control" id="end_time" name="end_time">
                            </div>

                            <div class="form-group">
                                <label for="days">أيام الدوام</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="saturday" name="days[]"
                                        value="saturday">
                                    <label class="form-check-label" for="saturday">السبت</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="sunday" name="days[]"
                                        value="sunday">
                                    <label class="form-check-label" for="sunday">الأحد</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="monday" name="days[]"
                                        value="monday">
                                    <label class="form-check-label" for="monday">الإثنين</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tuesday" name="days[]"
                                        value="tuesday">
                                    <label class="form-check-label" for="tuesday">الثلاثاء</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="wednesday" name="days[]"
                                        value="wednesday">
                                    <label class="form-check-label" for="wednesday">الأربعاء</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="thursday" name="days[]"
                                        value="thursday">
                                    <label class="form-check-label" for="thursday">الخميس</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="friday" name="days[]"
                                        value="friday">
                                    <label class="form-check-label" for="friday">الجمعة</label>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button id="submit-btn" type="submit" class="btn btn-primary">Save</button>
                            </div>


                        </form>

                    </div>

                </div>
            </div>
        </div>
        <!--
            <script>
                document.getElementById('submit-btn').addEventListener('click', function() {
                    // Get all the checkboxes
                    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="days[]"]');

                    // Initialize the days array
                    const days = [0, 0, 0, 0, 0, 0, 0];

                    // Loop through the checkboxes and add event listeners
                    checkboxes.forEach((checkbox, index) => {
                        checkbox.addEventListener('change', () => {
                            if (checkbox.checked) {
                                days[index] = 1;
                            } else {
                                days[index] = 0;
                            }
                        });
                    });
                });
            </script>

    -->
    </div>
@endsection

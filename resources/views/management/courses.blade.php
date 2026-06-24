@extends('general.admin_master')

@section('admin')
    <style>
        /* Modern Scoped Styling for Courses Page */
        .card-custom {
            border: none;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
            background-color: #ffffff;
            overflow: hidden;
            margin-bottom: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card-custom-header {
            background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);
            padding: 1.5rem 2rem;
            border-bottom: 1px solid #eef2f6;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .card-custom-header .title-area {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .card-custom-header .title-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background-color: rgba(53, 114, 239, 0.1);
            color: #3572EF;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }
        
        .card-custom-header .title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1e293b;
            margin: 0;
        }

        .btn-add-custom {
            background-color: #3572EF;
            color: #ffffff !important;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: 600;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 12px rgba(53, 114, 239, 0.2);
            transition: all 0.2s ease;
        }
        
        .btn-add-custom:hover {
            background-color: #1a56db;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(53, 114, 239, 0.3);
        }
        
        .btn-add-custom:active {
            transform: translateY(0);
        }

        /* Table Modernization */
        .table-container {
            padding: 1.5rem;
            overflow-x: auto;
        }
        
        .table-custom {
            width: 100%;
            margin-bottom: 0;
            vertical-align: middle;
            border-collapse: separate;
            border-spacing: 0 8px;
        }
        
        .table-custom thead th {
            background-color: #f8fafc;
            color: #64748b;
            font-weight: 700;
            font-size: 0.88rem;
            text-transform: uppercase;
            border: none;
            padding: 16px;
            letter-spacing: 0.5px;
        }
        
        .table-custom thead th:first-child {
            border-radius: 0 10px 10px 0;
        }
        .table-custom thead th:last-child {
            border-radius: 10px 0 0 10px;
        }
        
        .table-custom tbody tr {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.01);
            transition: all 0.2s ease-in-out;
        }
        
        .table-custom tbody tr:hover {
            background-color: #f8fafc !important;
            box-shadow: 0 4px 15px rgba(53, 114, 239, 0.06);
            transform: translateY(-1px);
        }
        
        .table-custom tbody td {
            padding: 16px;
            color: #334155;
            font-size: 0.95rem;
            font-weight: 500;
            border-top: 1px solid #f1f5f9;
            border-bottom: 1px solid #f1f5f9;
            transition: all 0.2s ease;
        }
        
        .table-custom tbody tr td:first-child {
            border-right: 1px solid #f1f5f9;
            border-radius: 0 10px 10px 0;
            font-weight: 700;
            color: #64748b;
        }
        
        .table-custom tbody tr td:last-child {
            border-left: 1px solid #f1f5f9;
            border-radius: 10px 0 0 10px;
        }

        /* Badges */
        .badge-season-summer {
            background-color: rgba(249, 115, 22, 0.1);
            color: #ea580c;
            padding: 6px 14px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        
        .badge-season-winter {
            background-color: rgba(14, 165, 233, 0.1);
            color: #0284c7;
            padding: 6px 14px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        
        .badge-day-pill {
            background-color: #f1f5f9;
            color: #475569;
            padding: 4px 10px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.8rem;
            margin: 2px;
            display: inline-block;
            border: 1px solid #e2e8f0;
        }

        .badge-day-pill.active-day {
            background-color: rgba(53, 114, 239, 0.08);
            color: #3572EF;
            border-color: rgba(53, 114, 239, 0.25);
        }
        
        /* Edit Button */
        .btn-edit-custom {
            background-color: #f8fafc;
            color: #475569 !important;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 6px 14px;
            font-weight: 600;
            font-size: 0.85rem;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
            text-decoration: none !important;
        }
        
        .btn-edit-custom:hover {
            background-color: #3572EF;
            color: #ffffff !important;
            border-color: #3572EF;
            box-shadow: 0 4px 10px rgba(53, 114, 239, 0.15);
        }

        /* Modal Enhancements */
        .modal-content-custom {
            border-radius: 16px;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .modal-header-custom {
            background-color: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
            padding: 1.25rem 1.5rem;
        }
        
        .modal-title-custom {
            font-weight: 700;
            color: #1e293b;
        }
        
        .modal-body-custom {
            padding: 1.5rem;
        }
        
        .modal-footer-custom {
            background-color: #f8fafc;
            border-top: 1px solid #e2e8f0;
            padding: 1rem 1.5rem;
        }
        
        .form-label-custom {
            font-weight: 600;
            color: #475569;
            margin-bottom: 6px;
            text-align: right;
            display: block;
        }
        
        .form-control-custom {
            border-radius: 10px !important;
            border: 1px solid #cbd5e1 !important;
            padding: 10px 14px !important;
            transition: all 0.2s ease !important;
            font-size: 0.95rem !important;
            text-align: right;
        }
        
        .form-control-custom:focus {
            border-color: #3572EF !important;
            box-shadow: 0 0 0 3px rgba(53, 114, 239, 0.15) !important;
            outline: none !important;
        }

        /* Day Checkboxes Style (Button-like Toggle) */
        .day-checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: flex-start;
        }

        .day-checkbox-wrapper {
            display: inline-block;
        }

        .day-checkbox-input {
            display: none !important;
        }

        .day-checkbox-label {
            display: inline-block;
            padding: 8px 16px;
            background-color: #f8fafc;
            color: #475569;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s ease;
            user-select: none;
            text-align: center;
            min-width: 75px;
            margin-bottom: 0 !important;
        }

        .day-checkbox-label:hover {
            background-color: #f1f5f9;
            border-color: #cbd5e1;
            color: #1e293b;
        }

        .day-checkbox-input:checked + .day-checkbox-label {
            background-color: rgba(53, 114, 239, 0.08);
            color: #3572EF;
            border-color: #3572EF;
            box-shadow: 0 2px 8px rgba(53, 114, 239, 0.1);
        }
    </style>

    <div class="row">
        <div class="col-12">
            {{-- Message --}}
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session('success') }}
                </div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>خطأ!</strong> {{ session('error') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row justify-content-center py-4">
        <div class="col-12 col-xl-11">
            <div class="card card-custom">
                <div class="card-custom-header">
                    <div class="title-area">
                        <div class="title-icon">
                            <i class="mdi mdi-book-open-page-variant"></i>
                        </div>
                        <h4 class="title">معلومات الدورات</h4>
                    </div>

                    <button type="button" class="btn btn-add-custom" data-toggle="modal" data-target="#addCourseModal">
                        <i class="mdi mdi-plus-circle-outline"></i>
                        إضافة دورة جديدة
                    </button>
                </div>

                <div class="card-body p-0">
                    <div class="table-container">
                        <table class="table table-custom text-center">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">نوع الدورة</th>
                                    <th scope="col">تاريخ البدء</th>
                                    <th scope="col">تاريخ النهاية</th>
                                    <th scope="col">توقيت البدء</th>
                                    <th scope="col">توقيت النهاية</th>
                                    <th scope="col">أيام الدوام</th>
                                    <th scope="col">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses_info as $course)
                                    <tr>
                                        <td>{{ $course->id }}</td>
                                        <td>
                                            @if ($course->type)
                                                <span class="badge-season-summer">
                                                    <i class="mdi mdi-weather-sunny"></i> دورة صيفية
                                                </span>
                                            @else
                                                <span class="badge-season-winter">
                                                    <i class="mdi mdi-snowflake"></i> دورة شتوية
                                                </span>
                                            @endif
                                        </td>
                                        <td>{{ $course->start_date }}</td>
                                        <td>{{ $course->end_date }}</td>
                                        <td>{{ $course->start_time }}</td>
                                        <td>{{ $course->end_time }}</td>
                                        <td>
                                            @if ($course->saturday) <span class="badge-day-pill active-day">السبت</span> @endif
                                            @if ($course->sunday) <span class="badge-day-pill active-day">الأحد</span> @endif
                                            @if ($course->monday) <span class="badge-day-pill active-day">الإثنين</span> @endif
                                            @if ($course->tuesday) <span class="badge-day-pill active-day">الثلاثاء</span> @endif
                                            @if ($course->wednesday) <span class="badge-day-pill active-day">الأربعاء</span> @endif
                                            @if ($course->thursday) <span class="badge-day-pill active-day">الخميس</span> @endif
                                            @if ($course->friday) <span class="badge-day-pill active-day">الجمعة</span> @endif
                                            @if (!$course->saturday && !$course->sunday && !$course->monday && !$course->tuesday && !$course->wednesday && !$course->thursday && !$course->friday)
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn-edit-custom" data-target="#editCourseModal{{ $course->id }}"
                                                data-toggle="modal" role="button">
                                                <i class="mdi mdi-square-edit-outline"></i>
                                                تعديل
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modals (Placed at top-level outside the table to prevent hover & rendering conflicts) -->
    @foreach ($courses_info as $course)
        <div class="modal fade" id="editCourseModal{{ $course->id }}" tabindex="-1"
            role="dialog" aria-labelledby="editCourseModalLabel{{ $course->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-custom text-right" dir="rtl">
                    <div class="modal-header modal-header-custom d-flex justify-content-between align-items-center">
                        <h5 class="modal-title modal-title-custom" id="editCourseModalLabel{{ $course->id }}">
                            <i class="mdi mdi-square-edit-outline text-primary me-2"></i>
                            تعديل دورة #{{ $course->id }}
                        </h5>
                        <button type="button" class="close ms-0" data-dismiss="modal" aria-label="Close" style="border: none; background: none; font-size: 1.5rem;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body modal-body-custom">
                        <form method="POST" action="{{ route('management.courses.edit') }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="type{{ $course->id }}" class="form-label-custom">نوع الدورة</label>
                                <select class="form-control form-control-custom" id="type{{ $course->id }}" name="type">
                                    <option value="0" {{ $course->type == 0 ? 'selected' : '' }}>دورة شتوية</option>
                                    <option value="1" {{ $course->type == 1 ? 'selected' : '' }}>دورة صيفية</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="start_date{{ $course->id }}" class="form-label-custom">تاريخ البدء</label>
                                <input type="date" class="form-control form-control-custom" id="start_date{{ $course->id }}" name="start_date" value="{{ $course->start_date }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="end_date{{ $course->id }}" class="form-label-custom">تاريخ الانتهاء</label>
                                <input type="date" class="form-control form-control-custom" id="end_date{{ $course->id }}" name="end_date" value="{{ $course->end_date }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="start_time{{ $course->id }}" class="form-label-custom">وقت البدء</label>
                                <input type="time" class="form-control form-control-custom" id="start_time{{ $course->id }}" name="start_time" value="{{ $course->start_time }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="end_time{{ $course->id }}" class="form-label-custom">وقت الانتهاء</label>
                                <input type="time" class="form-control form-control-custom" id="end_time{{ $course->id }}" name="end_time" value="{{ $course->end_time }}">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label-custom">أيام الدوام</label>
                                <div class="day-checkbox-group">
                                    <div class="day-checkbox-wrapper">
                                        <input class="day-checkbox-input" type="checkbox" id="saturday{{ $course->id }}" name="days[]" value="saturday" @if ($course->saturday) checked @endif>
                                        <label class="day-checkbox-label" for="saturday{{ $course->id }}">السبت</label>
                                    </div>
                                    <div class="day-checkbox-wrapper">
                                        <input class="day-checkbox-input" type="checkbox" id="sunday{{ $course->id }}" name="days[]" value="sunday" @if ($course->sunday) checked @endif>
                                        <label class="day-checkbox-label" for="sunday{{ $course->id }}">الأحد</label>
                                    </div>
                                    <div class="day-checkbox-wrapper">
                                        <input class="day-checkbox-input" type="checkbox" id="monday{{ $course->id }}" name="days[]" value="monday" @if ($course->monday) checked @endif>
                                        <label class="day-checkbox-label" for="monday{{ $course->id }}">الإثنين</label>
                                    </div>
                                    <div class="day-checkbox-wrapper">
                                        <input class="day-checkbox-input" type="checkbox" id="tuesday{{ $course->id }}" name="days[]" value="tuesday" @if ($course->tuesday) checked @endif>
                                        <label class="day-checkbox-label" for="tuesday{{ $course->id }}">الثلاثاء</label>
                                    </div>
                                    <div class="day-checkbox-wrapper">
                                        <input class="day-checkbox-input" type="checkbox" id="wednesday{{ $course->id }}" name="days[]" value="wednesday" @if ($course->wednesday) checked @endif>
                                        <label class="day-checkbox-label" for="wednesday{{ $course->id }}">الأربعاء</label>
                                    </div>
                                    <div class="day-checkbox-wrapper">
                                        <input class="day-checkbox-input" type="checkbox" id="thursday{{ $course->id }}" name="days[]" value="thursday" @if ($course->thursday) checked @endif>
                                        <label class="day-checkbox-label" for="thursday{{ $course->id }}">الخميس</label>
                                    </div>
                                    <div class="day-checkbox-wrapper">
                                        <input class="day-checkbox-input" type="checkbox" id="friday{{ $course->id }}" name="days[]" value="friday" @if ($course->friday) checked @endif>
                                        <label class="day-checkbox-label" for="friday{{ $course->id }}">الجمعة</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="hidden" value="{{ $course->id }}" name="original_id">
                            </div>

                            <div class="modal-footer modal-footer-custom d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-light" data-dismiss="modal" style="border-radius: 8px;">إلغاء</button>
                                <button type="submit" class="btn btn-primary" style="border-radius: 8px; background-color: #3572EF; border: none; padding: 8px 20px;">حفظ التغييرات</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Add Course Modal -->
    <div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="addCourseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-custom text-right" dir="rtl">
                <div class="modal-header modal-header-custom d-flex justify-content-between align-items-center">
                    <h5 class="modal-title modal-title-custom" id="addCourseModalLabel">
                        <i class="mdi mdi-plus-circle-outline text-primary me-2"></i>
                        إضافة دورة جديدة
                    </h5>
                    <button type="button" class="close ms-0" data-dismiss="modal" aria-label="Close" style="border: none; background: none; font-size: 1.5rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-body-custom">
                    <form method="POST" action="{{ route('management.courses.add') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="add_type" class="form-label-custom">نوع الدورة</label>
                            <select class="form-control form-control-custom" id="add_type" name="type">
                                <option value="0">دورة شتوية</option>
                                <option value="1">دورة صيفية</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="add_start_date" class="form-label-custom">تاريخ البداية</label>
                            <input type="date" class="form-control form-control-custom" id="add_start_date" name="start_date">
                        </div>

                        <div class="form-group mb-3">
                            <label for="add_end_date" class="form-label-custom">تاريخ النهاية</label>
                            <input type="date" class="form-control form-control-custom" id="add_end_date" name="end_date">
                        </div>

                        <div class="form-group mb-3">
                            <label for="add_start_time" class="form-label-custom">وقت البداية</label>
                            <input type="time" class="form-control form-control-custom" id="add_start_time" name="start_time">
                        </div>

                        <div class="form-group mb-3">
                            <label for="add_end_time" class="form-label-custom">وقت النهاية</label>
                            <input type="time" class="form-control form-control-custom" id="add_end_time" name="end_time">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label-custom">أيام الدوام</label>
                            <div class="day-checkbox-group">
                                <div class="day-checkbox-wrapper">
                                    <input class="day-checkbox-input" type="checkbox" id="add_saturday" name="days[]" value="saturday">
                                    <label class="day-checkbox-label" for="add_saturday">السبت</label>
                                </div>
                                <div class="day-checkbox-wrapper">
                                    <input class="day-checkbox-input" type="checkbox" id="add_sunday" name="days[]" value="sunday">
                                    <label class="day-checkbox-label" for="add_sunday">الأحد</label>
                                </div>
                                <div class="day-checkbox-wrapper">
                                    <input class="day-checkbox-input" type="checkbox" id="add_monday" name="days[]" value="monday">
                                    <label class="day-checkbox-label" for="add_monday">الإثنين</label>
                                </div>
                                <div class="day-checkbox-wrapper">
                                    <input class="day-checkbox-input" type="checkbox" id="add_tuesday" name="days[]" value="tuesday">
                                    <label class="day-checkbox-label" for="add_tuesday">الثلاثاء</label>
                                </div>
                                <div class="day-checkbox-wrapper">
                                    <input class="day-checkbox-input" type="checkbox" id="add_wednesday" name="days[]" value="wednesday">
                                    <label class="day-checkbox-label" for="add_wednesday">الأربعاء</label>
                                </div>
                                <div class="day-checkbox-wrapper">
                                    <input class="day-checkbox-input" type="checkbox" id="add_thursday" name="days[]" value="thursday">
                                    <label class="day-checkbox-label" for="add_thursday">الخميس</label>
                                </div>
                                <div class="day-checkbox-wrapper">
                                    <input class="day-checkbox-input" type="checkbox" id="add_friday" name="days[]" value="friday">
                                    <label class="day-checkbox-label" for="add_friday">الجمعة</label>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer modal-footer-custom d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-light" data-dismiss="modal" style="border-radius: 8px;">إلغاء</button>
                            <button type="submit" class="btn btn-primary" style="border-radius: 8px; background-color: #3572EF; border: none; padding: 8px 20px;">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

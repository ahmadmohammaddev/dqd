@extends('general.admin_master')

@section('admin')
    <style>
        /* Modern Scoped Styling for Groups Page */
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

        /* Course Badge */
        .badge-course-info {
            background-color: rgba(53, 114, 239, 0.08);
            color: #3572EF;
            padding: 6px 14px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 6px;
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
                            <i class="mdi mdi-account-group"></i>
                        </div>
                        <h4 class="title">معلومات الحلقات</h4>
                    </div>

                    <button type="button" class="btn btn-add-custom" data-toggle="modal" data-target="#addGroupModal">
                        <i class="mdi mdi-plus-circle-outline"></i>
                        إضافة حلقة جديدة
                    </button>
                </div>

                <div class="card-body p-0">
                    <div class="table-container">
                        <table class="table table-custom text-center">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">اسم الحلقة</th>
                                    <th scope="col">الدورة التابعة لها</th>
                                    <th scope="col">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($groups_info as $group)
                                    <tr>
                                        <td>{{ $group->id }}</td>
                                        <td>{{ $group->group_name }}</td>
                                        <td>
                                            <span class="badge-course-info">
                                                <i class="mdi mdi-book-open-page-variant"></i>
                                                {{ $group->course_type == 1 ? 'دورة صيفية' : 'دورة شتوية' }} ({{ $group->course_start_date }})
                                            </span>
                                        </td>
                                        <td>
                                            <a class="btn-edit-custom" data-target="#editGroupModal{{ $group->id }}"
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
    @foreach ($groups_info as $group)
        <div class="modal fade" id="editGroupModal{{ $group->id }}" tabindex="-1"
            role="dialog" aria-labelledby="editGroupModalLabel{{ $group->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-custom text-right" dir="rtl">
                    <div class="modal-header modal-header-custom d-flex justify-content-between align-items-center">
                        <h5 class="modal-title modal-title-custom" id="editGroupModalLabel{{ $group->id }}">
                            <i class="mdi mdi-square-edit-outline text-primary me-2"></i>
                            تعديل حلقة #{{ $group->id }}
                        </h5>
                        <button type="button" class="close ms-0" data-dismiss="modal" aria-label="Close" style="border: none; background: none; font-size: 1.5rem;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body modal-body-custom">
                        <form method="POST" action="{{ route('management.groups.edit') }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="group_name{{ $group->id }}" class="form-label-custom">اسم الحلقة</label>
                                <input type="text" class="form-control form-control-custom" id="group_name{{ $group->id }}" name="group_name" value="{{ $group->group_name }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="courses_id{{ $group->id }}" class="form-label-custom">الدورة التابعة لها</label>
                                <select class="form-control form-control-custom" id="courses_id{{ $group->id }}" name="courses_id" required>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}" {{ $group->courses_id == $course->id ? 'selected' : '' }}>
                                            {{ $course->type == 1 ? 'دورة صيفية' : 'دورة شتوية' }} ({{ $course->start_date }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="hidden" value="{{ $group->id }}" name="original_id">
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

    <!-- Add Group Modal -->
    <div class="modal fade" id="addGroupModal" tabindex="-1" role="dialog" aria-labelledby="addGroupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-custom text-right" dir="rtl">
                <div class="modal-header modal-header-custom d-flex justify-content-between align-items-center">
                    <h5 class="modal-title modal-title-custom" id="addGroupModalLabel">
                        <i class="mdi mdi-plus-circle-outline text-primary me-2"></i>
                        إضافة حلقة جديدة
                    </h5>
                    <button type="button" class="close ms-0" data-dismiss="modal" aria-label="Close" style="border: none; background: none; font-size: 1.5rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-body-custom">
                    <form method="POST" action="{{ route('management.groups.add') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="add_group_name" class="form-label-custom">اسم الحلقة</label>
                            <input type="text" class="form-control form-control-custom" id="add_group_name" name="group_name" placeholder="أدخل اسم الحلقة..." required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="add_courses_id" class="form-label-custom">الدورة التابعة لها</label>
                            <select class="form-control form-control-custom" id="add_courses_id" name="courses_id" required>
                                <option value="" disabled selected>اختر الدورة...</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">
                                        {{ $course->type == 1 ? 'دورة صيفية' : 'دورة شتوية' }} ({{ $course->start_date }})
                                    </option>
                                @endforeach
                            </select>
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

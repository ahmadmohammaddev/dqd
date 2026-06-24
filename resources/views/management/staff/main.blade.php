@extends('general.admin_master')

@section('admin')
    @include('general.components.flash')
    
    <style>
        /* Modern Scoped Styling for Staff Main Page */
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
            text-decoration: none !important;
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

        /* Action Button */
        .btn-action-custom {
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
        
        .btn-action-custom:hover {
            background-color: #3572EF;
            color: #ffffff !important;
            border-color: #3572EF;
            box-shadow: 0 4px 10px rgba(53, 114, 239, 0.15);
        }
    </style>

    <div class="row justify-content-center py-4">
        <div class="col-12 col-xl-11">
            <div class="card card-custom">
                <div class="card-custom-header">
                    <div class="title-area">
                        <div class="title-icon">
                            <i class="mdi mdi-teach"></i>
                        </div>
                        <h4 class="title">معلومات الأساتذة</h4>
                    </div>

                    <a href="{{ route('management.staff.required.data') }}" class="btn btn-add-custom">
                        <i class="mdi mdi-account-plus-outline"></i>
                        تسجيل أستاذ جديد
                    </a>
                </div>

                <div class="card-body p-0">
                    <div class="table-container">
                        <table class="table table-custom text-center">
                            <thead>
                                <tr>
                                    <th scope="col">الرقم التسلسلي</th>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">رقم الهاتف</th>
                                    <th scope="col">ملاحظات</th>
                                    <th scope="col">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($staff_info as $staff)
                                    <tr>
                                        <td>{{ $staff->id }}</td>
                                        <td>{{ $staff->staff_fn }} {{ $staff->staff_ln }}</td>
                                        <td>{{ $staff->phone_number }}</td>
                                        <td>
                                            @if ($staff->notes)
                                                {{ $staff->notes }}
                                            @else
                                                <span class="text-muted">لا يوجد</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('management.staff.profile.brief' , ['id' => $staff->id]) }}" class="btn-action-custom">
                                                <i class="mdi mdi-eye-outline"></i>
                                                عرض الملف
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
@endsection

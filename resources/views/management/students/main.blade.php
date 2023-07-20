@extends('general.admin_master')

@section('admin')
@include('general.components.flash')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-..." crossorigin="anonymous">
<div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    <h4 class="card-title">معلومات الطلاب</h4>
                  </div>
                  <div class="col-auto">
                    <a href="{{ route('management.student.required.data') }}" class="btn btn-primary">
                      <i class="bi bi-person-plus"></i> &nbsp; تسجيل طالب جديد
                    </a>
                  </div>
                </div>
              </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>الرقم التسلسلي</th>
                            <th>الاسم</th>
                            <th>رقم الهاتف</th>
                            <th>رقم الهاتف الثابت</th>
                            <th>تاريخ الميلاد</th>
                            <th>عنوان السكن</th>
                            <th>ملاحظات</th>
                            <th>العمليات</th>
                            <th>إضافة ولي أمر</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students_info as $student)
                        <tr>
                            <th  scope="row">{{ $student->id }}</th>
                            <td>{{ $student->student_fn }} {{ $student->student_ln }}</td>
                            <td>{{ $student->qualified_phone_number }}</td>
                            <td>{{ $student->home_number }}</td>
                            <td>{{ $student->birth }}</td>
                            <td>{{ $student->resident_address_id }}</td>
                            <td>
                                @if ($student->notes)
                                    {{ $student->notes }}
                                @else
                                    لا يوجد
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('management.student.profile.brief' , ['id' => $student->id]) }}" class="btn btn-primary">
                                    <i class="bi bi-eye"></i>
                                </a>

                            </td>
                            <td>
                                @php
                                @endphp
                                <a href="{{ route('management.parent.required.data' , ['id' => $student->id])}}" class="btn btn-success">
                                    <i class="bi bi-person-plus"></i> &nbsp; إضافة ولي أمر
                                </a>
                            </td>
                        </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

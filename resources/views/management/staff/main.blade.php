@extends('general.admin_master')

@section('admin')
@include('general.components.flash')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-..." crossorigin="anonymous">
<div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    <h4 class="card-title">معلومات الأساتذة</h4>
                  </div>
                  <div class="col-auto">
                    <a href="{{ route('management.staff.required.data') }}" class="btn btn-primary">
                      <i class="bi bi-person-plus"></i> &nbsp; تسجيل استاذ جديد
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
                            <th>ملاحظات</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staff_info as $staff)
                        <tr>
                            <th  scope="row">{{ $staff->id }}</th>
                            <td>{{ $staff->staff_fn }} {{ $staff->staff_ln }}</td>
                            <td>{{ $staff->phone_number }}</td>
                            <td>
                                @if ($staff->notes)
                                    {{ $staff->notes }}
                                @else
                                    لا يوجد
                                @endif
                            </td>
                            <td>
                                <a  href="{{ route('management.staff.profile.brief' , ['id' => $staff->id]) }}" class="btn btn-primary">
                                    <i class="bi bi-eye"></i>
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

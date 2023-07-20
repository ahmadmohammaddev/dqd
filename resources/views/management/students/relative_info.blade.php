@extends('general.admin_master')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('admin')

<x-student_sidebar_choices student_id="{{ $student_id}}"/>

    @include('general.components.flash')


    <form id="relative-form" method="POST" action="{{ route('management.student.relative.edit') }}">
        {{ csrf_field() }}
        <fieldset id="kh">

            <div class="row" style="width:75%">
                <div class="form-group col-lg-6">
                    <label for="relative_fn">الأسم<span style="color:red" class="required"> &nbsp *</span></label>
                    <input value={{ $relative_info->relative_fn }} type="text" class="form-control" id="relative_fn"
                        name="relative_fn" required>
                </div>

                <div class="form-group col-lg-6">
                    <label for="relative_ln">الكنية<span style="color:red" class="required"> &nbsp *</span></label>
                    <input value={{ $relative_info->relative_ln }} type="text" class="form-control" id="relative_ln"
                        name="relative_ln" required>
                </div>

            </div>


            <div class="row" style="width:75%">
                <div class="form-group col-lg-6">
                    <label for="phone_number">رقم الهاتف الجوال<span style="color:red" class="required"> &nbsp
                            *</span></label>
                    <input value={{ $relative_info->phone_number }} type="text" class="form-control" id="phone_number"
                        name="phone_number" required>
                </div>

                <div class="form-group col-lg-6">
                    <label for="work_phone_number">رقم الهاتف العمل</label>
                    <input type="text" class="form-control" value={{ $relative_info->work_phone_number }}
                        id="work_phone_number" name="work_phone_number">
                </div>
            </div>



            <div class="row" style="width:75%">


                <div class="form-group col-lg-6">
                    <label for="kinship">نوع القرابة<span style="color:red" class="required"> &nbsp *</span></label>
                    <select class="form-control" id="kinship" name="kinship" required>
                        <option value="{{ $kinship_info->first()->id ?? '' }}" selected>
                            {{ $kinship_info->first()->kinship_type ?? '' }}</option>
                        @foreach ($kinships as $kinship)
                            <option value="{{ $kinship->id }}">{{ $kinship->kinship_type }}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group col-lg-6">
                    <label for="marital_status">الحالة الزوجية<span style="color:red" class="required"> &nbsp
                            *</span></label>
                    <select class="form-control" id="marital_status" name="marital_status" required>
                        @if ($relative_info->first()->marital_status == 1)
                            <option value="1" selected>متزوج</option>
                            <option value="0">أعزب</option>
                        @else
                            <option value="1">متزوج</option>
                            <option value="0" selected>أعزب</option>
                        @endif
                    </select>
                </div>
            </div>


            <div class="row" style="width:75%">
                <div class="form-group col-lg-6">
                    <label for="resident_address_id">عنوان الإقامة الحالي: <span style="color:red" class="required"> &nbsp
                            *</span>
                    </label>
                    <select class="form-control" id="resident_address_id" name="resident_address_id" required>
                        <option value="{{ $relative_info->resident_address_id ?? '' }}" selected>
                            {{ $relative_info->resident_address ?? '' }}</option>

                        @foreach ($neighborhoods as $resident_address)
                            <option value="{{ $resident_address->id }}">{{ $resident_address->neighborhood_name }}
                            </option>
                        @endforeach
                    </select>


                </div>


                <div class="form-group col-lg-6">
                    <label for="educational_levels_id">المستوى العلمي<span style="color:red" class="required"> &nbsp
                            *</span></label>
                    <select class="form-control" id="educational_levels_id" name="educational_levels_id" required>
                        <option value="{{ $relative_info->educational_levels_id ?? '' }}" selected>
                            {{ $relative_info->educational_level ?? '' }}</option>

                        @foreach ($educational_levels as $educational_level)
                            <option value="{{ $educational_level->id }}">{{ $educational_level->educational_level }}
                            </option>
                        @endforeach
                    </select>



                </div>

            </div>

            <div class="row" style="width:75%">

                <div class="form-group col-lg-6">
                    <label for="job_id">العمل<span style="color:red" class="required"> &nbsp *</span></label>
                    <select class="form-control" id="job_id" name="job_id" required>
                        <option value="{{ $relative_info->job_id ?? '' }}" selected>
                            {{ $relative_info->job_name ?? '' }}</option>
                        @foreach ($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->job_type }}</option>
                        @endforeach
                    </select>
                </div>




                <div class="form-group col-lg-6">
                    <label for="work_address_id">عنوان العمل</label>
                    <select class="form-control" id="work_address_id" name="work_address_id">
                        <option value="{{ $relative_info->work_address_id ?? '' }}" selected>
                            {{ $relative_info->work_address_name ?? '' }}</option>
                        @foreach ($neighborhoods as $work_address)
                            <option value="{{ $work_address->id }}">{{ $work_address->neighborhood_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>


            <div class="row" style="width:75%">
                <div class="form-group col-lg-6">
                    <label for="notes">ملاحظات</label>
                    <textarea class="form-control" id="notes" name="notes"> {{ $relative_info->notes }}</textarea>
                </div>
            </div>


        </fieldset>

        <input type="hidden" name="student_id" value={{ $student_id }}>
        <input type="hidden" name="relative_id" value={{ $relative_info->id }}>

        <button type="submit" class="btn btn-info">تسجيل</button>


    </form>
@endsection

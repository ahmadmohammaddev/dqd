@extends('general.admin_master')

@section('admin')
    <h1>تعديل بيانات الاستاذ</h1>
    <form id="staffForm" method="post" action="{{ route('management.staff.profile.edit')}}">
        @csrf
        @include('general.components.flash')

        <div class="row">
            <div class="form-group col-lg-3">
                <label for="fn">الأسم<span style="color:red" class="required"> &nbsp *</span></label>
                <input type="text" class="form-control" id="fn" name="fn" value="{{ $staff_info->first()->staff_fn }}" required>
                <div class="invalid-feedback">
                    Please enter first name.
                </div>
            </div>
            <div class="form-group col-lg-3">
                <label for="ln">الكنية<span style="color:red" class="required"> &nbsp *</span></label>
                <input type="text" class="form-control" id="ln" name="ln" value="{{ $staff_info->first()->staff_ln }}" required>
                <div class="invalid-feedback">
                    Please enter last name.
                </div>
            </div>

            <div class="form-group col-lg-3">
                <label for="job_id">العمل<span style="color:red" class="required"> &nbsp *</span></label>
                <select class="form-control" id="job_id" name="job_id" required>
                    <option value="{{ $staff_info->first()->job_id }}" selected>{{ $staff_info->first()->job_type_name }}</option>
                    @foreach ($jobs as $job)
                        <option value="{{ $job->id }}">{{ $job->job_type }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group col-lg-3">
                <label for="educational_levels_id">المستوى التعليمي<span style="color:red" class="required"> &nbsp *</span></label>
                <select class="form-control" id="educational_levels_id" name="educational_levels_id" required>
                    <option value="{{ $staff_info->first()->educational_levels_id }}" selected>{{ $staff_info->first()->educational_level_name }}</option>
                    @foreach ($educational_levels as $educational_level)
                        <option value="{{ $educational_level->id }}">{{ $educational_level->educational_level }}</option>
                    @endforeach
                </select>
            </div>

        </div>


        <div class="row">

            <div class="form-group col-lg-6">
                <label for="birth">الميلاد <span style="color:red" class="required"> &nbsp *</span></label>
                <input type="date" class="form-control" id="birth" name="birth" value="{{ $staff_info->first()->birth }}" required>
                <div class="invalid-feedback">
                    Please enter birth date.
                </div>
            </div>


            <div class="form-group col-lg-6">
                <label for="chronic_diseases_id">الأمراض المزمنة: <span style="color:red" class="required"> &nbsp *</span></label>
                <select class="form-control" id="chronic_diseases_id" name="chronic_diseases_id" required>
                    <option value="{{ $staff_info->first()->chronic_diseases_id }}" selected>{{ $staff_info->first()->chronic_disease_name }}</option>
                    @foreach ($chronic_diseases as $chronic_disease)
                        <option value="{{ $chronic_disease->id }}">{{ $chronic_disease->chronic_disease_name }}</option>
                    @endforeach
                </select>
            </div>



        </div>

        <div class="row">
            <div class="form-group col-lg-4">
                <label for="home_number">رقم هاتف المنزل</label>
                <input type="text" class="form-control" id="home_number" name="home_number" value="{{ $staff_info->first()->home_number }}">
                <div class="invalid-feedback">
                    Please enter home number.
                </div>
            </div>
            <div class="form-group col-lg-4">
                <label for="phone_number">رقم الموبايل <span style="color:red" class="required"> &nbsp *</span></label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $staff_info->first()->phone_number }}" required>
                <div class="invalid-feedback">
                    Please enter phone number.
                </div>
            </div>
            <div class="form-group col-lg-4">
                <label for="work_phone_number">رقم هاتف العمل</label>
                <input type="text" class="form-control" id="work_phone_number" name="work_phone_number" value="{{ $staff_info->first()->work_phone_number }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-4">
                <label for="home_address_id">عنوان السكن الأصلي: <span style="color:red" class="required"> &nbsp *</span></label>
                <select class="form-control" id="home_address_id" name="home_address_id" required>
                    <option value="{{ $staff_info->first()->home_address_id }}" selected>{{ $staff_info->first()->home_address }}</option>
                    @foreach ($neighborhoods as $home_address)
                        <option value="{{ $home_address->id }}">{{ $home_address->neighborhood_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-lg-4">
                <label for="resident_address_id">عنوان الإقامة الحالي: <span style="color:red" class="required"> &nbsp *</span></label>
                <select class="form-control" id="resident_address_id" name="resident_address_id" required>
                    <option value="{{ $staff_info->first()->resident_address_id }}" selected>{{ $staff_info->first()->resident_address }}</option>
                    @foreach ($neighborhoods as $resident_address)
                        <option value="{{ $resident_address->id }}">{{ $resident_address->neighborhood_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-lg-4">
                <label for="work_address_id">عنوان العمل: <span style="color:red" class="required"> &nbsp *</span></label>
                <select class="form-control" id="work_address_id" name="work_address_id" required>
                    <option value="{{ $staff_info->first()->work_address_id }}" selected>{{ $staff_info->first()->work_address }}</option>
                    @foreach ($neighborhoods as $resident_address)
                        <option value="{{ $resident_address->id }}">{{ $resident_address->neighborhood_name }}</option>
                    @endforeach
                </select>
            </div>


        </div>






        <div class="row">

            <div class="form-group col-lg-3">
                <label for="is_mother_alive"> هل الأم على قيد الحياة? <span style="color:red" class="required"> &nbsp *</span></label>
                <select class="form-control" id="is_mother_alive" name="is_mother_alive">
                    <option value="1" @if($staff_info->first()->is_mother_alive == 1) selected @endif>نعم</option>
                    <option value="0" @if($staff_info->first()->is_mother_alive == 0) selected @endif>لا</option>
                </select>
                <div class="invalid-feedback">
                    Please select whether mother is alive or not.
                </div>
            </div>
            <div class="form-group col-lg-3">
                <label for="is_father_alive">هل الأب على قيد الحياة? <span style="color:red" class="required"> &nbsp *</span></label>
                <select class="form-control" id="is_father_alive" name="is_father_alive">
                    <option value="1" @if($staff_info->first()->is_father_alive == 1) selected @endif>نعم</option>
                    <option value="0" @if($staff_info->first()->is_father_alive == 0) selected @endif>لا</option>
                </select>
            </div>

            <div class="form-group col-lg-3">
                <label for="marital_status">الحالة الزوجية ؟ <span style="color:red" class="required"> &nbsp *</span></label>
                <select class="form-control" id="marital_status" name="marital_status">
                    <option value="1" @if($staff_info->first()->marital_status == 1) selected @endif>متزوج</option>
                    <option value="0" @if($staff_info->first()->marital_status == 0) selected @endif>أعزب</option>
                </select>
            </div>
            <div class="form-group col-lg-3">
                <label for="notes">ملاحظات</label>
                <textarea class="form-control" id="notes" name="notes">{{ $staff_info->first()->notes }}</textarea>
            </div>

            <input type="hidden" name="id" value="{{ $staff_info->first()->id }}">

        </div>




        <button type="submit" class="btn btn-info">تعديل</button>

    </form>
@endsection

@extends('general.admin_master')

@section('admin')
    <h1>تسجيل استاذ جديد</h1>
    <form id="staffForm" method="POST" action="{{ route('management.staff.register') }}">
        @csrf
        @include('general.components.flash')

        <div class="row">
            <div class="form-group col-lg-3">
                <label for="fn">الأسم<span style="color:red" class="required"> &nbsp *</span></label>
                <input type="text" class="form-control" id="fn" name="fn" required>
                <div class="invalid-feedback">
                    Please enter first name.
                </div>
            </div>
            <div class="form-group col-lg-3">
                <label for="ln">الكنية<span style="color:red" class="required"> &nbsp *</span></label>
                <input type="text" class="form-control" id="ln" name="ln" required>
                <div class="invalid-feedback">
                    Please enter last name.
                </div>
            </div>

            <div class="form-group col-lg-3">
                <label for="job_id">العمل<span style="color:red" class="required"> &nbsp
                        *</span></label>
                <select class="form-control" id="job_id" name="job_id">
                    <option value="3" selected>{{ $jobs[2]->job_type }}</option>
                    @foreach ($jobs as $job)
                        <option value="{{ $job->id }}">{{ $job->job_type }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group col-lg-3">
                <label for="educational_levels_id">المستوى التعليمي<span style="color:red" class="required"> &nbsp
                        *</span></label>
                <select class="form-control" id="educational_levels_id" name="educational_levels_id">
                    <option value="3" selected>{{ $educational_levels[2]->educational_level }}</option>
                    @foreach ($educational_levels as $educational_level)
                        <option value="{{ $educational_level->id }}">{{ $educational_level->educational_level }}</option>
                    @endforeach
                </select>
            </div>

        </div>


        <div class="row">

            <div class="form-group col-lg-6">
                <label for="birth">الميلاد <span style="color:red" class="required"> &nbsp *</span></label>
                <input type="date" class="form-control" id="birth" name="birth" required>
                <div class="invalid-feedback">
                    Please enter birth date.
                </div>
            </div>


            <div class="form-group col-lg-6">
                <label for="chronic_diseases_id">الأمراض المزمنة: <span style="color:red" class="required"> &nbsp
                        *</span></label>
                <select class="form-control" id="chronic_diseases_id" name="chronic_diseases_id">
                    @foreach ($chronic_diseases as $chronic_disease)
                        <option value="{{ $chronic_disease->id }}">{{ $chronic_disease->chronic_disease_name }}</option>
                    @endforeach
                </select>
            </div>



        </div>

        <div class="row">
            <div class="form-group col-lg-4">
                <label for="home_number">رقم هاتف المنزل</label>
                <input type="text" class="form-control" id="home_number" name="home_number">
                <div class="invalid-feedback">
                    Please enter home number.
                </div>
            </div>
            <div class="form-group col-lg-4">
                <label for="phone_number">رقم الموبايل <span style="color:red" class="required"> &nbsp
                        *</span></label>
                <input type="text" class="form-control" id="phone_number" name="phone_number">
                <div class="invalid-feedback">
                    Please enter phone number.
                </div>
            </div>
            <div class="form-group col-lg-4">
                <label for="work_phone_number">رقم هاتف العمل</label>
                <input type="text" class="form-control" id="work_phone_number" name="work_phone_number">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-4">
                <label for="home_address_id">عنوان السكن الأصلي: <span style="color:red" class="required"> &nbsp
                        *</span>
                </label>
                <select class="form-control" id="home_address_id" name="home_address_id" required>
                    <option value="3" selected>{{ $neighborhoods[2]->neighborhood_name }}</option>
                    @foreach ($neighborhoods as $home_address)
                        <option value="{{ $home_address->id }}">{{ $home_address->neighborhood_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-lg-4">
                <label for="resident_address_id">عنوان الإقامة الحالي: <span style="color:red" class="required"> &nbsp
                        *</span>
                </label>
                <select class="form-control" id="resident_address_id" name="resident_address_id" required>
                    <option value="3" selected>{{ $neighborhoods[2]->neighborhood_name }}</option>
                    @foreach ($neighborhoods as $resident_address)
                        <option value="{{ $resident_address->id }}">{{ $resident_address->neighborhood_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-lg-4">
                <label for="work_address_id">عنوان العمل: <span style="color:red" class="required"> &nbsp
                        *</span>
                </label>
                <select class="form-control" id="work_address_id" name="work_address_id" required>
                    <option value="3" selected>{{ $neighborhoods[2]->neighborhood_name }}</option>
                    @foreach ($neighborhoods as $resident_address)
                        <option value="{{ $resident_address->id }}">{{ $resident_address->neighborhood_name }}</option>
                    @endforeach
                </select>
            </div>


        </div>






        <div class="row">

            <div class="form-group col-lg-3">
                <label for="is_mother_alive"> هل الأم على قيد الحياة? <span style="color:red" class="required"> &nbsp
                        *</span></label>
                <select class="form-control" id="is_mother_alive" name="is_mother_alive">
                    <option value="1" selected>نعم</option>
                    <option value="0">لا</option>
                </select>
                <div class="invalid-feedback">
                    Please select whether mother is alive or not.
                </div>
            </div>
            <div class="form-group col-lg-3">
                <label for="is_father_alive">هل الأب على قيد الحياة? <span style="color:red" class="required"> &nbsp
                        *</span></label>
                <select class="form-control" id="is_father_alive" name="is_father_alive">
                    <option value="1" selected>نعم</option>
                    <option value="0">لا</option>
                </select>
            </div>

            <div class="form-group col-lg-3">
                <label for="marital_status">الحالة الزوجية ؟ <span style="color:red" class="required"> &nbsp
                        *</span></label>
                <select class="form-control" id="marital_status" name="marital_status">
                    <option value="1">متزوج</option>
                    <option value="0">أعزب</option>
                </select>
            </div>
            <div class="form-group col-lg-3">
                <label for="notes">ملاحظات</label>
                <textarea class="form-control" id="notes" name="notes"></textarea>
            </div>

        </div>




        <button type="submit" class="btn btn-info">تسجيل</button>

    </form>
@endsection

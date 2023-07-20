@extends('general.admin_master')

@section('admin')


    <h1>تسجيل طالب جديد</h1>
    <form id="studentForm" method="POST" action="{{ route('management.student.register') }}">
        @csrf
        @include('general.components.flash')

        <div class="row">
            <div class="form-group col-6">
                <label for="fn">الأسم<span style="color:red" class="required"> &nbsp *</span></label>
                <input type="text" class="form-control" id="fn" name="fn" required>
                <div class="invalid-feedback">
                    Please enter first name.
                </div>
            </div>
            <div class="form-group col-6">
                <label for="ln">الكنية<span style="color:red" class="required"> &nbsp *</span></label>
                <input type="text" class="form-control" id="ln" name="ln" required>
                <div class="invalid-feedback">
                    Please enter last name.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-4">
                <label for="home_number">رقم هاتف المنزل</label>
                <input type="text" class="form-control" id="home_number" name="home_number">
                <div class="invalid-feedback">
                    Please enter home number.
                </div>
            </div>
            <div class="form-group col-4">
                <label for="phone_number">رقم موبايل الطالب</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number">
                <div class="invalid-feedback">
                    Please enter phone number.
                </div>
            </div>
            <div class="form-group col-4">
                <label for="qualified_phone_number">الرقم المعتمد للتواصل <span style="color:red" class="required"> &nbsp
                        *</span></label>
                <input type="text" class="form-control" id="qualified_phone_number" name="qualified_phone_number"
                    required>
                <div class="invalid-feedback">
                    Please enter qualified phone number.
                </div>
            </div>
        </div>



        <div class="row">
            <div class="form-group col-4">
                <label for="school_name">اسم المدرسة</label>
                <input type="text" class="form-control" id="school_name" name="school_name">
                <div class="invalid-feedback">
                    Please enter school name.
                </div>
            </div>

            <div class="form-group col-4">
                <label for="birth">الميلاد <span style="color:red" class="required"> &nbsp *</span></label>
                <input type="date" class="form-control" id="birth" name="birth" required>
                <div class="invalid-feedback">
                    Please enter birth date.
                </div>
            </div>

            <div class="form-group col-4">
                <label for="school_grades_id">الصف :<span style="color:red" class="required"> &nbsp *</span></label>
                <select class="form-control" id="school_grades_id" name="school_grades_id" required>
                    <option value="1" selected>{{ $school_grades[0]->school_grade }}</option>
                    @foreach ($school_grades as $school_grade)
                        <option value="{{ $school_grade->id }}">{{ $school_grade->school_grade }}</option>
                    @endforeach
                </select>
            </div>
        </div>



        <div class="row">

            <div class="form-group col-4">
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
            <div class="form-group col-4">
                <label for="is_father_alive">هل الأب على قيد الحياة? <span style="color:red" class="required"> &nbsp
                        *</span></label>
                <select class="form-control" id="is_father_alive" name="is_father_alive">
                    <option value="1" selected>نعم</option>
                    <option value="0">لا</option>
                </select>
            </div>

            <div class="form-group col-4">
                <label for="parent_marital_status">هل الوالدين مطلقان ؟ <span style="color:red" class="required"> &nbsp
                        *</span></label>
                <select class="form-control" id="parent_marital_status" name="parent_marital_status">
                    <option value="1">نعم</option>
                    <option value="0" selected>لا</option>
                </select>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-6">
                <label for="prohibited_medicines_id">الأدوية المحظورة: <span style="color:red" class="required"> &nbsp
                        *</span></label>
                <select class="form-control" id="prohibited_medicines_id" name="prohibited_medicines_id">
                    @foreach ($common_medicines as $prohibited_medicine)
                        <option value="{{ $prohibited_medicine->id }}">{{ $prohibited_medicine->medicine_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-6">
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
            <div class="form-group col-4">
                <label for="home_address_id">عنوان السكن الأصلي: <span style="color:red" class="required"> &nbsp
                        *</span>
                </label>
                <select class="form-control" id="home_address_id" name="home_address_id" required>
                    <option value="4" selected>{{ $neighborhoods[3]->neighborhood_name }}</option>
                    @foreach ($neighborhoods as $home_address)
                        <option value="{{ $home_address->id }}">{{ $home_address->neighborhood_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-4">
                <label for="resident_address_id">عنوان الإقامة الحالي: <span style="color:red" class="required"> &nbsp
                        *</span>
                </label>
                <select class="form-control" id="resident_address_id" name="resident_address_id" required>
                    <option value="4" selected>{{ $neighborhoods[3]->neighborhood_name }}</option>
                    @foreach ($neighborhoods as $resident_address)
                        <option value="{{ $resident_address->id }}">{{ $resident_address->neighborhood_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-4">
                <label for="notes">ملاحظات</label>
                <textarea class="form-control" id="notes" name="notes"></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-info">تسجيل</button>

    </form>
@endsection

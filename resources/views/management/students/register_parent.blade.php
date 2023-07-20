@extends('general.admin_master')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('admin')
    @include('general.components.flash')


    <form id="relative-form" method="POST" action="{{ route('management.student.parent.register') }}"   >
        {{ csrf_field() }}

        <fieldset id="kh">
            <div class="row">
                <div class="form-group col-4">
                    <label for="relative_fn">الأسم<span style="color:red" class="required"> &nbsp *</span></label>
                    <input type="text" class="form-control" id="relative_fn" name="relative_fn" required>
                </div>

                <div class="form-group col-4">
                    <label for="relative_ln">الكنية<span style="color:red" class="required"> &nbsp *</span></label>
                    <input type="text" class="form-control" id="relative_ln" name="relative_ln" required>
                </div>

                <div class="form-group col-4">
                    <label for="phone_number">رقم الهاتف الجوال<span style="color:red" class="required"> &nbsp *</span></label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                </div>

            </div>


            <div class="row">


                <div class="form-group col-3">
                    <label for="kinship">نوع القرابة<span style="color:red" class="required"> &nbsp *</span></label>
                    <select class="form-control" id="kinship" name="kinship" required>
                      @foreach ($kinships as $kinship)
                        <option value="{{ $kinship->id }}">{{ $kinship->kinship_type }}</option>
                      @endforeach
                    </select>
                  </div>



                <div class="form-group col-3">
                    <label for="marital_status">الحالة الزوجية<span style="color:red" class="required"> &nbsp
                            *</span></label>
                    <select class="form-control" id="marital_status" name="marital_status" required>
                        <option value="1">متزوج</option>
                        <option value="0">أعزب</option>
                    </select>
                </div>

                <div class="form-group col-3">
                    <label for="resident_address_id">عنوان الإقامة الحالي: <span style="color:red" class="required"> &nbsp
                            *</span>
                    </label>
                    <select class="form-control" id="resident_address_id" name="resident_address_id" required>
                        @foreach ($neighborhoods as $resident_address)
                            <option value="{{ $resident_address->id }}">{{ $resident_address->neighborhood_name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-3">
                    <label for="educational_levels_id">المستوى العلمي<span style="color:red" class="required"> &nbsp *</span></label>
                    <select class="form-control" id="educational_levels_id" name="educational_levels_id" required>
                          @foreach ($educational_levels as $educational_level)
                        <option value="{{ $educational_level->id }}">{{ $educational_level->educational_level }}</option>
                      @endforeach
                    </select>
                  </div>



            </div>

            <div class="row">

                <div class="form-group col-3">
                    <label for="job_id">العمل<span style="color:red" class="required"> &nbsp *</span></label>
                    <select class="form-control" id="job_id" name="job_id" required>
                      @foreach ($jobs as $job)
                        <option value="{{ $job->id }}">{{ $job->job_type }}</option>
                      @endforeach
                    </select>
                  </div>




                <div class="form-group col-3">
                    <label for="work_address_id">عنوان العمل</label>
                    <select class="form-control" id="work_address_id" name="work_address_id">
                        <option value="">يرجى الأختيار</option>
                        @foreach ($neighborhoods as $resident_address)
                            <option value="{{ $resident_address->id }}">{{ $resident_address->neighborhood_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-3">
                    <label for="work_phone_number">رقم الهاتف العمل</label>
                    <input type="text" class="form-control" id="work_phone_number" name="work_phone_number">
                </div>




                <div class="form-group col-3">
                    <label for="notes">ملاحظات</label>
                    <textarea class="form-control" id="notes" name="notes"></textarea>
                </div>

            </div>
        </fieldset>
        <input type="hidden" name="student_id" value={{ $student_id }}>
        <button type="submit" class="btn btn-info">تسجيل</button>


    </form>




@endsection






<script>
    $(document).ready(function() {
        $('#toggle-button-1').change(function() {
            if ($(this).is(':checked')) {
                $('kh').removeAttr('disabled');
            } else {
                $('kh').attr('disabled', 'disabled');
            }
        });
    });


    $(document).ready(function() {
        $('#welcomeModal').modal('show');
    });

</script>

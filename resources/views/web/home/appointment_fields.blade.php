<div class="row">
    <div class="form-group col-sm-6 mb-4 fs-4">
        {{ Form::label('gender', __('messages.patient_appointment').(':'),['class'=>'font-weight-bold fw-bolder fs-4 mb-2 text-gray-700']) }}
        <br>
        <span class="form-check form-check-custom form-check-solid is-valid form-check-sm">
                <label class="form-label fs-6 fw-bolder text-gray-700 m-3">{{ __('messages.new_patient') }}</label>&nbsp;&nbsp;
                {{ Form::radio('patient_type', '1', true, ['class' => 'form-check-input new-patient-radio']) }} &nbsp;
                <label class="form-label fs-6 fw-bolder text-gray-700 m-3">{{ __('messages.old_patient') }}</label>
                {{ Form::radio('patient_type', '2', false, ['class' => 'form-check-input old-patient-radio']) }}
            </span>
    </div>
    <div class="form-group col-sm-6 patient-email-div mb-4">
        {{ Form::label('email', __('messages.user.email').(':'),['class'=>'font-weight-bold fw-bolder fs-4 mb-2 text-gray-700']) }}
        <span
            class="text text-danger fs-2">*</span>
        {{ Form::email('email', null, ['class' => 'form-control form-control-solid old-patient-email','autocomplete' => 'off','required']) }}
    </div>
    <div class="form-group col-sm-6 old-patient d-none mb-4">
        {{ Form::label('patient_id', __('messages.appointment.patient_name').(':'),['class'=>'font-weight-bold fw-bolder fs-4 mb-2 text-gray-700']) }}
        <span class="text text-danger fs-2">*</span>
        {{ Form::text('patient_name', null, ['class' => 'form-control form-control-solid', 'id' => 'patientName', 'autocomplete' => 'off', 'required', 'readonly']) }}
        {{ Form::hidden('patient_id',null,['id'=>'patient']) }}
    </div>
    <div class="form-group col-sm-3 first-name-div mb-4">
        {{ Form::label('first_name', __('messages.user.first_name').(':'),['class'=>'font-weight-bold fw-bolder fs-4 mb-2 text-gray-700']) }}
        <span
            class="text text-danger fs-2">*</span>
        {{ Form::text('first_name', null, ['class' => 'form-control form-control-solid','autocomplete' => 'off','required','id'=>'firstName']) }}
    </div>
    <div class="form-group col-sm-3 last-name-div mb-4">
        {{ Form::label('last_name', __('messages.user.last_name').(':'),['class'=>'font-weight-bold fw-bolder fs-4 mb-2 text-gray-700']) }}
        <span
            class="text text-danger fs-2">*</span>
        {{ Form::text('last_name', null, ['class' => 'form-control form-control-solid','autocomplete' => 'off','required','id'=>'lastName']) }}
    </div>
    <div class="form-group col-md-6 gender-div mb-4 fs-4">
        {{ Form::label('gender', __('messages.user.gender').':', ['class'=>'font-weight-bold fw-bolder required fs-4 mb-2 text-gray-700']) }}
        <br>
        <span class="form-check form-check-custom form-check-solid is-valid form-check-sm">
                <label class="form-label fs-6 fw-bolder text-gray-700 m-3">{{ __('messages.user.male') }}</label>&nbsp;&nbsp;
                {{ Form::radio('gender', '0', true, ['class' => 'form-check-input', 'id' => 'flexRadioSm']) }} &nbsp;
                <label class="form-label fs-6 fw-bolder text-gray-700 m-3">{{ __('messages.user.female') }}</label>
                {{ Form::radio('gender', '1', false, ['class' => 'form-check-input', 'id' => 'flexRadioSm']) }}
            </span>
    </div>
    <div class="form-group col-md-3 password-div mb-4">
        {{ Form::label('password', __('messages.user.password').':', ['class'=>'font-weight-bold fw-bolder fs-4 mb-2 text-gray-700']) }}
        <span
            class="text text-danger fs-2">*</span>
        {{ Form::password('password', ['class' => 'form-control form-control-solid','required','min' => '6','max' => '10','id'=>'password']) }}
    </div>
    <div class="form-group col-md-3 confirm-password-div mb-4">
        {{ Form::label('password_confirmation', __('messages.user.password_confirmation').':', ['class'=>'font-weight-bold fw-bolder fs-4 mb-2 text-gray-700']) }}
        <span
                class="text text-danger fs-2">*</span>
        {{ Form::password('password_confirmation', ['class' => 'form-control form-control-solid','required','min' => '6','max' => '10','id'=>'confirmPassword']) }}
    </div>


    <div class="form-group col-sm-6 mb-4">
        {{ Form::label('department_id', __('messages.appointment.doctor_department').(':'),['class'=>'font-weight-bold fw-bolder fs-4 mb-2 text-gray-700']) }}
        <span class="text text-danger fs-2">*</span>
        {{ Form::select('department_id',$departments, null, ['class' => 'form-select form-select-solid', 'id' => 'departmentId', 'placeholder'=>'Select Department','required']) }}
    </div>
    <div class="form-group col-sm-6 mb-4">
        {{ Form::label('doctor_id', __('messages.appointment.doctor').(':'),['class'=>'font-weight-bold fw-bolder fs-4 mb-2 text-gray-700']) }}
        <span
                class="text text-danger fs-2">*</span>
        {{ Form::select('doctor_id',[], null, ['class' => 'form-select form-select-solid','autocomplete' => 'off', 'id' => 'doctorId', 'placeholder'=>'Select Doctor','required']) }}
    </div>
    <div class="form-group col-sm-6 mb-4">
        {{ Form::label('opd_date', __('messages.investigation_report.date').(':'),['class'=>'font-weight-bold fw-bolder fs-4 mb-2 text-gray-700']) }}
        <span
                class="text text-danger fs-2">*</span>
        {{ Form::text('opd_date', null, ['class' => 'form-control form-control-solid','autocomplete' => 'off','id' => 'opd_date','required']) }}
    </div>
    <div class="form-group col-sm-12 mb-4">
        {{ Form::label('problem', __('messages.appointment.description').(':'),['class'=>'font-weight-bold fw-bolder fs-4 mb-2 text-gray-700']) }}
        {{ Form::textarea('problem', null, ['class' => 'form-control form-control-solid','autocomplete' => 'off', 'rows' => 3]) }}
    </div>
    <div align="left" class="form-group col-sm-12 mb-4">
        <div class="doctor-schedule" style="display: none">
            <i class="fas fa-calendar-alt"></i>
            <span class="day-name"></span>
            <span class="schedule-time"></span>
        </div>
        <strong class="error-message" style="display: none"></strong>
        <div class="slot-heading mb-4">
            <strong class="available-slot-heading" style="display: none">{{ __('messages.available_slots') }}:</strong>
        </div>
        <div class="row">
            <div class="available-slot form-group col-sm-10">
            </div>
        </div>
        <div class="color-information" align="right" style="display: none">
            <span><i class="fa fa-circle fa-xs" aria-hidden="true"> </i> {{ __('messages.bed.not_available') }}</span>
        </div>
    </div>
    <div class="form-group col-sm-6 pl-3 mb-5">
        {!! Form::submit(__('messages.common.save'), ['class' => 'btn btn-sm btn-danger btn-flat send-enquiry-btn fs-4 fw-bolder','id' => 'btnSave']) !!}
    </div>
</div>

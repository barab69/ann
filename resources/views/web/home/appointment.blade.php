@extends('web.layouts.front')
@section('title')
    {{ __('messages.appointments') }}
@endsection
@section('page_css')
    <link rel="stylesheet" href="{{ asset('web/css/animate.css') }}">
    <link href="{{ mix('assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center appointment-title">{{__('messages.make_an_appointment')}}</h2>
                <div style="height:50px;">&nbsp;</div>
                <div class="alert alert-danger" id="validationErrorsBox" style="display: none"></div>
                {{ Form::open(['id' => 'appointmentForm']) }}
                @include('web.home.appointment_fields')
                {{ Form::close() }}
            </div>
        </div>
        @include('appointments.templates.appointment_slot')
    </div>
@endsection
@section('page_scripts')
    <script>
        let doctorDepartmentUrl = "{{ route('appointment.doctor.list') }}";
        let appointmentSaveUrl = "{{ route('web.appointments.store') }}";
        let doctorScheduleList = "{{ url('appointment-doctor-schedule-list') }}";
        let isEdit = false;
        let isCreate = true;
        let getBookingSlot = "{{ route('appointment.get.booking.slot') }}";
    </script>
    <script src="{{ mix('assets/js/custom/custom.js') }}"></script>
    <script src="{{ asset('web/js/wow.min.js') }}"></script>
    <script src="{{mix('assets/js/web/appointment.js')}}"></script>
@endsection

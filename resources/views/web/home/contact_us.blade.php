@extends('web.layouts.front')
@section('title')
    {{ __('messages.contact_us') }}
@endsection
@section('page_css')
    <link rel="stylesheet" href="{{ asset('web/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/int-tel/css/intlTelInput.css') }}">
@endsection
@php
    $enquiry = request()->query('enquiry');
@endphp
@section('content')
    <h1 class="text-center contact-heading mt-8">{{ __('messages.contact_us') }}</h1>
    <div class="container">
        <div class="row justify-content-center contact-form">
            <div class="col-md-8 mx-auto my-15">
                <form method="post" id="enquiryCreateForm" action="{{ route('send.enquiry') }}">
                    @csrf
                    @include('flash::message')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row mb-md-3 mb-sm-1">
                        <div class="col-md-12 mb-5">
                            <input type="text"
                                   class="form-control form-control-solid {{ $errors->has('full_name')?'is-invalid':'' }}"
                                   name="full_name" value="{{ old('full_name') }}"
                                   placeholder="Full Name" required>
                        </div>
                        <div class="col-md-12 mb-5">
                            <input type="email"
                                   class="form-control form-control-solid {{ $errors->has('email')?'is-invalid':'' }}"
                                   name="email" value="{{ old('email') }}"
                                   placeholder="Email" required>
                        </div>
                        <div class="col-md-12 mb-5">
                            <input type="tel"
                                   class="form-control form-control-solid {{ $errors->has('contact_no')?'is-invalid':'' }}"
                                   id="phoneNumber" name="contact_no" value="{{ old('contact_no') }}"
                                   placeholder="Contact No" required
                                   onkeyup='if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")'>
                            {{ Form::hidden('prefix_code',null,['id'=>'prefix_code']) }}
                        </div>
                        <span id="valid-msg" class="hide">✓ Valid</span>
                        <span id="error-msg" class="hide"></span>
                        <div class="col-md-12 mb-5">
                            <select id="type" name="type"
                                    class="form-select form-select-solid {{ $errors->has('type')?'is-invalid':'' }}">
                                <option value="1">General Inquiry</option>
                                <option value="2">Feedback/Suggestions</option>
                                <option value="3">Residential Care</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-5">
                                    <textarea name="message"
                                              class="min-height custom-height form-control form-control-solid {{ $errors->has('message')?'is-invalid':'' }}"
                                              placeholder="Message" required>{{ old('message') }}</textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" id="btnContact"
                                    class="btn btn-danger btn-flat send-enquiry-btn fw-bolder"> {{ __('messages.enquiry.send_enquiry') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24"/>
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1"/>
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                              fill="#000000" fill-rule="nonzero"/>
					</g>
				</svg>
			</span>
    </div>
@endsection
@section('page_scripts')
    <script>
        let utilsScript = "{{asset('assets/js/int-tel/js/utils.min.js')}}";
        let phoneNo = "{{ old('prefix_code').old('contact_no') }}";
        let isEdit = false;
    </script>
    <script src="{{ asset('assets/js/int-tel/js/intlTelInput.min.js') }}"></script>
    <script src="{{ asset('assets/js/int-tel/js/utils.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/phone-number-country-code.js') }}"></script>
    <script>
        $('#enquiryCreateForm').submit(function () {
            if ($('#error-msg').text() !== '') {
                $('#phoneNumber').focus();
                return false;
            }
        });
    </script>
    <script src="{{ asset('web/js/wow.min.js') }}"></script>
@endsection

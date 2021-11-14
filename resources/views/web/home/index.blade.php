@extends('web.layouts.front')
@section('title')
    {{ __('web.home') }}
@endsection
@section('page_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/aos.css") }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lg-transitions.css') }}">
    {{--    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}"/>--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/>
@endsection
@section('content')
    {{-- header container starts --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="landing-header">
                    <div class="row">
                        <div class="col-lg-6 order-lg-2 col-12">
                            <div class="header_image">
                                <img src="{{ asset('web/img/header-img.png') }}">
                            </div>
                        </div>
                        <div class="col-lg-6 header-text order-lg-1 col-12">
                            <p class="welcome-text mb-10 wow fadeInUp" data-aos="fade-up"
                               data-wow-duration="0.4s">{{ __('web.welcome_to') }} <br> <span
                                    class="heading-name">{{ __('web.infyhms') }}</span> <span
                                    class="heading-text">{{ __('web.manage_your_hospital_day_to_day_operations_digitally_with_ease_and_effortlessly') }}</span>
                            </p>
                            <a href="https://codecanyon.net/item/infyhms-smart-hospital-management-system/26344507"
                               class="btn btn-danger text-white wow bounceIn" data-wow-delay="0.4s"
                               target="_blank">{{ __('web.buy_now') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- header container ends --}}

    <div class="container features">
        <h4 class="m-0 p-0 text-center section-heading">{{ __('web.features.features') }}</h4>
        <div class="row">
            <div class="col-lg-3 col-md-6 my-15 custom-my-4 text-center features-block wow fadeInUp features-card"
                 data-aos="fade-up"
                 data-wow-delay=".2s">
                <i class="fas fa-ambulance d-flex justify-content-center mx-auto hover-transitions ambulance"></i>
                <h5 class="pt-5 fs-4 text-uppercase font-weight-bold">{{ __('web.features.emergency_services') }}</h5>
                <p class="text-muted fs-4 mb-5">{{ __('web.features.we_are_providing_advanced_emergency_services_We_have_well-equipped_emergency_and_trauma_center_with_facilities') }}</p>
            </div>
            <div class="col-lg-3 col-md-6 my-15 custom-my-4 text-center features-block wow fadeInUp" data-aos="fade-up"
                 data-wow-delay=".3s" data-aos-duration="1000">
                <i class="fas fa-user-md d-flex justify-content-center mx-auto hover-transitions qualified-doctor"></i>
                <h5 class="pt-5 fs-4 text-uppercase font-weight-bold">{{ __('web.features.qualified_doctors') }}</h5>
                <p class="text-muted fs-4 mb-5">{{ __('web.features.our_team_of_pathologists_microbiologists_and_clinical_laboratory_scientists_are_always_ready_to_help_you_with_your_laboratory_needs') }}</p>
            </div>
            <div class="col-lg-3 col-md-6 my-15 custom-my-4 text-center features-block wow fadeInUp" data-aos="fade-up"
                 data-wow-delay=".4s" data-aos-duration="1500">
                <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions  outdoor-checkup"></i>
                <h5 class="pt-5 fs-4 text-uppercase font-weight-bold">{{ __('web.features.outdoors_checkup') }}</h5>
                <p class="text-muted fs-4 mb-5">{{ __('web.features.our_doctors_are_always_ready_for_outdoor_checkup_in_an_emergency_we_have_different_types_of_charges_as_per_checkup') }}</p>
            </div>
            <div class="col-lg-3 col-md-6  my-15 custom-my-4 text-center features-block wow fadeInUp" data-aos="fade-up"
                 data-wow-delay=".5s" data-aos-duration="2000">
                <i class="fas fa-history d-flex justify-content-center mx-auto hover-transitions service-clock"></i>
                <h5 class="pt-5 fs-4 text-uppercase font-weight-bold">{{ __('web.features.hours_services') }}</h5>
                <p class="text-muted fs-4 mb-5">{{ __('web.features.our_clinic_provides_extensive_medical_support_and_healthcare_services_24/7') }}</p>
            </div>
        </div>
    </div>

    {{-- Departments container starts --}}
    <div class="container pt-15" id="departments">
        <h4 class="m-0 p-0 text-center section-heading">{{ __('web.departments') }}</h4>
        <div class="row mt-3 content-icons">
            <div class="col-12">
                <div class="row">
                    @foreach($doctorsDepartments as $doctorsDepartment)
                        <div class="col-lg-4 col-6 my-15 text-center contents-box hover-transitions wow fadeInUp department-item"
                             data-aos="fade-up" data-aos-duration="1000">
                            <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions"></i>
                            <h5 class="pt-5 text-muted fs-2">{{ $doctorsDepartment->title }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Departments container ends --}}

    <div class="container-fluid" id="hmsFeatures">
        <div class="container mt-10">
            <h4 class="m-0 p-0 text-center section-heading">{{ __('web.backend_features') }}</h4>
            <div class="row">
                <div class="col-12 mt-6 hms__features">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/administrative-feature.png') }}">
                                    <img src="{{ asset('web/img/administrative-feature.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.dashboard') }}</h4>
                                {{--                                <p class="hms__feature-text text-muted"></p>--}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/02. Change Password.png') }}">
                                    <img src="{{ asset('web/img/02. Change Password.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.change_password') }}</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/change_language.jpg') }}">
                                    <img src="{{ asset('web/img/change_language.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.change_language') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/invoice_listing.jpg') }}">
                                    <img src="{{ asset('web/img/invoice_listing.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.invoice_listing') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/create_invoice.jpg') }}">
                                    <img src="{{ asset('web/img/create_invoice.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.create_invoice') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/13. New BIll.png') }}">
                                    <img src="{{ asset('web/img/13. New BIll.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.create_bill') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/appointments_calander_view.jpg') }}">
                                    <img src="{{ asset('web/img/appointments_calander_view.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.appointments') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/06. Beds List.png') }}">
                                    <img src="{{ asset('web/img/06. Beds List.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.bed_listing') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/06.1. Bed Details.png') }}">
                                    <img src="{{ asset('web/img/06.1. Bed Details.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.bed_details') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/06.2. Bed Assign.png') }}">
                                    <img src="{{ asset('web/img/06.2. Bed Assign.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.bed_allotment') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/document_listing.jpg') }}">
                                    <img src="{{ asset('web/img/document_listing.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.document') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/14. New Ambulance.png') }}">
                                    <img src="{{ asset('web/img/14. New Ambulance.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.add_ambulance') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/create_insurance.jpg') }}">
                                    <img src="{{ asset('web/img/create_insurance.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.create_insurance') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/create_doctor.jpg') }}">
                                    <img src="{{ asset('web/img/create_doctor.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.create_doctor') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/15. Add Medicine.png') }}">
                                    <img src="{{ asset('web/img/15. Add Medicine.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.create_medicine') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/16. Employee Payroll Details.png') }}">
                                    <img src="{{ asset('web/img/16. Employee Payroll Details.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.add_employee_payroll_details') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/employee-payroll.jpg') }}">
                                    <img src="{{ asset('web/img/employee-payroll.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.employee_payroll_details') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/payment-reports.jpg') }}">
                                    <img src="{{ asset('web/img/payment-reports.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.payment_reports') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/enquiries.jpg') }}">
                                    <img src="{{ asset('web/img/enquiries.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.enquiry_listing') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/17. Pateint Admission.png') }}">
                                    <img src="{{ asset('web/img/17. Pateint Admission.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.patient_admission_listing') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/04. Doctors Schedule.png') }}">
                                    <img src="{{ asset('web/img/04. Doctors Schedule.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.doctor_schedules') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/birth_report_listing.jpg') }}">
                                    <img src="{{ asset('web/img/birth_report_listing.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.birth_report_listing') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/18. Email Service.png') }}">
                                    <img src="{{ asset('web/img/18. Email Service.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.email_service') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/11. Settings.png') }}">
                                    <img src="{{ asset('web/img/11. Settings.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">{{ __('web.backend_feature.settings') }}</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-15 custom-mt-4" id="hmsFacilities">
        <h4 class="m-0 p-0 text-center section-heading">{{ __('web.miscellaneous_facilities.miscellaneous_facilities_of_infyhms') }}</h4>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="facility-block-one mt-10 ps-0">
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.host_in_your_Own_secure_server') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.no_monthly_or_yearly_fees') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.customer_support') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.multi_language_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.admin_and_customer_has_separate_ui_and_login') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.email_and_sms_gateway_adding_for_marketing') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.complete_hospital_management_solution') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.prescription_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.doctor_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.insurance_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.billing_management_system') }}</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="facility-block-two mt-10 ps-0">
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.role_based_permission_setup_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.multiple_email_and_sms_gateway_added') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.human_resource_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.complete_Bed_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.medication_and_visits_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.case_manager_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.patient_separate_login_and_appointment_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.hospital_enquiry_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.parmacy_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.appointment_management_system') }}</li>
                            <li class="facility-item">{{ __('web.miscellaneous_facilities.investigation_reports') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- start using hms block --}}

    <div class="container-fluid start-using-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 justify-content-center d-flex flex-column start-using-content">
                    <p class="start-using-heading wow fadeInUp mb-6"
                       data-wow-delay=".2s" data-aos="fade-up"
                       data-aos-duration="1000">{{ __('web.start_using_InfyHMS_now') }}
                    </p>
                    <a class="btn btn-white text-primary wow bounceInUp w-25 fs-7 fw-bolder using-block-btn mb-10"
                       data-aos="fade-up" data-aos-duration="1000" data-wow-delay=".3s"
                       href="{{url('login')}}">{{ __('web.get_started') }}</a>
                </div>
                <div class="col-lg-7 start-using-image">
                    <img src="{{ asset('web/img/dashboard.png') }}" class="w-100 wow fadeInUp" data-wow-delay=".4s"
                         data-aos="fade-up" data-aos-duration="2000">
                </div>
            </div>
        </div>
    </div>
    {{-- end start using hms block --}}

    @if(count($testimonials) > 0)
        <div class="container testimonials" id="testimonials">
            <h4 class="text-center section-heading">{{ __('messages.testimonials') }}</h4>
            <div class="testimonial-wrapper mt-3">
                <div class="col-lg-12 col-12">
                    <div class="owl-carousel owl-theme d-flex justify-content-center">
                        @foreach($testimonials as $testimonial)
                            <div class="item">
                                <div class="testimonial-item d-flex align-items-center flex-column">
                                    <img src="{{ $testimonial->document_url }}" class="testimonial-image"
                                         alt="Testimonial Image">
                                    <div class="testimonial-content">
                                        <h3 class="testimonial-name">{{$testimonial->name}}</h3>
                                        @if((Str::length($testimonial->description) < 90))
                                            <span>{{$testimonial->description}}</span>
                                        @else
                                            <span data-toggle="tooltip" data-placement="bottom"
                                                  title="{{$testimonial->description}}"
                                                  data-delay="{'show':500,'hide':100}">
                                            {{ Str::limit($testimonial->description,200,'...') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- end testimonial block --}}
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
        $(window).on('load', function () {
            $('.owl-carousel').owlCarousel({
                margin: 10,
                autoplay: true,
                loop: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    320: {
                        items: 1,
                        margin: 20,
                    },
                    540: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 3,
                    },
                    1024: {
                        items: 3,
                    },
                    2256: {
                        items: 3,
                    },
                },
            });
        });
    </script>
    <script src="{{ asset('web/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    {{--    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>--}}
    {{--    <script src="{{ asset('assets/js/lightgallery.js') }}"></script>--}}
    {{--    <script src="{{ mix('assets/js/web/plugin.js') }}"></script>--}}
@endsection

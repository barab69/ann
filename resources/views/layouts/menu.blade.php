@php($modules = App\Models\Module::cacheFor(now()->addDays())->toBase()->get())
<div class="position-relative mb-5 mx-3 mt-2 sidebar-search-box">
    <span class="svg-icon svg-icon-1 svg-icon-primary position-absolute top-50 translate-middle ms-9">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="17.0365" y="15.1223"
                                                                      width="8.15546" height="2" rx="1"
                                                                      transform="rotate(45 17.0365 15.1223)"
                                                                      fill="black"></rect>
                                                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                                      fill="black"></path>
                                                            </svg>
                                                        </span>
    <input type="text" class="form-control form-control-lg form-control-solid ps-15" id="menuSearch" name="search"
           value="" placeholder="Search" style="background-color: #2A2B3A;border: none;color: #FFFFFF"
           autocomplete="off">
</div>
<div class="no-record text-white text-center d-none">No matching records found</div>
@role('Admin')
{{--Dashboard--}}
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('dashboard*') ? 'active' : '' }}" href="{{ route('dashboard') }}">
        <span class="menu-icon">
            <i class="fas fa-chart-pie"></i>
		</span>
        <span class="menu-title">{{ __('messages.dashboard.dashboard') }}</span>
    </a>
</div>

{{--Accountantants--}}
@module('Accountants',$modules)
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('accountants*') ? 'active' : '' }}"
       href="{{ route('accountants.index') }}">
        <span class="menu-icon"><i class="fas fa-file-invoice"></i></span>
        <span class="menu-title">{{ __('messages.accountants') }}</span>
    </a>
</div>
@endmodule

{{--Appointments--}}
@module('Appointments',$modules)
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('appointment*') ? 'active' : '' }}"
       href="{{ route('appointments.index') }}">
        <span class="menu-icon"><i class="fas fa-calendar-check"></i></span>
        <span class="menu-title">{{ __('messages.appointments') }}</span>
    </a>
</div>
@endmodule

{{-- Billing --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('accounts*','employee-payrolls*','invoices*','payments*','payment-reports*','advanced-payments*','bills*') ? 'active' : '' }}"
       href="{{ route('accounts.index') }}">
        <span class="menu-icon"><i class="fas fa-file-invoice-dollar"></i></span>
        <span class="menu-title">{{ __('messages.billing') }}</span>
        <span class="d-none">{{__('messages.employee_payrolls')}}</span>
        <span class="d-none">{{__('messages.invoices')}}</span>
        <span class="d-none">{{__('messages.payments')}}</span>
        <span class="d-none">{{__('messages.payment_reports')}}</span>
        <span class="d-none">{{__('messages.advanced_payments')}}</span>
        <span class="d-none">{{__('messages.bills')}}</span>
    </a>
</div>

{{-- Bed Management  --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('bed-types*','beds*','bed-assigns*','bulk-beds','bed-status') ? 'active' : '' }}"
       href="{{ route('bed-types.index') }}">
        <span class="menu-icon"><i class="fas fa-bed"></i></span>
        <span class="menu-title">{{ __('messages.bed_management') }}</span>
        <span class="d-none">{{__('messages.bed_types')}}</span>
        <span class="d-none">{{__('messages.beds')}}</span>
        <span class="d-none">{{__('messages.bed_assigns')}}</span>
    </a>
</div>

{{-- Blood Bank dropdown --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('blood-banks*','blood-donors*','blood-donations*','blood-issues*') ? 'active' : '' }}"
       href="{{ route('blood-banks.index') }}">
        <span class="menu-icon"><i class="fas fa-tint"></i></span>
        <span class="menu-title">{{ __('messages.blood_bank') }}</span>
        <span class="d-none">{{__('messages.blood_donors')}}</span>
        <span class="d-none">{{__('messages.blood_donations')}}</span>
        <span class="d-none">{{__('messages.blood_issues')}}</span>
    </a>
</div>

{{--Documents Mgt--}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('documents*','document-types*') ? 'active' : '' }}"
       href="{{ route('documents.index') }}">
        <span class="menu-icon"><i class="fas fa-file"></i></span>
        <span class="menu-title">{{ __('messages.documents') }}</span>
        <span class="d-none">{{__('messages.document_types')}}</span>
    </a>
</div>

{{-- Doctors dropdown --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('doctors*','doctor-departments*','schedules*','prescriptions*') ? 'active' : '' }}"
       href="{{ route('doctors.index') }}">
        <span class="menu-icon"><i class="fa fa-user-md"></i></span>
        <span class="menu-title">{{ __('messages.doctors') }}</span>
        <span class="d-none">{{__('messages.doctor_departments')}}</span>
        <span class="d-none">{{__('messages.schedules')}}</span>
        <span class="d-none">{{__('messages.prescriptions')}}</span>
    </a>
</div>

{{--Diagnosis Test--}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('diagnosis-categories*','patient-diagnosis-test*') ? 'active' : '' }}"
       href="{{ route('diagnosis.category.index') }}">
        <span class="menu-icon"><i class="fas fa-diagnoses"></i></span>
        <span class="menu-title">{{ __('messages.patient_diagnosis_test.diagnosis') }}</span>
        <span class="d-none">{{ __('messages.patient_diagnosis_test.diagnosis_category') }}</span>
        <span class="d-none">{{ __('messages.patient_diagnosis_test.diagnosis_test') }}</span>
    </a>
</div>

{{-- Enquiries --}}
@module('Enquires',$modules)
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('enquiries*') || Request::is('enquiry*') ? 'active' : '' }}"
       href="{{ route('enquiries') }}">
        <span class="menu-icon"><i class="fas fa-question-circle"></i></span>
        <span class="menu-title">{{ __('messages.enquiries') }}</span>
    </a>
</div>
@endmodule

{{-- Finance --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('incomes*','expenses*') ? 'active' : '' }}"
       href="{{ route('incomes.index') }}">
        <span class="menu-icon"><i class="fas fa-money-bill"></i></span>
        <span class="menu-title">{{__('messages.finance')}}</span>
        <span class="d-none">{{ __('messages.incomes.incomes') }}</span>
        <span class="d-none">{{ __('messages.expenses') }}</span>
    </a>
</div>

{{-- Front office --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('call-logs*','visitor*','receives*','dispatches*') ? 'active' : '' }}"
       href="{{ route('call_logs.index') }}">
        <span class="menu-icon"><i class="fa fa-dungeon"></i></span>
        <span class="menu-title">{{ __('messages.front_office') }}</span>
        <span class="d-none">{{ __('messages.call_logs') }}</span>
        <span class="d-none">{{ __('messages.visitors') }}</span>
        <span class="d-none">{{ __('messages.postal_receive') }}</span>
        <span class="d-none">{{ __('messages.postal_dispatch') }}</span>
    </a>
</div>

{{-- Front settings --}}
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('front-settings*','notice-boards*','testimonials*') ? 'active' : '' }}"
       href="{{ route('front.settings.index') }}">
        <span class="menu-icon"><i class="fas fa fa-cog"></i></span>
        <span class="menu-title">{{ __('messages.front_settings') }}</span>
        <span class="d-none">{{ __('messages.notice_boards') }}</span>
        <span class="d-none">{{ __('messages.testimonials') }}</span>
    </a>
</div>

{{-- Hospital Charges --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('charge-categories*','charges*','doctor-opd-charges*') ? 'active' : '' }}"
       href="{{ route('charge-categories.index') }}">
        <span class="menu-icon"><i class="fas fa-coins"></i></span>
        <span class="menu-title">{{ __('messages.hospital_charges') }}</span>
        <span class="d-none">{{ __('messages.charge_categories') }}</span>
        <span class="d-none">{{ __('messages.charges') }}</span>
        <span class="d-none">{{ __('messages.doctor_opd_charges') }}</span>
    </a>
</div>

{{--ipds/opds--}}
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('ipds*','opds*') ? 'active' : '' }}"
       href="{{ route('ipd.patient.index') }}"
       title="{{ __('messages.ipd_opd') }}">
        <span class="menu-icon">
            <i class="fas fa-notes-medical"></i>
		</span>
        <span class="menu-title">{{ __('messages.ipd_opd') }}</span>
        <span class="d-none">{{__('messages.ipd_patients')}}</span>
        <span class="d-none">{{__('messages.opd_patients')}}</span>
    </a>
</div>

{{-- Inventory Management  --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('item-categories*','items*','item-stocks*','issued-items*') ? 'active' : '' }}"
       href="{{ route('item-categories.index') }}">
        <span class="menu-icon"><i class="fas fa-luggage-cart"></i></span>
        <span class="menu-title">{{ __('messages.inventory') }}</span>
        <span class="d-none">{{ __('messages.items_categories') }}</span>
        <span class="d-none">{{ __('messages.items') }}</span>
        <span class="d-none">{{ __('messages.items_stocks') }}</span>
        <span class="d-none">{{ __('messages.issued_items') }}</span>
    </a>
</div>

{{--Lab Technician--}}
@module('Lab Technicians',$modules)
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('lab-technicians*') ? 'active' : '' }}"
       href="{{ route('lab-technicians.index') }}">
        <span class="menu-icon"><i class="fas fa-microscope"></i></span>
        <span class="menu-title">{{ __('messages.lab_technicians') }}</span>
    </a>
</div>
@endmodule

{{-- Live Consultation --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('live-consultation*','live-meeting*') ? 'active' : '' }}"
       href="{{ route('live.consultation.index') }}">
        <span class="menu-icon"><i class="fa fa-video"></i></span>
        <span class="menu-title">{{ __('messages.live_consultations') }}</span>
        <span class="d-none">{{ __('messages.live_meetings') }}</span>
    </a>
</div>

{{-- Medicines dropdown --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('categories*','brands*','medicines*') ? 'active' : '' }}"
       href="{{ route('categories.index') }}">
        <span class="menu-icon"><i class="fas fa-capsules"></i></span>
        <span class="menu-title">{{ __('messages.medicines') }}</span>
        <span class="d-none">{{__('messages.medicine_categories')}}</span>
        <span class="d-none">{{__('messages.medicine_brands')}}</span>
        <span class="d-none">{{__('messages.medicines')}}</span>
    </a>
</div>

{{--Nursers--}}
@module('Nurses',$modules)
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('nurses*') ? 'active' : '' }}" href="{{ route('nurses.index') }}">
        <span class="menu-icon"><i class="fa fa-user-nurse"></i></span>
        <span class="menu-title">{{ __('messages.nurses') }}</span>
    </a>
</div>
@endmodule

{{--Cases Mgt--}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('patients*','patient-cases*','case-handlers*','patient-admissions*') ? 'active' : '' }}"
       href="{{ route('patients.index') }}">
        <span class="menu-icon"><i class="fas fa-user-injured"></i></span>
        <span class="menu-title">{{ __('messages.patients') }}</span>
        <span class="d-none">{{__('messages.cases')}}</span>
        <span class="d-none">{{__('messages.case_handlers')}}</span>
        <span class="d-none">{{__('messages.patient_admissions')}}</span>
    </a>
</div>

{{--Pharmacsist--}}
@module('Pharmacists',$modules)
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('pharmacists*') ? 'active' : '' }}"
       href="{{ route('pharmacists.index') }}">
        <span class="menu-icon"><i class="fas fa-file-prescription"></i></span>
        <span class="menu-title">{{ __('messages.pharmacists') }}</span>
    </a>
</div>
@endmodule

{{-- Pathology --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('pathology-categories*','pathology-tests*') ? 'active' : '' }}"
       href="{{ route('pathology.category.index') }}">
        <span class="menu-icon"><i class="fa fa-flask"></i></span>
        <span class="menu-title">{{ __('messages.pathologies') }}</span>
        <span class="d-none">{{__('messages.pathology_categories')}}</span>
        <span class="d-none">{{__('messages.pathology_tests')}}</span>
    </a>
</div>

{{--Receptinist--}}
@module('Receptionists',$modules)
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('receptionists*') ? 'active' : '' }}"
       href="{{ route('receptionists.index') }}">
        <span class="menu-icon"><i class="fa fa-user-tie"></i></span>
        <span class="menu-title">{{ __('messages.receptionists') }}</span>
    </a>
</div>
@endmodule

{{-- Hospital Activities dropdown --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('birth-reports*','death-reports*','investigation-reports*','operation-reports*') ? 'active' : '' }}"
       href="{{ route('birth-reports.index') }}">
        <span class="menu-icon"><i class="fas fa-file-medical"></i></span>
        <span class="menu-title">{{ __('messages.reports') }}</span>
        <span class="d-none">{{__('messages.birth_reports')}}</span>
        <span class="d-none">{{__('messages.death_reports')}}</span>
        <span class="d-none">{{__('messages.investigation_reports')}}</span>
        <span class="d-none">{{__('messages.operation_reports')}}</span>
    </a>
</div>

{{-- Radiology --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('radiology-categories*','radiology-tests*') ? 'active' : '' }}"
       href="{{ route('radiology.category.index') }}">
        <span class="menu-icon"><i class="fa fa-x-ray"></i></span>
        <span class="menu-title">{{ __('messages.radiologies') }}</span>
        <span class="d-none">{{__('messages.radiology_categories')}}</span>
        <span class="d-none">{{__('messages.radiology_tests')}}</span>
    </a>
</div>

{{-- Services dropdown --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('insurances*','packages*','services*','ambulances*','ambulance-calls*') ? 'active' : '' }}"
       href="{{ route('insurances.index') }}">
        <span class="menu-icon"><i class="fas fa-box"></i></span>
        <span class="menu-title">{{ __('messages.services') }}</span>
        <span class="d-none">{{__('messages.insurances')}}</span>
        <span class="d-none">{{__('messages.packages')}}</span>
        <span class="d-none">{{__('messages.services')}}</span>
        <span class="d-none">{{__('messages.ambulances')}}</span>
        <span class="d-none">{{__('messages.ambulance_calls')}}</span>
    </a>
</div>

{{-- sms/mail--}}
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('sms*','mail*') ? 'active' : '' }}"
       href="{{ route('sms.index') }}"
       title="{{ __('SMS/Mail') }}">
        <span class="menu-icon">
            <i class="fas fa-bell"></i>
		</span>
        <span class="menu-title">{{ __('SMS/Mail') }}</span>
        <span class="d-none">{{ __('messages.sms.sms') }}</span>
        <span class="d-none">{{ __('messages.mail') }}</span>
    </a>
</div>

{{-- Settings --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('settings*') ? 'active' : '' }}"
       href="{{ route('settings.edit') }}">
        <span class="menu-icon"><i class="fa fa-cogs"></i></span>
        <span class="menu-title">{{ __('messages.settings') }}</span>
        <span class="d-none">{{ __('messages.general') }}</span>
        <span class="d-none">{{ __('messages.sidebar_setting') }}</span>
    </a>
</div>


{{--Users--}}
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">
        <span class="menu-icon">
            <i class="fas fa-user-friends"></i>
		</span>
        <span class="menu-title">{{ __('messages.users') }}</span>
    </a>
</div>

{{-- Vaccination --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('vaccinated-patients*','vaccinations*') ? 'active' : '' }}"
       href="{{ route('vaccinated-patients.index') }}">
        <span class="menu-icon">
             <i class="fas fa-syringe"></i>
        </span>
        <span class="menu-title">{{ __('messages.vaccinations') }}</span>
        <span class="d-none">{{__('messages.vaccinated_patients')}}</span>
    </a>
</div>
@endrole
@if(Auth::user()->email_verified_at != null)
    @role('Doctor')
    @module('Appointments',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('appointments*') ? 'active' : '' }}"
           href="{{ route('appointments.index') }}">
            <span class="menu-icon"><i class="nav-icon fas fa-calendar-check"></i></span>
            <span class="menu-title">{{ __('messages.appointments') }}</span>
        </a>
    </div>
    @endmodule

    {{--Bed Management --}}
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('bed-assigns*') ? 'active' : '' }}"
           href="{{ route('bed-assigns.index') }}">
            <span class="menu-icon"><i class="fas fa-bed"></i></span>
            <span class="menu-title">{{ __('messages.bed_management') }}</span>
            <span class="d-none">{{__('messages.bed_assigns')}}</span>
        </a>
    </div>

    @module('Doctors',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/doctor*','prescriptions*','schedules*','doctors*') ? 'active' : '' }}"
           href="{{ url('employee/doctor') }}">
            <span class="menu-icon"><i class="fa fa-user-md"></i></span>
            <span class="menu-title">{{ __('messages.doctors') }}</span>
            <span class="d-none">{{__('messages.schedules')}}</span>
            <span class="d-none">{{__('messages.prescriptions')}}</span>
        </a>
    </div>
    @endmodule

    @module('Documents',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('documents*') ? 'active' : '' }}"
           href="{{ route('documents.index') }}">
            <span class="menu-icon"><i class="fas fa-file"></i></span>
            <span class="menu-title">{{ __('messages.documents') }}</span>
        </a>
    </div>
    @endmodule

    {{--Diagnosis Test--}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('diagnosis-categories*','patient-diagnosis-test*') ? 'active' : '' }}"
           href="{{ route('diagnosis.category.index') }}">
            <span class="menu-icon"><i class="fas fa-diagnoses"></i></span>
            <span class="menu-title">{{ __('messages.patient_diagnosis_test.diagnosis') }}</span>
            <span class="d-none">{{ __('messages.patient_diagnosis_test.diagnosis_category') }}</span>
            <span class="d-none">{{ __('messages.patient_diagnosis_test.diagnosis_test') }}</span>
        </a>
    </div>

    {{-- Front settings --}}
    @module('Notice Boards',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/notice-board*') ? 'active' : '' }}"
           href="{{ url('employee/notice-board') }}">
            <span class="menu-icon"><i class="fas fa fa-cog"></i></span>
            <span class="menu-title">{{ __('messages.front_settings') }}</span>
            <span class="d-none">{{ __('messages.notice_boards') }}</span>
        </a>
    </div>
    @endmodule

    {{--ipds/opds--}}
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('ipds*','opds*') ? 'active' : '' }}"
           href="{{ route('ipd.patient.index') }}"
           title="{{ __('messages.ipd_opd') }}">
        <span class="menu-icon">
            <i class="fas fa-notes-medical"></i>
		</span>
            <span class="menu-title">{{ __('messages.ipd_opd') }}</span>
            <span class="d-none">{{__('messages.ipd_patients')}}</span>
            <span class="d-none">{{__('messages.opd_patients')}}</span>
        </a>
    </div>

    {{-- Live Consultation --}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('live-consultation*','live-meeting*') ? 'active' : '' }}"
           href="{{ route('live.consultation.index') }}">
            <span class="menu-icon"><i class="fa fa-video"></i></span>
            <span class="menu-title">{{ __('messages.live_consultations') }}</span>
            <span class="d-none">{{ __('messages.live_meetings') }}</span>
        </a>
    </div>

    {{-- My Payrolls --}}
    @module('My Payrolls',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/payroll') ? 'active' : '' }}"
           href="{{ route('payroll') }}">
            <span class="menu-icon"><i class="fas fa-chart-pie"></i></span>
            <span class="menu-title">{{ __('messages.my_payrolls') }}</span>
        </a>
    </div>

    {{-- Patients --}}
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('patient-admissions*') ? 'active' : '' }}"
           href="{{ route('patient-admissions.index') }}">
            <span class="menu-icon"><i class="fas fa-user-injured"></i></span>
            <span class="menu-title">{{ __('messages.patients') }}</span>
            <span class="d-none">{{__('messages.patient_admissions')}}</span>
        </a>
    </div>

    {{-- Reports --}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('birth-reports*','death-reports*','investigation-reports*','operation-reports*') ? 'active' : '' }}"
           href="{{ route('birth-reports.index') }}">
            <span class="menu-icon"><i class="fas fa-file-medical"></i></span>
            <span class="menu-title">{{ __('messages.reports') }}</span>
            <span class="d-none">{{__('messages.birth_reports')}}</span>
            <span class="d-none">{{__('messages.death_reports')}}</span>
            <span class="d-none">{{__('messages.investigation_reports')}}</span>
            <span class="d-none">{{__('messages.operation_reports')}}</span>
        </a>
    </div>

    {{-- SMS --}}
    @module('SMS',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('sms*') ? 'active' : '' }}" href="{{ route('sms.index') }}">
            <span class="menu-icon"><i class="fas fa fa-sms"></i></span>
            <span class="menu-title">{{ __('messages.sms.sms') }}</span>
        </a>
    </div>
    @endmodule
    @endmodule
    @endrole

    @role('Case Manager')
    @module('Doctors',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/doctor*') ? 'active' : '' }}"
           href="{{ url('employee/doctor') }}">
            <span class="menu-icon"><i class="fa fa-user-md"></i></span>
            <span class="menu-title">{{ __('messages.doctors') }}</span>
        </a>
    </div>
    @endmodule

    {{-- Notice Boards --}}
    @module('Notice Boards',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/notice-board*') ? 'active' : '' }}"
           href="{{ url('employee/notice-board') }}">
            <span class="menu-icon"><i class="fas fa fa-cog"></i></span>
            <span class="menu-title">{{ __('messages.front_settings') }}</span>
            <span class="d-none">{{ __('messages.notice_boards') }}</span>
        </a>
    </div>

    {{-- Live Meeting --}}
    @module('Live Meetings',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('live-meeting*') ? 'active' : '' }}"
           href="{{ route('live.meeting.index') }}">
            <span class="menu-icon"><i class="fa fa-file-video"></i></span>
            <span class="menu-title">{{ __('messages.live_meetings') }}</span>
        </a>
    </div>
    @endmodule

    @module('My Payrolls',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/payroll') ? 'active' : '' }}"
           href="{{ route('payroll') }}">
            <span class="menu-icon"><i class="fas fa-chart-pie"></i></span>
            <span class="menu-title">{{ __('messages.my_payrolls') }}</span>
        </a>
    </div>
    @endmodule

    {{-- Patient admissions and Cases --}}
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('patient-admissions*','patient-cases*') ? 'active' : '' }}"
           href="{{ route('patient-cases.index') }}"
           title="{{ __('Patients') }}">
            <span class="menu-icon"><i class="fas fa-user-injured"></i></span>
            <span class="menu-title">{{ __('messages.patients') }}</span>
            <span class="d-none">{{__('messages.case_handlers')}}</span>
            <span class="d-none">{{__('messages.patient_admissions')}}</span>
        </a>
    </div>

    {{-- Ambulances and Ambulance Calls --}}
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('ambulances*','ambulance-calls*') ? 'active' : '' }}"
           href="{{ route('ambulances.index') }}"
           title="{{ __('Services') }}">
            <span class="menu-icon"><i class="fas fa-box"></i></span>
            <span class="menu-title">{{ __('messages.services') }}</span>
            <span class="d-none">{{__('messages.ambulances')}}</span>
            <span class="d-none">{{__('messages.ambulance_calls')}}</span>
        </a>
    </div>

    {{-- Mail and SMS --}}
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('sms*','mail*') ? 'active' : '' }}"
           href="{{ route('sms.index') }}"
           title="{{ __('SMS/Mail') }}">
        <span class="menu-icon">
            <i class="fas fa-bell"></i>
		</span>
            <span class="menu-title">{{ __('SMS/Mail') }}</span>
    </a>
</div>
@endmodule
@endrole

@role('Receptionist')
    {{--Appointments--}}
    @module('Appointments',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('appointments*') ? 'active' : '' }}"
           href="{{ route('appointments.index') }}">
            <span class="menu-icon"><i class="fas fa-calendar-check"></i></span>
            <span class="menu-title">{{ __('messages.appointments') }}</span>
        </a>
    </div>
    @endmodule

    {{--Doctors--}}
    @module('Doctors',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('doctors*') ? 'active' : '' }}"
           href="{{ route('doctors.index') }}">
            <span class="menu-icon"><i class="fa fa-user-md"></i></span>
            <span class="menu-title">{{ __('messages.doctors') }}</span>
        </a>
    </div>
    @endmodule

    {{--Diagnosis Test--}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('diagnosis-categories*','patient-diagnosis-test*') ? 'active' : '' }}"
           href="{{ route('diagnosis.category.index') }}">
            <span class="menu-icon"><i class="fas fa-diagnoses"></i></span>
            <span class="menu-title">{{ __('messages.patient_diagnosis_test.diagnosis') }}</span>
            <span class="d-none">{{ __('messages.patient_diagnosis_test.diagnosis_category') }}</span>
            <span class="d-none">{{ __('messages.patient_diagnosis_test.diagnosis_test') }}</span>
        </a>
    </div>

    {{--Enquires--}}
    @module('Enquires',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('enquiries*') || Request::is('enquiry*') ? 'active' : '' }}"
           href="{{ route('enquiries') }}">
            <span class="menu-icon"><i class="fas fa-question-circle"></i></span>
            <span class="menu-title">{{ __('messages.enquiries') }}</span>
        </a>
    </div>
    @endmodule

    {{-- Front office --}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('call-logs*','visitor*','receives*','dispatches*') ? 'active' : '' }}"
           href="{{ route('call_logs.index') }}">
            <span class="menu-icon"><i class="fa fa-dungeon"></i></span>
            <span class="menu-title">{{ __('messages.front_office') }}</span>
            <span class="d-none">{{ __('messages.call_logs') }}</span>
            <span class="d-none">{{ __('messages.visitors') }}</span>
            <span class="d-none">{{ __('messages.postal_receive') }}</span>
            <span class="d-none">{{ __('messages.postal_dispatch') }}</span>
        </a>
    </div>

    @module('Notice Boards',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/notice-board','testimonials*') ? 'active' : '' }}"
           href="{{ url('employee/notice-board') }}">
            <span class="menu-icon"><i class="fas fa fa-cog"></i></span>
            <span class="menu-title">{{ __('messages.front_settings') }}</span>
            <span class="d-none">{{ __('messages.notice_boards') }}</span>
        </a>
    </div>
    @endmodule

    {{-- Hospital Charges --}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('charge-categories*','charges*','doctor-opd-charges*') ? 'active' : '' }}"
           href="{{ route('charge-categories.index') }}">
            <span class="menu-icon"><i class="fas fa-coins"></i></span>
            <span class="menu-title">{{ __('messages.hospital_charges') }}</span>
            <span class="d-none">{{ __('messages.charge_categories') }}</span>
            <span class="d-none">{{ __('messages.charges') }}</span>
            <span class="d-none">{{ __('messages.doctor_opd_charges') }}</span>
        </a>
    </div>

    {{--ipds/opds--}}
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('ipds*','opds*') ? 'active' : '' }}"
           href="{{ route('ipd.patient.index') }}"
           title="{{ __('messages.ipd_opd') }}">
    <span class="menu-icon">
        <i class="fas fa-notes-medical"></i>
    </span>
            <span class="menu-title">{{ __('messages.ipd_opd') }}</span>
            <span class="d-none">{{__('messages.ipd_patients')}}</span>
            <span class="d-none">{{__('messages.opd_patients')}}</span>
        </a>
    </div>

    {{-- Live Meeting --}}
    @module('Live Meetings',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('live-meeting*') ? 'active' : '' }}"
           href="{{ route('live.meeting.index') }}">
            <span class="menu-icon"><i class="fa fa-file-video"></i></span>
            <span class="menu-title">{{ __('messages.live_meetings') }}</span>
            <span class="d-none">{{ __('messages.live_meetings') }}</span>
        </a>
    </div>
    @endmodule

    @module('My Payrolls',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/payroll') ? 'active' : '' }}"
           href="{{ route('payroll') }}">
            <span class="menu-icon"><i class="fas fa-chart-pie"></i></span>
            <span class="menu-title">{{ __('messages.my_payrolls') }}</span>
        </a>
    </div>
    @endmodule

    {{--Cases Mgt--}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('patients*','patient-cases*','case-handlers*','patient-admissions*') ? 'active' : '' }}"
           href="{{ route('patients.index') }}">
            <span class="menu-icon"><i class="fas fa-user-injured"></i></span>
            <span class="menu-title">{{ __('messages.patients') }}</span>
            <span class="d-none">{{__('messages.cases')}}</span>
            <span class="d-none">{{__('messages.case_handlers')}}</span>
            <span class="d-none">{{__('messages.patient_admissions')}}</span>
        </a>
    </div>

    {{-- Pathology --}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('pathology-categories*','pathology-tests*') ? 'active' : '' }}"
           href="{{ route('pathology.category.index') }}">
            <span class="menu-icon"><i class="fa fa-flask"></i></span>
            <span class="menu-title">{{ __('messages.pathologies') }}</span>
            <span class="d-none">{{__('messages.pathology_categories')}}</span>
            <span class="d-none">{{__('messages.pathology_tests')}}</span>
        </a>
    </div>

    {{-- Radiology --}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('radiology-categories*','radiology-tests*') ? 'active' : '' }}"
           href="{{ route('radiology.category.index') }}">
            <span class="menu-icon"><i class="fa fa-x-ray"></i></span>
            <span class="menu-title">{{ __('messages.radiologies') }}</span>
            <span class="d-none">{{__('messages.radiology_categories')}}</span>
        <span class="d-none">{{__('messages.radiology_tests')}}</span>
    </a>
</div>

{{-- Services dropdown --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('insurances*','packages*','services*','ambulances*','ambulance-calls*') ? 'active' : '' }}"
       href="{{ route('insurances.index') }}">
        <span class="menu-icon"><i class="fas fa-box"></i></span>
        <span class="menu-title">{{ __('messages.services') }}</span>
        <span class="d-none">{{__('messages.insurances')}}</span>
        <span class="d-none">{{__('messages.packages')}}</span>
        <span class="d-none">{{__('messages.services')}}</span>
        <span class="d-none">{{__('messages.ambulances')}}</span>
        <span class="d-none">{{__('messages.ambulance_calls')}}</span>
    </a>
</div>

{{-- Mail and SMS --}}
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('sms*','mail*') ? 'active' : '' }}"
       href="{{ route('sms.index') }}"
       title="{{ __('SMS/Mail') }}">
        <span class="menu-icon">
            <i class="fas fa-bell"></i>
		</span>
        <span class="menu-title">{{ __('SMS/Mail') }}</span>
        <span class="d-none">{{ __('messages.sms.sms') }}</span>
        <span class="d-none">{{ __('messages.mail') }}</span>
    </a>
</div>

{{--@module('Testimonial',$modules)--}}
{{--<div class="menu-item side-menus">--}}
{{--    <a class="menu-link menu-text-wrap {{ Request::is('testimonials*') ? 'active' : '' }}"--}}
{{--       href="{{ route('testimonials.index') }}">--}}
{{--        <span class="menu-icon"><i class="fas fa fa-cog"></i></span>--}}
{{--        <span class="menu-title">{{ __('messages.front_settings') }}</span>
        <span class="d-none">{{ __('messages.notice_boards') }}</span>--}}
{{--    </a>--}}
{{--</div>--}}
{{--@endmodule--}}
@endrole

    @role('Pharmacist')
    @module('Doctors',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/doctor*') ? 'active' : '' }}"
           href="{{ url('employee/doctor') }}">
            <span class="menu-icon"><i class="fa fa-user-md"></i></span>
            <span class="menu-title">{{ __('messages.doctors') }}</span>
        </a>
    </div>
    @endmodule

    @module('Notice Boards',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/notice-board*') ? 'active' : '' }}"
           href="{{ url('employee/notice-board') }}">
            <span class="menu-icon"><i class="fas fa fa-cog"></i></span>
            <span class="menu-title">{{ __('messages.front_settings') }}</span>
            <span class="d-none">{{ __('messages.notice_boards') }}</span>
        </a>
    </div>
    @endmodule

    {{-- Live Meeting --}}
    @module('Live Meetings',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('live-meeting*') ? 'active' : '' }}"
           href="{{ route('live.meeting.index') }}">
            <span class="menu-icon"><i class="fa fa-file-video"></i></span>
            <span class="menu-title">{{ __('messages.live_meetings') }}</span>
        </a>
    </div>
    @endmodule

    {{-- Medicines--}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('categories*','brands*','medicines*') ? 'active' : '' }}"
           href="{{ route('categories.index') }}">
            <span class="menu-icon"><i class="fas fa-capsules"></i></span>
            <span class="menu-title">{{ __('messages.medicines') }}</span>
            <span class="d-none">{{__('messages.medicine_categories')}}</span>
            <span class="d-none">{{__('messages.medicine_brands')}}</span>
            <span class="d-none">{{__('messages.medicines')}}</span>
        </a>
    </div>

    @module('My Payrolls',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/payroll') ? 'active' : '' }}"
           href="{{ route('payroll') }}">
            <span class="menu-icon"><i class="fas fa-chart-pie"></i></span>
            <span class="menu-title">{{ __('messages.my_payrolls') }}</span>
        </a>
    </div>
    @endmodule

    @module('Pathology Tests',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('pathology-tests*') ? 'active' : '' }}"
           href="{{ route('pathology.test.index') }}">
            <span class="menu-icon"><i class="fa fa-flask"></i></span>
            <span class="menu-title">{{ __('messages.pathologies') }}</span>
        </a>
    </div>
    @endmodule

    @module('Radiology Tests',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('radiology-tests*') ? 'active' : '' }}"
           href="{{ route('radiology.test.index') }}">
            <span class="menu-icon"><i class="fa fa-x-ray"></i></span>
            <span class="menu-title">{{ __('messages.radiologies') }}</span>
            <span class="d-none">{{__('messages.radiology_tests')}}</span>
        </a>
    </div>
    @endmodule

    {{-- SMS --}}
    @module('SMS',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('sms*') ? 'active' : '' }}" href="{{ route('sms.index') }}">
            <span class="menu-icon"><i class="fas fa fa-sms"></i></span>
            <span class="menu-title">{{ __('messages.sms.sms') }}</span>
    </a>
</div>
@endmodule
@endrole

@role('Nurse')
{{-- Bed Manager --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('bed-types*','beds*','bed-assigns*','bulk-beds') ? 'active' : '' }}"
       href="{{ route('bed-types.index') }}">
        <span class="menu-icon"><i class="nav-icon fas fa-bed"></i></span>
        <span class="menu-title">{{ __('messages.bed_management') }}</span>
        <span class="d-none">{{__('messages.bed_types')}}</span>
        <span class="d-none">{{__('messages.beds')}}</span>
        <span class="d-none">{{__('messages.bed_assigns')}}</span>
    </a>
</div>

@module('Notice Boards',$modules)
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('employee/notice-board*') ? 'active' : '' }}"
       href="{{ url('employee/notice-board') }}">
        <span class="menu-icon"><i class="fas fa fa-cog"></i></span>
        <span class="menu-title">{{ __('messages.front_settings') }}</span>
        <span class="d-none">{{ __('messages.notice_boards') }}</span>
    </a>
</div>
@endmodule

    {{-- Live Meeting --}}
    @module('Live Meetings',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('live-meeting*') ? 'active' : '' }}"
           href="{{ route('live.meeting.index') }}">
            <span class="menu-icon"><i class="fa fa-file-video"></i></span>
            <span class="menu-title">{{ __('messages.live_meetings') }}</span>
        </a>
    </div>
    @endmodule

    {{--My Payrolls--}}
    @module('My Payrolls',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/payroll') ? 'active' : '' }}"
           href="{{ route('payroll') }}">
            <span class="menu-icon"><i class="fas fa-chart-pie"></i></span>
            <span class="menu-title">{{ __('messages.my_payrolls') }}</span>
        </a>
    </div>
    @endmodule

    @endrole

    @role('Lab Technician')
    {{-- Blood Bank dropdown --}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('blood-banks*','blood-donors*','blood-donations*','blood-issues*') ? 'active' : '' }}"
           href="{{ route('blood-banks.index') }}">
            <span class="menu-icon"><i class="fas fa-tint"></i></span>
            <span class="menu-title">{{ __('messages.blood_bank') }}</span>
            <span class="d-none">{{__('messages.blood_donors')}}</span>
            <span class="d-none">{{__('messages.blood_donations')}}</span>
            <span class="d-none">{{__('messages.blood_issues')}}</span>
        </a>
    </div>

    @module('Doctors',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/doctor*') ? 'active' : '' }}"
           href="{{ url('employee/doctor') }}">
            <span class="menu-icon"><i class="fa fa-user-md"></i></span>
            <span class="menu-title">{{ __('messages.doctors') }}</span>
        </a>
    </div>
    @endmodule

    {{--Diagnosis Test--}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('diagnosis-categories*','patient-diagnosis-test*') ? 'active' : '' }}"
           href="{{ route('diagnosis.category.index') }}">
            <span class="menu-icon"><i class="fas fa-diagnoses"></i></span>
            <span class="menu-title">{{ __('messages.patient_diagnosis_test.diagnosis') }}</span>
            <span class="d-none">{{ __('messages.patient_diagnosis_test.diagnosis_category') }}</span>
            <span class="d-none">{{ __('messages.patient_diagnosis_test.diagnosis_test') }}</span>
        </a>
    </div>

    {{-- Front Settings--}}
    @module('Notice Boards',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/notice-board*') ? 'active' : '' }}"
           href="{{ url('employee/notice-board') }}">
            <span class="menu-icon"><i class="fas fa fa-cog"></i></span>
            <span class="menu-title">{{ __('messages.front_settings') }}</span>
            <span class="d-none">{{ __('messages.notice_boards') }}</span>
        </a>
    </div>
    @endmodule

    {{-- Live Meeting --}}
    @module('Live Meetings',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('live-meeting*') ? 'active' : '' }}"
           href="{{ route('live.meeting.index') }}">
            <span class="menu-icon"><i class="fa fa-file-video"></i></span>
            <span class="menu-title">{{ __('messages.live_meetings') }}</span>
        </a>
    </div>
    @endmodule

    {{-- Medicines--}}
    <div class="menu-item menu-accordion side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('categories*','brands*','medicines*') ? 'active' : '' }}"
           href="{{ route('categories.index') }}">
            <span class="menu-icon"><i class="fas fa-capsules"></i></span>
            <span class="menu-title">{{ __('messages.medicines') }}</span>
            <span class="d-none">{{__('messages.medicine_categories')}}</span>
            <span class="d-none">{{__('messages.medicine_brands')}}</span>
            <span class="d-none">{{__('messages.medicines')}}</span>
        </a>
    </div>

    {{-- My Payrolls--}}
    @module('My Payrolls',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/payroll') ? 'active' : '' }}"
           href="{{ route('payroll') }}">
            <span class="menu-icon"><i class="fas fa-chart-pie"></i></span>
            <span class="menu-title">{{ __('messages.my_payrolls') }}</span>
        </a>
    </div>
    @endmodule

    {{--Pathologies--}}
    @module('Pathology Tests',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('pathology-tests*') ? 'active' : '' }}"
           href="{{ route('pathology.test.index') }}">
            <span class="menu-icon"><i class="fa fa-flask"></i></span>
            <span class="menu-title">{{ __('messages.pathologies') }}</span>
            <span class="d-none">{{__('messages.pathology_tests')}}</span>
        </a>
    </div>
    @endmodule

    @module('Radiology Tests',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('radiology-tests*') ? 'active' : '' }}"
           href="{{ route('radiology.test.index') }}">
            <span class="menu-icon"><i class="fa fa-x-ray"></i></span>
            <span class="menu-title">{{ __('messages.radiologies') }}</span>
            <span class="d-none">{{__('messages.radiology_tests')}}</span>
        </a>
    </div>
@endmodule
@endrole

@role('Accountant')
{{-- Account Manager dropdown --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('accounts*','employee-payrolls*','invoices*','payments*','bills*') ? 'active' : '' }}"
       href="{{ route('accounts.index') }}">
        <span class="menu-icon"><i class="fab fa-adn"></i></span>
        <span class="menu-title">{{ __('messages.account_manager') }}</span>
        <span class="d-none">{{ __('messages.accounts') }}</span>
        <span class="d-none">{{__('messages.employee_payrolls')}}</span>
        <span class="d-none">{{__('messages.invoices')}}</span>
        <span class="d-none">{{__('messages.payments')}}</span>
        <span class="d-none">{{__('messages.bills')}}</span>
    </a>
</div>

{{-- Finance --}}
<div class="menu-item menu-accordion side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('incomes*','expenses*') ? 'active' : '' }}"
       href="{{ route('incomes.index') }}">
        <span class="menu-icon"><i class="fas fa-money-bill"></i></span>
        <span class="menu-title">{{__('messages.finance')}}</span>
        <span class="d-none">{{ __('messages.incomes.incomes') }}</span>
        <span class="d-none">{{ __('messages.expenses') }}</span>
    </a>
</div>

    {{-- Notice Boards--}}
    @module('Notice Boards',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/notice-board*') ? 'active' : '' }}"
           href="{{ url('employee/notice-board') }}">
            <span class="menu-icon"><i class="fas fa fa-cog"></i></span>
            <span class="menu-title">{{ __('messages.front_settings') }}</span>
            <span class="d-none">{{ __('messages.notice_boards') }}</span>
        </a>
    </div>
    @endmodule

    {{-- Live Meeting --}}
    @module('Live Meetings',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('live-meeting*') ? 'active' : '' }}"
           href="{{ route('live.meeting.index') }}">
            <span class="menu-icon"><i class="fa fa-file-video"></i></span>
            <span class="menu-title">{{ __('messages.live_meetings') }}</span>
        </a>
    </div>
    @endmodule

    {{--My Payrolls --}}
    @module('My Payrolls',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/payroll') ? 'active' : '' }}"
           href="{{ route('payroll') }}">
            <span class="menu-icon"><i class="fas fa-chart-pie"></i></span>
            <span>{{ __('messages.my_payrolls') }}</span>
        </a>
    </div>
    @endmodule

    {{-- Services --}}
    @module('Services',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('services*') ? 'active' : '' }}"
           href="{{ route('services.index') }}">
            <span class="menu-icon"><i class="fas fa-box"></i></span>
            <span class="menu-title">{{ __('messages.services') }}</span>
        </a>
    </div>
    @endmodule

    {{-- SMS --}}
    @module('SMS',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('sms*') ? 'active' : '' }}" href="{{ route('sms.index') }}">
            <span class="menu-icon"><i class="fas fa fa-sms"></i></span>
            <span class="menu-title">{{ __('messages.sms.sms') }}</span>
        </a>
    </div>
    @endmodule
    @endrole

    @role('Patient')

    @module('Appointments',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('appointments*') ? 'active' : '' }}"
           href="{{ route('appointments.index') }}">
            <span class="menu-icon"><i class="fas fa-calendar-check"></i></span>
            <span class="menu-title">{{ __('messages.appointments') }}</span>
        </a>
    </div>
    @endmodule

    @module('Bills',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/bills*') ? 'active' : '' }}"
           href="{{ url('employee/bills') }}">
            <span class="menu-icon"><i class="fa fa-rupee-sign"></i></span>
            <span class="menu-title">{{ __('messages.bills') }}</span>
        </a>
    </div>
    @endmodule

    {{--Diagnosis test Report--}}
    @module('Diagnosis Tests',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/patient-diagnosis-test*') ? 'active' : '' }}"
           href="{{ url('employee/patient-diagnosis-test') }}">
            <span class="menu-icon"><i class="fas fa-file-medical"></i></span>
            <span class="menu-title">{{ __('messages.patient_diagnosis_test.diagnosis_test') }}</span>
        </a>
    </div>
    @endmodule

    {{-- Documents--}}
    @module('Documents',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('documents*') ? 'active' : '' }}"
           href="{{ route('documents.index') }}">
            <span class="menu-icon"><i class="fas fa-file"></i></span>
            <span class="menu-title">{{ __('messages.documents') }}</span>
        </a>
    </div>
    @endmodule

    @module('Notice Boards',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/notice-board*') ? 'active' : '' }}"
           href="{{ url('employee/notice-board') }}">
            <span class="menu-icon"><i class="fas fa fa-cog"></i></span>
            <span class="menu-title">{{ __('messages.front_settings') }}</span>
            <span class="d-none">{{ __('messages.notice_boards') }}</span>
        </a>
    </div>
    @endmodule

    {{--ipds/opds--}}
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('patient/my-ipds*','opds*','patient/my-opds') ? 'active' : '' }}"
           href="{{ route('patient.ipd') }}"
           title="{{ __('messages.ipd_opd') }}">
    <span class="menu-icon">
        <i class="fas fa-notes-medical"></i>
    </span>
            <span class="menu-title">{{ __('messages.ipd_opd') }}</span>
            <span class="d-none">{{__('messages.ipd_patients')}}</span>
            <span class="d-none">{{__('messages.opd_patients')}}</span>
        </a>
    </div>

    @module('Invoices',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('employee/invoices*') ? 'active' : '' }}"
           href="{{ url('employee/invoices') }}">
            <span class="menu-icon"><i class="fas fa-file-invoice"></i></span>
            <span class="menu-title">{{ __('messages.invoices') }}</span>
        </a>
    </div>
    @endmodule

    {{-- Live Consultation --}}
    @module('Live Consultations',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('live-consultation*') ? 'active' : '' }}"
           href="{{ route('live.consultation.index') }}">
            <span class="menu-icon"><i class="fa fa-video"></i></span>
            <span class="menu-title">{{ __('messages.live_consultations') }}</span>
        </a>
    </div>
    @endmodule

    @module('Patient Cases',$modules)
    <div class="menu-item side-menus">
        <a class="menu-link menu-text-wrap {{ Request::is('patient/my-cases*') ? 'active' : '' }}"
           href="{{ url('patient/my-cases') }}">
            <span class="menu-icon"><i class="fa fa-briefcase-medical"></i></span>
            <span class="menu-title">{{ __('messages.patients_cases') }}</span>
        </a>
    </div>
    @endmodule

@module('Patient Admissions',$modules)
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('employee/patient-admissions*') ? 'active' : '' }}"
       href="{{ url('employee/patient-admissions') }}">
        <span class="menu-icon"><i class="fas fa-history"></i></span>
        <span class="menu-title">{{ __('messages.patient_admissions') }}</span>
    </a>
</div>
@endmodule

@module('Prescriptions',$modules)
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('patient/my-prescriptions*') ? 'active' : '' }}"
       href="{{ route('prescriptions.list') }}">
        <span class="menu-icon"><i class="fas fa-prescription"></i></span>
        <span class="menu-title">{{ __('messages.prescriptions') }}</span>
    </a>
</div>
@endmodule

@module('Vaccinated Patients',$modules)
<div class="menu-item side-menus">
    <a class="menu-link menu-text-wrap {{ Request::is('patient/my-vaccinated*') ? 'active' : '' }}"
       href="{{ route('patient.vaccinated') }}">
        <span class="menu-icon"><i class="fas fa-head-side-mask"></i></span>
        <span class="menu-title">{{ __('messages.vaccinated_patients') }}</span>
    </a>
</div>
@endmodule
@endrole
@endif

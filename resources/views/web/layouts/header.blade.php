@if(session('status'))
    <div class="alert alert-success m-0 contactSuccess text-center"><h5 class="m-0">{{ session('status') }}</h5></div>
@section('page_scripts')
    <script src="{{ mix('assets/js/web/web.js') }}"></script>
@endsection
@endif
{{-- News container starts --}}
@if(!empty($todayNotice))
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 m-0">
                <h5 class="p-0 m-0 py-1 news">
                    <marquee>{{ $todayNotice->description }}</marquee>
                </h5>
            </div>
        </div>
    </div>
@endif
{{-- News container ends --}}

<div class="container-fluid nav-bg">
    <div class="row">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand pl-3" href="{{ url('/') }}">
                    <img src="{{ asset('web/img/logo.jpg') }}" class="d-inline-block align-top img-fluid h-40px"
                         alt="hms-logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto font-weight-bold">
                        <li class="nav-item active">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                               href="{{ url('/') }}">{{ __('web.home') }}</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link {{ Request::is('appointment') ? 'active' : '' }}"
                               href="{{ route('appointment') }}">{{ __('messages.appointments') }}</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}"
                               href="{{ route('contact') }}">{{ __('messages.contact_us') }}</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}"
                               href="{{ route('aboutUs') }}">{{ __('web.about_us') }}</a>
                        </li>
                        <li class="nav-item active">
                            <div class="d-flex align-items-stretch">
                                <div class="topbar-item cursor-pointer symbol symbol-30px symbol-md-35px nav-link"
                                     data-kt-menu-trigger="hover"
                                     data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                    <span class="menu-title"><i
                                                class="fas fa-language language-icon"></i> <a>{{ getCurrentLanguageName() }} </a></span>
                                </div>
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px "
                                    data-kt-menu="true">
                                    <div class="menu-item px-5 language-name" data-kt-menu-trigger="hover"
                                         data-kt-menu-placement="left-start" data-kt-menu-flip="bottom">
                                        <div class="language-contents nav-item active">
                                            @foreach(getLanguages() as $key => $value)
                                                @if(checkLanguageSession() != $key)
                                                    <a href="javascript:void(0)"
                                                       class="language-menu languageSelection menu-link px-5"
                                                       data-prefix-value="{{ $key }}">{{ strtoupper($value) }}</a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @auth
                            @role('Admin')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm bg-danger text-white fs-5 py-2 wow bounceIn"
                                   data-wow-delay="0.4s"
                                   href="{{ route('dashboard') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Patient')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm bg-danger text-white fs-5 py-2 wow bounceIn"
                                   data-wow-delay="0.4s"
                                   href="{{ url('patient/my-cases') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Doctor')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm bg-danger text-white fs-5 py-2 wow bounceIn"
                                   data-wow-delay="0.4s"
                                   href="{{ url('employee/doctor') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Nurse')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm bg-danger text-white fs-5 py-2 wow bounceIn"
                                   data-wow-delay="0.4s"
                                   href="{{ url('bed-types') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Receptionist')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm bg-danger text-white fs-5 py-2 wow bounceIn"
                                   data-wow-delay="0.4s"
                                   href="{{ url('appointments') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Pharmacist')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm bg-danger text-white fs-5 py-2 wow bounceIn"
                                   data-wow-delay="0.4s"
                                   href="{{ url('employee/doctor') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Accountant')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm bg-danger text-white fs-5 py-2 wow bounceIn"
                                   data-wow-delay="0.4s"
                                   href="{{ url('accounts') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Case Manager')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm bg-danger text-white fs-5 py-2 wow bounceIn"
                                   data-wow-delay="0.4s"
                                   href="{{ url('employee/doctor') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                            @role('Lab Technician')
                            <li class="nav-item mt-1">
                                <a class="login btn btn-sm bg-danger text-white fs-5 py-2 wow bounceIn"
                                   data-wow-delay="0.4s"
                                   href="{{ url('employee/doctor') }}">{{ getLoggedInUser()->full_name }}</a>
                            </li>
                            @endrole
                        @else
                            <li class="nav-item">
                                <a class="login btn btn-sm bg-danger text-white fs-5 py-2 wow bounceIn"
                                   data-wow-delay="0.4s"
                                   href="{{ route('login') }}">{{ __('web.login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="login btn btn-sm ms-lg-3 mt-lg-0 mt-3 bg-danger text-white fs-5 py-2 wow bounceIn"
                                   data-wow-delay="0.4s"
                                   href="{{ route('register') }}">{{ __('web.register') }}</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

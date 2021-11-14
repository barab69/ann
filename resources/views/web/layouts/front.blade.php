<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="{{config('app.name')}}">

    <meta name="keywords" content="Hospital Management System"/>

    <meta name="description" content="Hospital Management System | HMS"/>
    <meta name="author" content="hms.infyom.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('web/img/logo.jpg') }}" type="image/png">
    <link href="{{ asset('backend/css/vendor.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ mix('assets/css/infy-loader.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ mix('assets/css/home_custom.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/css/fonts.css') }}" rel="stylesheet" type="text/css"/>

    @yield('page_css')
    <link href="{{ asset('backend/css/3rd-party.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/css/3rd-party-custom.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ mix('assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>
    @yield('css')
</head>
<body>
<div class="infy-loader d-none" id="overlay-screen-lock">
    @include('loader')
</div>
@include('web.layouts.header')
@yield('content')
@include('web.layouts.footer')

<script src="{{ asset('backend/js/vendor.js') }}"></script>
<script src="{{ asset('backend/js/3rd-party-custom.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.alert').delay(5000).slideUp(300);
    });
    $(document).on('click', '.languageSelection', function () {
        let languageName = $(this).data('prefix-value');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            type: 'POST',
            url: '/change-language',
            data: {languageName: languageName},
            success: function () {
                location.reload();
            },
        });
    });
</script>
@yield('page_scripts')
@yield('scripts')
</body>
</html>

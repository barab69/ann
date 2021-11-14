@extends('layouts.app')
@section('title')
    {{ __('messages.front_settings') }}
@endsection
@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/css/sub-header.css') }}">
@endsection
@section('content')
    @include('flash::message')
    <div class="card">
        <div class="card-body pt-0 fs-6 py-8 px-8  px-lg-10 text-gray-700">
            @yield('section')
        </div>
    </div>
@endsection
@section('page_scripts')
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let isEdit = true;
        let moduleUrl = '{{ route('module.index') }}';
        let imageValidation = '{{  __('messages.setting.image_validation') }}';
        let defaultDocumentImageUrl = "{{ asset('assets/img/default_image.jpg') }}";
    </script>
    <script src="{{ mix('assets/js/front_settings/front_settings.js') }}"></script>
@endsection

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            你好。{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        这只是主页
    </div>
</x-app-layout> --}}

@extends('frontend.frontend_master')

@section('frontend_content')
<div class="body-content">
    <div class="container">
        <div class="row">
                @include('frontend.profile.user-sidebar')
            <div class="col-md-10">
                <div style="margin-bottom:3rem;">欢迎来到{{ env('APP_NAME') }} <strong>{{ Auth::user()->name }}</strong></div>
                @yield('userdashboard_content')
            </div>
        </div>
    </div>
</div>
@endsection

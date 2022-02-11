@extends('frontend.frontend_master')


@section('title')
    {{ env('SHOP_NAME') }}  Fashion - COD Page
@endsection



@section('frontend_style')

@endsection



@section('frontend_content')
<div style="min-height:50vh;margin:0 auto; width:1024px;">
    {{ $page }}
</div>
@endsection



@section('frontend_script')

@endsection


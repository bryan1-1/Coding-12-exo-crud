@extends('layouts.index')

@section('content')
    @include('layouts.intro')
    @include('layouts.service')
    @include('layouts.portfolio')
    @include('layouts.testimonial')
    @include('layouts.team')
    @include('layouts.contact')
@stop

{{-- 
@section('intro')
    @include('layouts.intro')
@endsection

@section('service')
    @include('layouts.service')
@endsection

@section('portfolio')
    @include('layouts.portfolio')
@endsection

@section('testimonial')
    @include('layouts.testimonial')
@endsection

@section('team')
    @include('layouts.team')
@endsection

@section('contact')
    @include('layouts.contact')
@endsection --}}
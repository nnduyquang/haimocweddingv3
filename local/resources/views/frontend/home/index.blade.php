@extends('frontend.master')
@section('title')
    Hải Mộc Wedding
@stop
@section('description')
    Hải Mộc Wedding
@stop
@section('keywords')
    Hải Mộc Wedding
@stop
@section('container')
    @include('frontend.common.slider')
    @include('frontend.home.h_news')
    @include('frontend.home.h_sales')
    @include('frontend.home.h_albums')
    {{--@include('frontend.home.h_locations')--}}
@stop
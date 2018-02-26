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
    <div class="container">
        <div class="row">
            @include('frontend.news.detail.n_d_info')
            @include('frontend.news.detail.n_d_sidebar')
        </div>
    </div>
@stop
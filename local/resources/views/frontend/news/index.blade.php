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
    <div class="row no-gutters">
        <div class="col-md-12">
            {{ Html::image('images/sliders/slider_1.jpg','',array('class'=>'slideshow','style'=>'width:100%')) }}
        </div>
    </div>
    @include('frontend.news.n_menu')
    <div class="container">
        <div class="row">
            @include('frontend.news.n_info')
            @include('frontend.news.n_sidebar')
        </div>
    </div>
@stop
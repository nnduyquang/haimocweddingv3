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
    <div id="a_detail">
        <div class="row no-gutters">
            <div class="col-md-12">
                {{ Html::image('images/sliders/slider_1.jpg','',array('class'=>'slideshow')) }}
            </div>
        </div>
        <div class="col-md-12 text-center">
            <h1 class="a_d_title">Tên Ảnh Cưới</h1>
        </div>
        <div class="container">
            <div class="row">
                @include('frontend.album.detail.a_d_info')
                @include('frontend.album.detail.a_d_sidebar')
            </div>
        </div>
    </div>
@stop
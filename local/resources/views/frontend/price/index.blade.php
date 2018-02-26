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
    <div id="price">
        <div class="row no-gutters">
            <div class="col-md-12">
            {{ Html::image('images/sliders/slider_1.jpg','',array('class'=>'slideshow')) }}
            </div>
        </div>
        <div class="container">
            @include('frontend.price.p_info')
        </div>
    </div>
@stop
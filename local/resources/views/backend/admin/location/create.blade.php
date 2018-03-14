@extends('backend.admin.master')
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Tạo Mới Địa Điểm</h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('location.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'location.store','method'=>'POST')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="col-md-6">
                    <strong>Tên Địa Điểm:</strong>
                    {!! Form::text('name',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Hình Hiển Thị Trên PC: </strong>
                    {!! Form::text('image_pc', null, array('class' => 'form-control','id'=>'pathImagePCLocation')) !!}
                    <br>
                    {!! Form::button('Tìm', array('id' => 'btnBrowseImagePCLocation','class'=>'btn btn-primary')) !!}
                </div>
                <div class="form-group">
                    {{ Html::image('','',array('id'=>'showHinhPC','class'=>'show-image'))}}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Hình Hiển Thị Trên Mobile: </strong>
                    {!! Form::text('image_mobile', null, array('class' => 'form-control','id'=>'pathImageMobileLocation')) !!}
                    <br>
                    {!! Form::button('Tìm', array('id' => 'btnBrowseImageMobileLocation','class'=>'btn btn-primary')) !!}
                </div>
                <div class="form-group">
                    {{ Html::image('','',array('id'=>'showHinhMobile','class'=>'show-image'))}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Kích Hoạt:</strong>
                    <input name="is_active" data-on="Có" data-off="Không" type="checkbox" data-toggle="toggle">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Thứ tự:</strong>
                    {!! Form::text('order',null, array('placeholder' => 'Thứ tự','class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="col-md-12" style="text-align:  center;">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Tạo Mới Địa Điểm</button>
        </div>
    </div>

    {!! Form::close() !!}
@stop
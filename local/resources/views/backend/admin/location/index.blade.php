@extends('backend.admin.master')
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 margin-tb">
        <div class="row">
            <div class="col-md-8">
                <h2>Quản Lý Địa Điểm</h2>
            </div>
            <div class="col-md-4 text-right">
                @permission(('location-create'))
                <a class="btn btn-success" href="{{ route('location.create') }}"> Tạo Mới Địa Điểm</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {!! Form::open(array('route' => 'location.search','method'=>'POST','id'=>'formSearchLocation')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                {!! Form::text('txtSearch',null, array('class' => 'form-control','id'=>'txtSearch')) !!}
            </div>
            <div class="col-md-6">
                {!! Form::submit('Tìm Kiếm', array('id' => 'btnSearchLocation','class'=>'btn btn-primary')) !!}
            </div>

        </div>
    </div>
    {!! Form::close() !!}
    @if(!empty($keywords))
        <div id="showKeySearch" class="col-md-12">
            <div class="wrap-search">
                <i class="fa fa-caret-right" aria-hidden="true"></i>{{$keywords}} <a
                        href="{{ route('location.search') }}">X</a>
            </div>
        </div>
        {{ Form::hidden('hdKeyword', $keywords) }}
    @endif
    <div class="col-md-12">
        <table class="table table-bordered">
            <tr>
                <th>TT</th>
                <th></th>
                <th>Tên</th>
                <th>Ngày Đăng</th>
                <th>Ngày Cập Nhật</th>
                <th>Tình Trạng</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($locations as $key => $data)
                <td>{{ ++$i }}</td>
                <td>{{Form::checkbox('id[]',$data->id)}}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->updated_at }}</td>
                <td>{{$data->is_active}}</td>
                <td>
                    @permission(('location-edit'))
                    <a class="btn btn-primary" href="{{ route('location.edit',$data->id) }}">Cập Nhật</a>
                    @endpermission
                    @permission(('location-delete'))
                    {!! Form::open(['method' => 'DELETE','route' => ['location.destroy', $data->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endpermission
                </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{--{!! $pages->links() !!}--}}
@stop
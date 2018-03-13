<div id="lo_header" class="container-fluid">
    <div class="container">
        <div class="row">
            <div id="lo_header_left" class="col-md-7">
                <div class="row">
                    <div class="col-md-3">
                        <h1 class="title">Địa Điểm</h1>
                    </div>
                    <div class="location_items col-md-9">
                        <div class="row">
                            <div class="col-md-3"><a href="#">Hokkaodo</a></div>
                            <div class="col-md-3"><a href="#">Hokkaodo</a></div>
                            <div class="col-md-3"><a href="#">Hokkaodo</a></div>
                            <div class="col-md-3"><a href="#">Hokkaodo</a></div>
                            <div class="col-md-3"><a href="#">Hokkaodo</a></div>
                            <div class="col-md-3"><a href="#">Hokkaodo</a></div>
                            <div class="col-md-3"><a href="#">Hokkaodo</a></div>
                            <div class="col-md-3"><a href="#">Hokkaodo</a></div>
                            <div class="col-md-3"><a href="#">Hokkaodo</a></div>
                            <div class="col-md-3"><a href="#">Hokkaodo</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="lo_header_right" class="col-md-5 p-0">
                {{--{{Html::image('images/temps/tmp_locations_right.jpg','',array('class'=>'locations_right_img'))}}--}}
            </div>
        </div>
    </div>
</div>
<div id="lo_albums">
    <div class="container">
        <div class="col-md-12 list-album">
            <div class="row">
                {{--@foreach($albums as $key=>$data)--}}
                {{--<div class="col-md-4 one-item">--}}
                {{--<div class="row">--}}
                {{--<a href="{{URL::to('album/'.$data->categoryAlbums->path.'/'.$data->path)}}">--}}
                {{--{{ Html::image($data->image_cover,'',array('class'=>'')) }}--}}
                {{--<div class="item-info">--}}
                {{--<p class="title">{{$data->name}}</p>--}}
                {{--<p class="btn">Xem Chi Tiết</p>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="col-sm-4 py-2 one-item">
                    <a href="{{URL::to('albumc/path')}}">
                        <div class="card h-100">
                            {{ Html::image('images/temps/tmp_h_albums.png','',array('class'=>'')) }}
                            <div class="card-body">
                                <p class="card-title">Ảnh Cưới Đức Và Ngân</p>
                            </div>
                            <div class="card-footer">
                                <p class="btn">Xem Chi Tiết</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 py-2 one-item">
                    <a href="{{URL::to('albumc/path')}}">
                        <div class="card h-100">
                            {{ Html::image('images/temps/tmp_h_albums.png','',array('class'=>'')) }}
                            <div class="card-body">
                                <p class="card-title">Ảnh Cưới Đức Và Ngân Ảnh Cưới Đức Và Ngân</p>
                            </div>
                            <div class="card-footer">
                                <p class="btn">Xem Chi Tiết</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 py-2 one-item">
                    <a href="{{URL::to('albumc/path')}}">
                        <div class="card h-100">
                            {{ Html::image('images/temps/tmp_h_albums.png','',array('class'=>'')) }}
                            <div class="card-body">
                                <p class="card-title">Ảnh Cưới Đức Và Ngân</p>
                            </div>
                            <div class="card-footer">
                                <p class="btn">Xem Chi Tiết</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 py-2 one-item">
                    <a href="{{URL::to('albumc/path')}}">
                        <div class="card h-100">
                            {{ Html::image('images/temps/tmp_h_albums.png','',array('class'=>'')) }}
                            <div class="card-body">
                                <p class="card-title">Ảnh Cưới Đức Và Ngân</p>
                            </div>
                            <div class="card-footer">
                                <p class="btn">Xem Chi Tiết</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 py-2 one-item">
                    <a href="{{URL::to('albumc/path')}}">
                        <div class="card h-100">
                            {{ Html::image('images/temps/tmp_h_albums.png','',array('class'=>'')) }}
                            <div class="card-body">
                                <p class="card-title">Ảnh Cưới Đức Và Ngân</p>
                            </div>
                            <div class="card-footer">
                                <p class="btn">Xem Chi Tiết</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 py-2 one-item">
                    <a href="{{URL::to('albumc/path')}}">
                        <div class="card h-100">
                            {{ Html::image('images/temps/tmp_h_albums.png','',array('class'=>'')) }}
                            <div class="card-body">
                                <p class="card-title">Ảnh Cưới Đức Và Ngân</p>
                            </div>
                            <div class="card-footer">
                                <p class="btn">Xem Chi Tiết</p>
                            </div>
                        </div>
                    </a>
                </div>

                {{--@endforeach--}}
            </div>
        </div>
        {{--<div class="col-md-12 view-all">--}}
        {{--<a href="{{URL::to('album')}}" >Xem Tất Cả >></a>--}}
        {{--</div>--}}
    </div>
</div>

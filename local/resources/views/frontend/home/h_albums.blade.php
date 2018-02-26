<div id="h_albums">
    <div class="container">
        <h3>Album Galerry</h3>
        <div class="col-md-12">
            <ul class="album-category">
                {{--@foreach($categoryAlbum as $key=>$data)--}}
                <li><a href="{{URL::to('album/path')}}">categoryAlbum</a></li>
                <li><a href="{{URL::to('album/path')}}">categoryAlbum</a></li>
                <li><a href="{{URL::to('album/path')}}">categoryAlbum</a></li>
                {{--@endforeach--}}
                {{--<li><a href="#">Phóng Sự Ngày Cưới</a></li>--}}
                {{--<li><a href="#">Album Gia Đình - Em Bé</a></li>--}}
            </ul>
        </div>
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

                {{--@endforeach--}}
            </div>
        </div>
        {{--<div class="col-md-12 view-all">--}}
        {{--<a href="{{URL::to('album')}}" >Xem Tất Cả >></a>--}}
        {{--</div>--}}
    </div>
</div>

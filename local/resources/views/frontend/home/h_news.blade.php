<div id="h_news">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 top-info">
                        <div class="row">
                            <div class="col-sm-4 py-2 one-item">
                                <a href="{{URL::to('tin-tuc/path')}}">
                                    <div class="h-100">
                                        {{ Html::image('images/temps/tmp_h_news.jpg','',array('class'=>'')) }}
                                        <div class="card-body">
                                            <h4 class="card-title">This is a longer card with supporting text below as a
                                                natural lead-in
                                                to</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 py-2 one-item">
                                <a href="{{URL::to('tin-tuc/path')}}">
                                    <div class="h-100">
                                        {{ Html::image('images/temps/tmp_h_news.jpg','',array('class'=>'')) }}
                                        <div class="card-body">
                                            <h4 class="card-title">This is a longer card with supporting text below as a
                                                natural lead-in. This is a longer card with supporting text below as a
                                                natural lead-in
                                                to</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 py-2 one-item">
                                <a href="{{URL::to('tin-tuc/path')}}">
                                    <div class="h-100">
                                        {{ Html::image('images/temps/tmp_h_news.jpg','',array('class'=>'')) }}
                                        <div class="card-body">
                                            <h4 class="card-title">This is a longer card with supporting text below as a
                                                natural lead-in
                                                to</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            {{--@endforeach--}}
                        </div>
                    </div>
                    <div class="col-md-12 bottom-info">
                        <h3>Bộ Sưu Tập Ảnh Cưới</h3>
                        <p>Với hơn 5 năm trong nghề, Hải Mộc Wedding đã cho ra đời nhiều bộ ảnh cưới có những
                            phong cách độc đáo</p>
                        <a href="{{URL::to('album/album-ngoai-canh')}}">Xem Thêm</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="wrap-item">
                        <h3>Phong Cách Cưới 2017</h3>
                        {{--@foreach($newsOther as $key=>$data)--}}
                        <a href="{{URL::to('tin-tuc/path')}}">
                            <div class="one-item">
                                <p>TITLE</p>
                            </div>
                        </a>
                        <a href="{{URL::to('tin-tuc/path')}}">
                            <div class="one-item">
                                <p>TITLE</p>
                            </div>
                        </a>
                        <a href="{{URL::to('tin-tuc/path')}}">
                            <div class="one-item">
                                <p>TITLE</p>
                            </div>
                        </a>
                        <a href="{{URL::to('tin-tuc/path')}}">
                            <div class="one-item">
                                <p>TITLE</p>
                            </div>
                        </a> <a href="{{URL::to('tin-tuc/path')}}">
                            <div class="one-item">
                                <p>TITLE</p>
                            </div>
                        </a>

                        {{--@endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
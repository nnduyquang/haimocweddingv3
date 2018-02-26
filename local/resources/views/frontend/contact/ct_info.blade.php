<div id="ct_info">
    <div class="row">
        <div class="col-md-12">
            <div class="ct_info_map">
                <iframe width="100%" height="450" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:EjozOCBUw7RuIFRo4bqldCDEkOG6oW0sIFRoYW5oIEtow6osIMSQw6AgTuG6tW5nLCBWaeG7h3QgTmFt&key=AIzaSyCqkz5GVTSabhXl3ONdVXrEqVzUOOcK1GQ"
                        allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ct_info_form">
                {!! Form::open(array('method'=>'POST')) !!}
                <div class="row">
                    <div class="col-md-6">
                        {{ Form::text('name','',  array('placeholder'=>'Tên Của Bạn')) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::email('email','',  array('placeholder'=>'Email Của Bạn')) }}
                    </div>
                    <div class="col-md-12">
                        {{ Form::text('phone','',  array('placeholder'=>'Số Điện Thoại')) }}
                    </div>
                    <div class="col-md-12">
                        {{ Form::textarea('notes', null,array('placeholder'=>'Nội Dung','rows'=>'20')) }}
                    </div>
                    <div class="col-md-12 text-center">
                        {{Form::button('Gửi',array('class'=>'ct_info_form_btn'))}}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="ct_info_address">
                <ul>
                    <li><i class="fas fa-home"></i><span>Địa chỉ: </span>38 Tôn Thất Đạm, Thanh Khê Đà Nẵng</li>
                    <li><i class="fas fa-phone"></i><span>Hotline: </span>0919.567.177</li>
                    <li><i class="fas fa-envelope"></i><span>Email: </span>haimocwedding@gmail.com</li>
                    <li><i class="fab fa-facebook"></i><span>Facebook: </span><a href="http://www.fb.me/haimocweddingchupanhcuoidep">fb.me/haimocweddingchupanhcuoidep</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
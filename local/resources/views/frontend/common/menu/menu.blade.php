<div class="container">
    <div id="menu">
        <div class="menu-wrap">
            <div class="menu-right-contact">
                <a href="{{URL::to('lien-he')}}">
                    {{ Html::image('images/all/img-contact.jpg','',array('class'=>'')) }}
                </a>
            </div>
            <div class="menu-left-info">
                <div class="menu-top-info">
                    <p>Hải Mộc Wedding</p>
                    <p>Hải Hãy Ghi Lại Khoảnh Khắc Của Bạn</p>
                </div>
                <div class="menu-bottom-info">
                    <ul class="menu-boottom-info-left">
                        <li class="li-normal"><a href="{{URL::to('gioi-thieu')}}">Giới Thiệu</a></li>
                        <li class="has-item-down"><a href="#">Album</a>
                            <ul>
                                <li><a href="{{URL::to('album/album-ngoai-canh')}}">Album Ngoại
                                        Cảnh</a></li>
                                <li><a href="{{URL::to('album/phong-su-ngay-cuoi')}}">Phóng Sự Ngày
                                        Cưới</a>
                                </li>
                                <li><a href="{{URL::to('album/album-gia-dinh-em-be')}}">Album Gia
                                        Đình - Em Bé</a></li>
                            </ul>
                        </li>
                        <li class="li-normal"><a href="">Áo Cưới</a></li>
                    </ul>
                    <ul class="menu-boottom-info-right">
                        <li class="has-item-down"><a href="#">Bảng Giá</a>
                            <ul>
                                <li><a href="{{URL::to('album/album-ngoai-canh')}}">Chụp Ảnh Cưới Ngoại Cảnh</a></li>
                                <li><a href="{{URL::to('album/phong-su-ngay-cuoi')}}">Chụp Phóng Sự Ngày
                                        Cưới</a>
                                </li>
                                <li><a href="{{URL::to('album/album-gia-dinh-em-be')}}">Chụp Gia
                                        Đình - Em Bé</a></li>
                            </ul>
                        </li>
                        <li class="li-normal"><a href="">Khuyến Mãi</a></li>
                        <li class="li-normal"><a href="">Tin Tức</a></li>
                    </ul>
                </div>
            </div>
            <div class="logo">
                <a href="{{URL::to('/')}}">
                    {{ Html::image('images/logo/logo_office_2.png','',array('class'=>'')) }}
                </a>
            </div>
        </div>
    </div>
</div>
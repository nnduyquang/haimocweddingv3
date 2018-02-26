var plugins = {
    slider: $('#slider'),
    footerBackToTop: $('.backToTop'),
    fancybox:$('.fancybox'),
    gridAlbum: $('.a_d_info_grid_album'),
};
$(document).ready(function () {
    function runSlider() {
        plugins.slider.nivoSlider({
            effect: 'fade',
            animSpeed: 500,
            pauseTime: 3000,
            pauseOnHover: true,
            controlNav: false,
        });
    }
    function footer1BackTopTop() {
        plugins.footerBackToTop.click(function () {
            $('html, body').animate({scrollTop: 0}, 'slow');
            return false;
        });
    }
    function runFancybox(){
        plugins.fancybox.fancybox();
    }
    function runGridAlbum() {
        var $grid = plugins.gridAlbum.masonry({
            itemSelector: '.grid-item',
            percentPosition: true,
            columnWidth: '.grid-sizer'
        });
        $grid.imagesLoaded().progress(function () {
            $grid.masonry();
        });
        var isOpen = true;
        $('.choose-dd').click(function () {
            if (isOpen) {
                $('ul.ul-dd').addClass('open-dd');
                $('.fa-plus').css('display','none');
                $('.fa-minus').css('display','block');
                isOpen = false;
            } else {
                $('ul.ul-dd').removeClass('open-dd');
                $('.fa-plus').css('display','block');
                $('.fa-minus').css('display','none');
                isOpen = true;
            }
        });


    }


    // --------------------------------------------------------------------------

    if (plugins.slider.length) {
        runSlider();
    }
    if (plugins.footerBackToTop.length) {
        footer1BackTopTop();
    }
    if(plugins.fancybox.length){
        runFancybox();
    }
    if (plugins.gridAlbum.length) {
        runGridAlbum();
    }

});
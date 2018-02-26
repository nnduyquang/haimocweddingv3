let mix = require('laravel-mix');
mix.setPublicPath('../');
mix.setResourceRoot('../');

mix.styles([
    //JS DÙNG CHUNG CHO FRONEND VÀ BACKEND
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
    'bower_components/fancybox/dist/jquery.fancybox.min.js',
], '../js/core.common.js')
    .styles([
        'bower_components/nivo-slider/jquery.nivo.slider.pack.js',
        'bower_components/imagesloaded/imagesloaded.pkgd.min.js',
        'bower_components/masonry-layout/dist/masonry.pkgd.min.js',
    ], '../js/core.frontend.js')
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css',
        'bower_components/fancybox/dist/jquery.fancybox.min.css',
    ], '../css/core.common.css')
    .styles([
        'bower_components/nivo-slider/nivo-slider.css',
    ], '../css/core.frontend.css')
    // .copy([
    //     'bower_components/font-awesome/web-fonts-with-css/webfonts/**'
    // ], '../webfonts')
    // .copy([
    //     'bower_components/nivo-slider/themes',
    // ], '../css/themes', false)
    .styles('resources/assets/js/scripts.js', '../js/scripts.js')
    .sass('resources/assets/sass/frontend.scss', '../css/frontend.css').options({processCssUrls: false});

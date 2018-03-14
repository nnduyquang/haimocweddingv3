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
        'bower_components/admin-lte/dist/js/adminlte.min.js',
        // 'bower_components/bootstrap-toggle/js/bootstrap-toggle.min.js',
        'bower_components/gijgo/dist/combined/js/gijgo.min.js',

    ], '../js/core.backend.js')
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css',
        'bower_components/fancybox/dist/jquery.fancybox.min.css',
    ], '../css/core.common.css')
    .styles([
        'bower_components/nivo-slider/nivo-slider.css',
    ], '../css/core.frontend.css')
    //CSS CORE BACKEND
    .styles([
        'bower_components/admin-lte/dist/css/AdminLTE.min.css',
        'bower_components/admin-lte/dist/css/skins/skin-blue.min.css',
        // 'bower_components/bootstrap-toggle/css/bootstrap-toggle.min.css',
        'bower_components/gijgo/dist/combined/css/gijgo.min.css',

    ], '../css/core.backend.css')
    // .copy([
    //     'bower_components/nivo-slider/themes',
    // ], '../css/themes', false)
    .styles('resources/assets/js/scripts.js', '../js/scripts.js')
    .sass('resources/assets/sass/frontend.scss', '../css/frontend.css').options({processCssUrls: false})
    .sass('resources/assets/sass/backend.scss', '../css/backend.css')

    .styles([
        'resources/assets/sass/login1.scss',
    ], '../css/login.css')

    .styles([
        'resources/assets/js/ulti.js',
        'resources/assets/js/login1.js',
    ], '../js/login.js')

    .styles([
        'resources/assets/js/ulti.js',
        // 'resources/assets/js/be.config.slider.js',
        // 'resources/assets/js/be.emp.js',
        'resources/assets/js/be.page.js',
        // 'resources/assets/js/be.config.email.js',
        'resources/assets/js/be.post.js',
        // 'resources/assets/js/be.tuyendung.js',
        'resources/assets/js/be.menu.js',
        'resources/assets/js/be.location.js',
    ], '../js/backend.js')
    // .copy([
    //     'bower_components/font-awesome/web-fonts-with-css/webfonts/**'
    // ], '../webfonts')

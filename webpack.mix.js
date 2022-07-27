const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/web/web.scss', 'public/css')
    .sourceMaps();

// Fontawesome free
mix.copy('node_modules/fontawesome-free', 'public/assets/fontawesome-free');
// Jquery
mix.copy('node_modules/jquery/dist/jquery.min.*', 'public/assets/jquery/');
// Bootstrap
mix.copy('node_modules/bootstrap/dist/css/*.min.*', 'public/assets/bootstrap/css/');
mix.copy('node_modules/bootstrap/dist/js/*.min.*', 'public/assets/bootstrap/js/');
// Owl Carroussel
mix.copy('node_modules/owl.carousel/dist/owl.carousel.min.js', 'public/assets/owl-carousel/js/owl.carousel.min.js');
mix.copy('node_modules/owl.carousel/dist/assets/*.min.*', 'public/assets/owl-carousel/css/');

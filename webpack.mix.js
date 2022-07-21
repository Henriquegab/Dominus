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

mix.sass('resources/sass/web/web.scss', 'public/css')
    .version()

// Jquery
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/assets/jquery/jquery.min.js')

// OWL CARROUSEL
mix.copy('node_modules/owl.carousel/dist/assets/owl.carousel.min.css', 'public/assets/owl-carousel/css/owl.carousel.min.css')
    .copy('node_modules/owl.carousel/dist/assets/owl.theme.default.min.css', 'public/assets/owl-carousel/css/owl.theme.default.min.css')
    .copy('node_modules/owl.carousel/dist/owl.carousel.js', 'public/assets/owl-carousel/js/owl.carousel.js')

// Bootstrap
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/assets/bootstrap/css/bootstrap.min.css')
   .copy('node_modules/bootstrap/dist/css/bootstrap-grid.min.css', 'public/assets/bootstrap/css/bootstrap-grid.min.css')
   .copy('node_modules/bootstrap/dist/css/bootstrap-reboot.min.css', 'public/assets/bootstrap/css/bootstrap-reboot.min.css')
   .copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/assets/bootstrap/js/bootstrap.bundle.min.js')

// Fontawesome
mix.copy('node_modules/fontawesome-free/css/all.min.css', 'public/assets/fontawesome-free/css/all.min.css')
   .copy('node_modules/fontawesome-free/js/all.min.js', 'public/assets/fontawesome-free/js/all.min.js')
   .copy('node_modules/fontawesome-free/webfonts', 'public/assets/fontawesome-free/webfonts')

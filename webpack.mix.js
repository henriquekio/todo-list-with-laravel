let mix = require('laravel-mix');

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

mix.copy('node_modules/bootstrap/dist', 'public/libs/bootstrap')
    .copy('node_modules/sweetalert/dist', 'public/libs/sweetalert')
    .copy('node_modules/jquery/dist', 'public/libs/jquery');

mix.copy('resources/assets/img', 'public/images');

mix.sass('resources/assets/sass/main.sass', 'public/css/style.min.css');

mix.js('resources/assets/js/main.js', 'public/js/main.js');
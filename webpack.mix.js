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
   .js('resources/js/custom.js', 'public/js')
   .js('resources/js/jquery.min.js', 'public/js')
   .js('resources/js/jquery.sticky-sidebar.min.js', 'public/js')
   .js('resources/js/popper.min.js', 'public/js')
   .js('resources/js/slick.min.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

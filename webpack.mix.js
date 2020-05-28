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
    .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
    'public/assets/js/jquery.min',
    'public/assets/js/breakpoints.min.js',
    'public/assets/js/browser.min.js',
    'public/assets/js/jquery.scrollex.min.js',
    'public/assets/js/jquery.scrolly.min.js',
    'public/assets/js/main.js',
    'public/assets/js/util.js'
], 'public/js/all.js');
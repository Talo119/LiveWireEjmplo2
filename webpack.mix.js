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

mix.scripts([
    'resources/js/jquery-3.5.1.slim.min.js',
    'resources/js/bootstrap.bundle.min.js',    
    'resources/js/bootstrap.js',    
    'resources/js/dashboard.js',    
], 'public/js/app.js')
    .styles([
        'resources/css/bootstrap.min.css',
        'resources/css/dashboard.css',        
        'resources/css/all.min.css',
        'resources/css/fontawesome.min.css',
    ], 'public/css/app.css');

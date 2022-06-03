const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/espana_comunidades.js', 'public/js')
    .js('resources/js/hotelLocations.js', 'public/js')
    .postCss('resources/css/header.css', 'public/css')
    .postCss('resources/css/base.css', 'public/css')
    .postCss('resources/css/commonslide.css', 'public/css')
    .postCss('resources/css/contact.css', 'public/css')
    .postCss('resources/css/csslider.css', 'public/css')
    .postCss('resources/css/footer.css', 'public/css')
    .postCss('resources/css/home.css', 'public/css')
    

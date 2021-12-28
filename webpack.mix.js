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

//  mix.webpackConfig({
//     externals: {
//       jquery: 'jQuery'
//     }
//   }); dashboards.js

mix.js('resources/js/app.js', 'public/js')
.js('resources/js/dashboards.js', 'public/js')
.js('resources/js/bootstrapjs/bootstrap.js', 'public/js')
.js('resources/js/jquery/jquery.min.js', 'public/js')
.js('resources/js/plyrjs/plyr.js', 'public/js')
.js('resources/js/webtorrent/webtorrent.min.js', 'public/js');

mix//.postCss('resources/css/bootstrap-icons.css', 'public/css')
   .postCss('resources/css/plyr.css', 'public/css');

mix.sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/dashboards.scss', 'public/css')
    .sass('resources/sass/bootstrap-icons/bootstrap-icons.scss','public/css')
    .sass('resources/sass/bootstrap/bootstrap.scss','public/css');

mix.copyDirectory('resources/fonts', 'public/fonts');
mix.copyDirectory('resources/images', 'public/images');
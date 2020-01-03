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
	.js('resources/js/edit_form_core.js', 'public/js/edit_form_core.js')
    .sass('resources/sass/app.scss', 'public/css')
	.styles('node_modules/parsleyjs/src/parsley.css', 'public/css/edit_form_core.css');

// 自動偵測檔案是否有更動，如有更動瀏覽器自動刷新
mix.browserSync('http://questionnaire.lwj');
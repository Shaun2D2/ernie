const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
       .scripts([
         './resources/assets/vendor/template-grayscale/js/grayscale.js',
         './node_modules/sweetalert/dist/sweetalert.min.js'
       ], './public/js/main.js')
       .webpack('app.js')
       .copy('./node_modules/font-awesome/fonts/', './public/fonts');
});

var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

var dir = {
    dest:  'public/assets',
    bower: '../bower'
};

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

elixir(function(mix) {
    mix.sass('app.scss', dir.dest + '/css')
       .scripts([
           dir.bower + '/material-design-lite/material.js'
       ], dir.dest + '/js/vendors.js')
       .browserify('app.js', dir.dest + '/js');

    mix.copy('resources/assets/bower/font-awesome/fonts', dir.dest + '/fonts');
});

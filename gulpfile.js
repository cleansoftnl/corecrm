var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    //Css & fonts copy
    mix.copy('bower_components/fontawesome/fonts', 'public/assets/fonts');
    mix.copy('bower_components/simple-line-icons/fonts', 'public/assets/fonts');
    mix.copy('resources/img', 'public/assets/img');
    mix.copy('resources/css', 'public/assets/css');
    mix.copy('bower_components/fontawesome/css/', 'public/assets/css');
    mix.copy('bower_components/simple-line-icons/css', 'public/assets/css');
    //Scripts copy
    mix.copy('bower_components/jquery/dist/jquery.min.js', 'public/assets/js/libs');
    mix.copy('bower_components/tether/dist/js/tether.min.js', 'public/assets/js/libs');
    mix.copy('bower_components/bootstrap/dist/js/bootstrap.min.js', 'public/assets/js/libs');
    mix.copy('bower_components/pace/pace.min.js', 'public/assets/js/libs');
    mix.copy('bower_components/Chart.js/dist/Chart.min.js', 'public/assets/js/libs');
    mix.copy('resources/js', 'public/assets/js');
});

var gulp = require('gulp');
var elixir = require('laravel-elixir');

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';

elixir(function(mix) {
    mix.less('main.less')
        .exec('./vendor/bin/jigsaw build', ['./source/**/*', '!./source/_assets/**/*'])
        .browserSync({
            server: { baseDir: 'build_local' },
            proxy: null,
            files: [ 'build_local/**/*' ]
        });
});

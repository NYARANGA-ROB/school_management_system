const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .vue({ version: 2 }) // 👈 Enable Vue 2 support
   .sass('resources/sass/app.scss', 'public/css');

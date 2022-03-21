// let mix = require('laravel-mix');


// /* Allow multiple Laravel Mix applications*/
// require('laravel-mix-merge-manifest');
// mix.mergeManifest();
// /*----------------------------------------*/

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/app.js', 'js/category.js')
    .sass( __dirname + '/Resources/assets/sass/app.scss', 'css/category.css');

if (mix.inProduction()) {
    mix.version();
}

const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.browserSync({
    port: 3000,
    proxy: "localhost:8000"
});

const publicAssetsPath = 'public/assets';

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

// build with vue
mix.js('resources/js/app.js', `${publicAssetsPath}/js/app.js`).vue();

// build sass
mix.sass('resources/sass/app.scss', `${publicAssetsPath}/css/app.css`)
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('./tailwind.config.js')
        ],
    }).version();

mix.disableNotifications();

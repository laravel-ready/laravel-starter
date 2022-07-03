const mix = require("laravel-mix");

mix.browserSync({ proxy: "localhost:8000" });

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

mix.js("resources/js/app.js", "public/dist/js")
    .postCss("resources/css/app.css", "public/dist/css", [
        //
    ])
    .disableNotifications();

require("laravel-mix-purgecss");

const path = require("path");
const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix
  .setPublicPath("./")
  .sass(path.resolve("sass/starter/auth.scss"), path.resolve("css/starter.css"))
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.config.js")],
  })
  .version();

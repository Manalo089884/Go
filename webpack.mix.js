const mix = require("laravel-mix");
<<<<<<< HEAD

=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
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
    .js("resources/js/ckeditor-classic.js", "public/dist/js")
    .js("resources/js/phil-address.js", "public/dist/js")
    .js("resources/js/phil-conv-address.js", "public/dist/js")
    .js("resources/js/ckeditor-inline.js", "public/dist/js")
    .js("resources/js/ckeditor-balloon.js", "public/dist/js")
    .js("resources/js/ckeditor-balloon-block.js", "public/dist/js")
    .js("resources/js/ckeditor-document.js", "public/dist/js")
    .js("resources/js/product-show.js", "public/dist/js")
<<<<<<< HEAD
    .js("resources/js/cart.vue.js", "public/dist/js")
=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    .css("public/dist/css/_app.css", "public/dist/css/app.css")
    .css("resources/css/_tailwind.css", "public/dist/css/build.css")
    .options({
        processCssUrls: false,
    })
    .copyDirectory("resources/json", "public/dist/json")
    .copyDirectory("resources/fonts", "public/dist/fonts")
    .copyDirectory("resources/images", "public/dist/images")
    .vue()
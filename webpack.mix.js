const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(['resources/js/my_js/menu_slide.js',

        'resources/js/my_js/dragAndDrop.js',
        'resources/js/my_js/image_zoom_on_click.js',
        'resources/js/my_js/jquery.inputmask.js',
        'resources/js/my_js/jquery.maskedinput.js',

        // 'resources/js/my_js/registration_form_validation.js',
        'resources/js/my_js/selected_images.js',
        'resources/js/my_js/user_password_change.js',
        'resources/js/my_js/user_profile_change.js'
    ],
    'public/js/all_js.js');
mix.js([
        'resources/js/my_js/log_on_error.js',
        'resources/js/my_js/registration_error.js'
    ],
    'public/js/errors_js.js');
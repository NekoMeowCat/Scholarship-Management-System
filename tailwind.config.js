import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        'node_modules/preline/dist/*.js',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                zilla: ['Zilla Slab'],
                figtree: ['Figtree'],
                bebas: ['Bebas Neue'],
                borel: ['Borel'],
                comforta: ['Comfortaa'],
                dmserif: ['DM Serif'],
                inter: ['Inter'],
                montserrat: ['Montserrat'],
                nunito: ['Nunito Sans'],
                oxygen: ['Oxygen'],
                poppins: ['Poppins'],
                raleway: ['Raleway'],
                roboto: ['Roboto'],
            },
        },
    },

    plugins: [
        require('preline/plugin'),
        require('flowbite/plugin'),
        // add any other plugins you might have here
    ],
};

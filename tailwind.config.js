import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'islamic-green': '#0f4d3c',
                'islamic-gold': '#e0a945',
                'islamic-bg': '#fcfbf8',
            },
            fontFamily: {
                serif: ['"Playfair Display"', ...defaultTheme.fontFamily.serif],
                sans: ['"Poppins"', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};

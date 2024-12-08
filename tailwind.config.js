import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/**/*.blade.php",
        "./resources/**/**/**/*.blade.php",
        "./resources/**/**/**/**/*.blade.php",
        "./resources/**/**/**/**/**/*.blade.php",
        "./resources/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            'ice': {
                100: '#e9f7d9',
                300: '#b1e2d4',
                500: '#9ebdbb',
                700: "#8d9496",
                900: '#6b737b',
            },
            'brique': {
                100: '#ffc6c3',
                300: '#F39995',
                500: '#CA615B',
                700: "#A2352F",
                900: '#75130E',
            },
        },

    },

    plugins: [
        require('@tailwindcss/forms'),
    ],
};

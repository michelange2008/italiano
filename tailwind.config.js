import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './src/**/*.{html,js}',
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
            'blue': '#1fb6ff',
            'purple': '#7e5bef',
            'pink': '#ff49db',
            'orange': '#ff7849',
            'green': '#13ce66',
            'yellow': '#ffc82c',
            'gray-dark': '#273444',
            'gray': '#8492a6',
            'gray-light': '#d3dce6',
            'white' : '#ffffff',
            'dark' : '000000',
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

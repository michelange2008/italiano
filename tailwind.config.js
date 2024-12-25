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
            'white' : "#ffffff",
            'black' : "#000000",
            'stack': {
                '50': '#f7f7f6',
                '100': '#e4e4e3',
                '200': '#c8c9c6',
                '300': '#a6a7a1',
                '400': '#92938d',
                '500': '#676963',
                '600': '#52534e',
                '700': '#454540',
                '800': '#383936',
                '900': '#31322f',
                '950': '#1a1a19',
            },
            'ice': {
                100: '#e9f7d9',
                300: '#b1e2d4',
                500: '#9ebdbb',
                700: "#8d9496",
                900: '#6b737b',
            },
            'terracotta': {
                '50': '#fef3f2',
                '100': '#fee5e2',
                '200': '#fecfca',
                '300': '#fcada5',
                '400': '#f87d71',
                '500': '#ef5344',
                '600': '#dc3626',
                '700': '#b92a1c',
                '800': '#a1281c',
                '900': '#7f261d',
                '950': '#450f0a',
            },
            'bay': {
                '50': '#f2f7f2',
                '100': '#e0ecdf',
                '200': '#c2d9c1',
                '300': '#97be98',
                '400': '#5d8d60',
                '500': '#4a7f50',
                '600': '#36653b',
                '700': '#2c5031',
                '800': '#244128',
                '900': '#1f3522',
                '950': '#101e13',
            },
            'fuel': {
                '50': '#faf7f6',
                '100': '#f6eeed',
                '200': '#eedfdd',
                '300': '#e0c4c1',
                '400': '#cea19e',
                '500': '#b97d7a',
                '600': '#a15d5d',
                '700': '#864a4c',
                '800': '#744245',
                '900': '#62393d',
                '950': '#351c1e',
            },
            'azure': {
                '50': '#eff8ff',
                '100': '#def0ff',
                '200': '#b6e3ff',
                '300': '#76cfff',
                '400': '#2db6ff',
                '500': '#019df6',
                '600': '#007dd3',
                '700': '#0063aa',
                '800': '#00548c',
                '900': '#06436f',
                '950': '#042c4d',
            },
            
                                    
        },

    },

    plugins: [
        require('@tailwindcss/forms'),
    ],
};

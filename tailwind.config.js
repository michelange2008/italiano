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
                '50': '#fefbe8',
                '100': '#fdf6c4',
                '200': '#fde98b',
                '300': '#fbd649',
                '400': '#f8c017',
                '500': '#e5a50a',
                '600': '#c88006',
                '700': '#a05b08',
                '800': '#84470f',
                '900': '#703a13',
                '950': '#411d07',
            },
            'azure': {
                '50': '#f0f8fe',
                '100': '#dceffd',
                '200': '#c2e3fb',
                '300': '#97d3f9',
                '400': '#66baf4',
                '500': '#439cee',
                '600': '#3584e4',
                '700': '#256ad0',
                '800': '#2455a9',
                '900': '#224a86',
                '950': '#192e52',
            },
            
                                    
        },

    },

    plugins: [
        require('@tailwindcss/forms'),
    ],
};

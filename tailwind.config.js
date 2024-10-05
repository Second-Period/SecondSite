import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import daisyui from 'daisyui';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                primary: '0 4px 8px rgba(0, 0, 0, 0.1)',
                secundary: '0 -4px 8px rgba(0, 0, 0, 0.1)'
            },
            colors: {
                primaryGreen: '#4CAF50',
                secundaryGreen: '#e0f7e9',
                terciary: '#333'
            }
        },
    },

    plugins: [forms,daisyui],

    daisyui: {
            themes: ['light'],
            defaultTheme: 'light',
            darkTheme: 'dark',
            base:true,
            styled: true,
            logs: true,
            utils: true
    }   
};

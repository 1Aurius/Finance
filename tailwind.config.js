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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'satoshi': ['Satoshi','sans-seriff'],
            },
            backgroundImage :
            {
                'leafs' : "url('public/App_icons/Landing_page.png')",
                'icon-logout': "url('public/App_icons/Group.png')"
            },
            colors :
            {
                'highlight' : '#2F5FD7',
                'text'      : '#FFF',
                'feature'   : 'rgba(53, 53, 53, 0.50)'
            },
            backgroundColor:
            {
                'background' : '#212121',
                'sidebar'    : '#303030',
                'cardHighlight' : '#404040',
                'card'          : '#353535',
                'darkCard'      : 'rgb(53,53,53,0.30)'
            }
        },
    },

    plugins: [forms],
};

import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
        
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {

                'xs': '480px',
                'xsm':'576px',          // Extra small devices
                'sm': '640px',  
                'xmd': '680px',        // Small devices (default in Tailwind)
                'md': '768px',          // Medium devices (default in Tailwind)
                'lg': '1024px',         // Large devices (default in Tailwind)
                'xl': '1280px',         // Extra large devices (default in Tailwind)
                '2xl': '1536px',        // 2XL devices (default in Tailwind)
                'custom': '900px',  

            }

        },
        
    },

    plugins: [
        require('@tailwindcss/forms'), 
        require('flowbite/plugin')
    ],
    
};

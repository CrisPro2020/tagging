const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {

            fontSize: {
                'xs': 'var(--xs)',
                'sm': 'var(--sm)',
                'base': 'var(--base)',
                'lg': 'var(--lg)',
                'xl': 'var(--xl)',
                '2xl': 'var(--display-3)',
                '3xl': 'var(--display-2)',
                '4xl': 'var(--display-1)',
            },

            fontFamily: {
                'display': ['Montserrat', ...defaultTheme.fontFamily.sans],
                'body': ['Rubik', ...defaultTheme.fontFamily.sans]
            },

            colors: {
                primary: 'var(--color-morado)',
                secondary: 'var(--color-amarillo)',
                morado: 'var(--color-morado)',
                'morado-dark': 'var(--color-morado-oscuro)',
                'morado-light': 'var(--color-morado-claro)',
                amarillo: 'var(--color-amarillo)',
                'amarillo-light': 'var(--color-amarillo-claro)',
                'amarillo-dark': 'var(--color-amarillo-oscuro)',
                
            },
            
            screens: {
                '2xl': {'max': '1366px'},
                // => @media (max-width: 1366px) { ... }

                'xl': {'max': '1024px'},
                // => @media (max-width: 1024px) { ... }

                'lg': {'max': '768px'},
                // => @media (max-width: 768px) { ... }

                'md': {'max': '640px'},
                // => @media (max-width: 640px) { ... }

                'sm' : {'max': '375px'},
                // => @media (max-width: 360px) { ... }
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
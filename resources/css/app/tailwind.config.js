import brand from '../common/brand.js'
import buildGradients from '../common/buildGradients.js'

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        'resources/views/**/*.blade.php',
        './vendor/awcodes/preset-color-picker/resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                ...brand.colors,
            },
        },
        gradientColors: {
            'primary': 'primary',
            'secondary': 'secondary',
            'tertiary': 'tertiary',
            'accent': 'accent',
            'gray': 'gray',
            'neutral-light': 'neutral-light',
            'neutral-dark': 'neutral-dark',
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        buildGradients,
    ],
}


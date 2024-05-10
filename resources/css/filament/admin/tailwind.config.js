import preset from '../../../../vendor/filament/filament/tailwind.config.preset.js'
import buildColors from "../../common/buildColors.js"
import { barGradientPlugin, radialGradientPlugin } from '../../common/buildGradients.js'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/awcodes/preset-color-picker/resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                ...buildColors([
                    'brand-primary',
                    'brand-gray',
                    'secondary',
                    'tertiary',
                    'accent',
                    'neutral-light',
                    'neutral-dark',
                ])
            }
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
        barGradientPlugin,
        radialGradientPlugin,
    ]
}

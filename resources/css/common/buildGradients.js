const plugin = require('tailwindcss/plugin')

const buildGradient = (key) => {

    let shade = key === 'gray' ? 300 : 600
    let bgShade = key === 'gray' ? 100 : 400

    return `linear-gradient(
        132deg,
        rgba(var(--${key}-${shade}), 1) 0%,
        rgba(var(--${key}-${shade}), 1) 10%,
        rgba(var(--${key}-${shade}), .9) 10%,
        rgba(var(--${key}-${shade}), .95) 14%,
        rgba(var(--${key}-${shade}), .8) 14%,
        rgba(var(--${key}-${shade}), .85) 20%,
        rgba(var(--${key}-${shade}), .7) 20%,
        rgba(var(--${key}-${shade}), .6) 30%,
        rgba(var(--${key}-${shade}), .6) 46%,
        rgba(var(--${key}-${shade}), .9) 46%,
        rgba(var(--${key}-${shade}), .9) 61%,
        rgba(var(--${key}-${shade}), .9) 63%,
        rgba(var(--${key}-${shade}), .95) 70%,
        rgba(var(--${key}-${shade}), .7) 70%,
        rgba(var(--${key}-${shade}), .8) 79%,
        rgba(var(--${key}-${shade}), .9) 79%,
        rgba(var(--${key}-${shade}), .9) 88%,
        rgba(var(--${key}-${shade}), .9) 100%
    ), linear-gradient(to right, rgba(var(--${key}-${bgShade}), 1), rgba(var(--${key}-${bgShade}), 1));`
}

module.exports = plugin(function ({ matchUtilities, theme }) {
    matchUtilities(
        {
            'bg-gradient-bars': (value) => ({
                background: buildGradient(value)
            })
        },
        {
            values: theme('gradientColors')
        }
    )
})

const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    mode: 'jit', // JIT mode enabled
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './storage/framework/views/*.php',
        './resources/**/*.{md,js,mdx,blade.php}',
        './safelist.txt',
    ],
    safelist: [{
		pattern: /(border|bg|text)-(red|green|blue|primary|secondary|success|warning|danger|info)-(50|100|200|300|400|500|600|700|800|900)/,
		variants: ['sm', 'lg', 'hover', 'focus', 'lg:hover', 'dark'],

	},],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: colors.blue,
                secondary: colors.neutral,
                success: colors.green,
                warning: colors.yellow,
                danger: colors.red,
                info: colors.blue,
                transparent: colors.transparent,
            },
            maxWidth: {},
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('tailwind-safelist-generator')({
            patterns: [
              'bg-{colors}',
              'text-{colors}',
              'border-{colors}',
              '{screens}:grid',
            ],
          }),
    ],
};

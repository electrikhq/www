const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    mode: 'jit', // JIT mode enabled
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.md',
        './resources/views/vendor/**/*.blade.php',
        './vendor/electrik/slate/resources/views/components/**/*.blade.php',
        './vendor/usernotnull/tall-toasts/config/**/*.php',
        './vendor/usernotnull/tall-toasts/resources/views/**/*.blade.php',
        './vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php',
        './vendor/wire-elements/modal/resources/views/**/*.blade.php',
        './vendor/electrik/electrik/resources/**/*.blade.php',
        './vendor/electrik/slate/resources/**/*.blade.php',
    ],
	safelist: [{
		pattern: /(bg|text)-(red|green|blue|primary|secondary|success|warning|danger|info)-(50|100|200|300|400|500|600|700|800|900)/,
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
    ],
};

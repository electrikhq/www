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
        './storage/framework/views/**/*.php',
        './vendor/electrik/slate/src/resources/views/**/*.blade.php',
        './vendor/electrik/slate/**/*.php',
        './resources/**/*.{md,js,mdx,blade.php}',
        './vendor/electrik/slate/src/Helpers/SlateUiHelper.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: colors.neutral,
                secondary: colors.indigo,
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

const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');


/** @type {import('tailwindcss').Config} */
module.exports = {
	darkMode: false,
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/vendor/**/*.blade.php',
		'./vendor/electrik/slate/resources/views/components/**/*.blade.php',
		'./vendor/usernotnull/tall-toasts/config/**/*.php',
    	'./vendor/usernotnull/tall-toasts/resources/views/**/*.blade.php',
		'./vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php',
		'./vendor/wire-elements/modal/resources/views/**/*.blade.php',
		'./vendor/electrik/electrik/resources/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
			colors: {
				secondary: colors.stone,
				success: colors.green,
				warning: colors.yellow,
				danger: colors.red,
				info: colors.blue,
				transparent: colors.transparent,
				'blue-ribbon': {  DEFAULT: '#086FEF',  50: '#B2D3FC',  100: '#9EC8FC',  200: '#77B2FA',  300: '#4F9BF9',  400: '#2885F8',  500: '#086FEF',  600: '#0656B9',  700: '#043D82',  800: '#03234C',  900: '#010A16',  950: '#000000'},
				'primary': {  DEFAULT: '#086FEF',  50: '#B2D3FC',  100: '#9EC8FC',  200: '#77B2FA',  300: '#4F9BF9',  400: '#2885F8',  500: '#086FEF',  600: '#0656B9',  700: '#043D82',  800: '#03234C',  900: '#010A16',  950: '#000000'},
			},
			maxWidth: {},
        },
    },

    plugins: [
		require('@tailwindcss/forms'),
		require('@tailwindcss/typography'),
	],
};

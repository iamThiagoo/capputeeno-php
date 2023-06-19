/** @type {import('tailwindcss').Config} */

module.exports = {
	content: [
		'./app/views/*.php',
		'./app/views/includes/*.php',
		'./public/assets/js/*.js',
	],
	theme: {
		mode: 'jit',
		extend: {},
	},
	plugins: [
		require('@tailwindcss/forms')
	],
}
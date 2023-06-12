/** @type {import('tailwindcss').Config} */

module.exports = {
	content: [
		'./app/views/*.php',
		'./app/views/includes/*.php',
	],
	theme: {
		mode: 'jit',
		extend: {},
	},
	plugins: [
		require('@tailwindcss/forms')
	],
}
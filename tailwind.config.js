/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./public/**/*.html",
    ],
    theme: {
        container: {
			center: true,
			padding: {
				DEFAULT: "1rem",
			},
		},
        extend: {},
    },
    plugins: [],
}


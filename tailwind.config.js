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
        extend: {
            colors: {
                turquoise: {
                    50: "#E6FFFA",
                    100: "#D1FFF7",
                    200: "#A8FFEF",
                    300: "#80FFE8",
                    400: "#57FFE0",
                    500: "#2EFFD9",
                    600: "#00F5C8",
                    700: "#00BD9A",
                    800: "#00856D",
                    900: "#004D3F",
                },
                "dark-teal": "#002B2E",
                gold: "#FFB500"
            }
        },
    },
    plugins: [],
}


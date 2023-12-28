/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                ubuntu : ["'Ubuntu', sans-serif"],
                markazi : ["'Markazi Text', serif"],
                inknut : ["'Inknut Antiqua', serif"],
                krona : ["'Krona One', sans-serif"],
            },
            backgroundImage: {
                clouds: "url('../../public/back.svg')",
            }
        },
    },
    plugins: [],
};

/* @type {import('tailwindcss).config} */

// tailwind.config.js

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        // ...
    },
    plugins: [
        require("@tailwindcss/forms"),
        // ...
    ],
};

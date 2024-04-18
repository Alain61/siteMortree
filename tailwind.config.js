const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = { //fichier crée manuellement
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    darkMode: false,
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms')({
            strategy: 'class', // only generate classes
        }),
    ],
}

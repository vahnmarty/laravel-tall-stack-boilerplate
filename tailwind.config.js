const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

module.exports = {
    purge: [
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans]
            },
            colors: {
                cyan: colors.cyan
            }
        }
    },

    variants: {
        opacity: ["responsive", "hover", "focus", "disabled"]
    },

    plugins: [require("@tailwindcss/forms")]
};

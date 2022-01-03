const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./resources/views/**/*.blade.php"
  ],
  theme: {
    extend: {
      colors: {
        danger: colors.rose,
        gray: colors.stone,
        primary: colors.yellow,
        success: colors.green,
        warning: colors.amber,
      },
    },
  },
  plugins: [],
}

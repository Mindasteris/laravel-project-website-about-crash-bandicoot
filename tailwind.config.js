/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        crashInsane: ['crashInsane', 'sans-serif'],
        Montserrat: ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

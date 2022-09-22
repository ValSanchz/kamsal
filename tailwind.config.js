/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
  theme: {
    extend: {
      backgroundImage: theme => ({
        'bg-kmgroup':'url(logotipo-trans.png)'
      }),
    },
  },
  plugins: [],
}

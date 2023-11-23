/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/main.blade.php",
    "./resources/views/pages/artDetail.blade.php",
    "./resources/views/pages/artistDetail.blade.php",
    "./resources/views/pages/eventDetail.blade.php",
    "./resources/views/pages/merchDetail.blade.php",
    "./resources/views/pages/home.blade.php",
    "./resources/views/partials/footer.blade.php",
    "./resources/views/partials/navbar.blade.php",
  ],
  theme: {
    fontFamily: {
      'display': ['Nunito Sans'],
      'header': ['Maven Pro'],
    },
    extend: {},
  },
  plugins: [],
}


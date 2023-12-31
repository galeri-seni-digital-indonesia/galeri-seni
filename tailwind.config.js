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
    "./resources/js/data/*",
    "./resources/js/utils/*",
  ],
  theme: {
    fontFamily: {
      'display': ['Nunito Sans'],
      'header': ['Maven Pro'],
    },
    extend: {
      colors: {
        'galseid-dark': '#101010',
        'galseid-yellow': '#F9D423',
        'galseid-orange': '#E65C00',
        'galseid-red-dark': '#B31217',
        'galseid-red-light': '#E52D27',
      }
    },
  },
  plugins: [],
}


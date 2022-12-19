/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["MVC/app/views/**/*.{html,js,php}"],

  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'cadet': '#2B2D42',
        'cadeth': '#404363',
        'mauve': '#361B2B',
        'saffron': '#FEEA00',
        'wsaffron': '#FFF15C',
        'ryb': '#FF1B1C',
        'cultured': '#F7F7F9',
        'mediumaqua': '#41E2BA',
        'goldenrod': '#F3F9D2',
        'middlegreen': '#558564',
        },
    },
  },
  plugins: [],
}

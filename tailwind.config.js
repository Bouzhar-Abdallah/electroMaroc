/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["MVC/app/views/**/*.{html,js,php}","node_modules/flowbite/**/*.js"],

  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'cadet': '#2B2D42',
        'cadeth': '#404363',
        'cadethh': '#DADBE7',
        'P_navy': '#424874',

        'powder': '#FDFFFC',
        'mauve': '#361B2B',
        'saffron': '#FEEA00',
        'wsaffron': '#FFF15C',
        'ryb': '#FF1B1C',
        'cultured': '#F7F7F9',
        'mediumaqua': '#41E2BA',
        'goldenrod': '#F3F9D2',
        'middlegreen': '#558564',
        },
      fontFamily:{
        sans : ["Open Sans",'Helvetica','Arial','sans-serif'],
      },
      scale: {
        '101': '1.005',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('flowbite/plugin'),
  ],
}

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {  
      backgroundColor: theme => ({
          ...theme('colors'),
          'primary': '#2196f3',
          'secondary': '#fdf7f9 ',
          'danger': '#e3342f',
         }),
      colors: {
      'primary': '#2196f3',
      'yellow' : '#FCD34D',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

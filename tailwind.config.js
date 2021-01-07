module.exports = {
  purge: {
    content: [
      'source/**/*.blade.php',
      'source/**/*.md',
      'source/**/*.html',
    ]
  },
  theme: {
    extend: {
      colors: {
        'primary':'#035199',
        'primary-darker': '#00407b',
        'secondary': '#059EDE',
        'light-blue': '#B5E5FB',
      },
      animation: {
        'spin-slow': 'spin 15s linear infinite',
        'spin-slow-cc' : 'unspin 12s linear infinite',
      },
      keyframes: {
        unspin:{
          '0%': { transform: 'rotate(0deg)'},
          '100%': { transform: 'rotate(-360deg)'}
        }
      },
    },
  },
  variants: {
    extend: {
      visibility: ['hover', 'focus', 'group-hover'],
      height: ['hover', 'focus', 'group-hover'],
    },
  },
  plugins: [],
}

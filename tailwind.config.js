/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#2D5F3F',
          50: '#f0f4f1',
          100: '#dce8e0',
          200: '#b9d1c1',
          300: '#96baa2',
          400: '#73a383',
          500: '#2D5F3F',
          600: '#264f35',
          700: '#1f3f2b',
          800: '#182f21',
          900: '#111f17',
        },
        nmdpra: {
          blue: '#2D5F3F', // Updated to use new primary color
          green: '#008751',
          orange: '#FFB300',
        }
      },
      fontFamily: {
        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

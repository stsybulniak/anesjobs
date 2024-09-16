/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/tw-elements/js/**/*.js",
  ],
  theme: {
    screens: {
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },
    fontFamily: {
      sans: ["Inter", "sans-serif"],
    },
    extend: {
      colors: {
        primary: "#21478A",
        primaryLight: "#4474C8",
        borderGrey: "#E5E9EB",
        grey: "#334155",
        bgColor: "#F9F9FB",
        greyText: "#5E5D65",
        borderPurp: "#CBD2F6",
        colorPurple: "#9FADEF"
      }
    },
  },
  plugins: [require('tailwind-hamburgers'), require("@tailwindcss/forms"), require("tw-elements/plugin.cjs")],
}
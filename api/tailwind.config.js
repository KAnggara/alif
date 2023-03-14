const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.vue",
    "./resources/**/*.js",
  ],

  theme: {
    extend: {},
  },

  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
};

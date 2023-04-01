const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.vue",
    "./resources/**/*.js",
    "./node_modules/flowbite/**/*.js",
  ],

  theme: {
    colors: {},
    extend: {},
  },

  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/typography"),
    require("daisyui"),
    require("flowbite/plugin"),
  ],
};

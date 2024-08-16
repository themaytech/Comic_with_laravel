/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

module.exports = {

  content: [
      "./node_modules/flowbite/**/*.js"
  ],
  plugins: [
      require('flowbite/plugin')
  ]

}

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/views/**/*.{html,js}"],
  theme: {
    extend: {
      screens: {
        // ml: "768px",
        // => @media (min-width: 768px) { ... }
      },
    },
    colors: {
      colorPrimary: "#16a1d8",
      colorSecondary: "#00FF00",
      colorTertiary: "#0000FF",
      colorAccent: "#FFA500",
    },
  },
  corePlugins: {
    // Désactive les styles par défaut pour les éléments HTML
    preflight: false,
  },
  experimental: {
    // conserver la configuration par defaut des element html
    preserveHtmlElements: true,
  },
  plugins: [],
};

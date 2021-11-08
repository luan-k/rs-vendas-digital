module.exports = {
  purge: false, // ["./**/*.html", "./**/*.js", "./**/*.php"],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        green: {
          primary: "#448044",
        },
        dark: {
          primary: "#181C18",
        },
        light: {
          primary: "#D0E5EC",
        },
        primary: "#302d58",
        secondary: "#983134",
        /*  primary: "#002e65", */
      },
      fontFamily: {
        '"poppins"': ["Poppins", "sans-serif"],
      },
    },
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "9%",
        xl: "10%",
        "2xl": "12%",
      },
    },
  },
  variants: {
    extend: {
      backgroundColor: ["active"],
    },
  },
  plugins: [],
};

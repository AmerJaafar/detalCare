/** @type {import('tailwindcss').Config} */
module.exports = {
  
  content: ["./**/**/*.{html,js}"],
  darkMode:'class',
  theme: {
    colors: {
      myblue: "#00b8b8",
      myBlack: "#333",
      myWight:"#fff",
      lightColor: "#666",
      lightBg:"#eee",
      borderColor:"rgba(0,0,0,.1)",
      bginherit:'inherit',
      opacityWhite:'rgb(255 255 255 / 0%)',

    },
    fontFamily:{
      'Poppins':'Poppins, sans-serif',
    },
    borderWidth:{
      "0.2": "0.2rem",
    },

    fontSize:{
      '2':'2rem',
      '1':'1rem',
      '1.5':'1.5rem',
      '2.5':'2.5rem',
      '62.5%':'62.5%',
      '55%':'55%',
      '50%':'50%',
      '5':'5rem',
      '0.9':'0.9rem',
    },

    extend: {
      boxShadow: {
        "3xl": " 0 .5rem 1rem rgba(0,0,0.1)",      
      },
    width:{
      '50':'50rem',
      '90':'90%',
    },
    height:{
      '30':'30vh',
      
    },
    minHeight:{
      '80':'80vh',
    },
    backgroundImage:{
      'hero':'url(../assets/imges/home.jpg) ',
      'abuot':'url(../assets/imges/about.jpg) ',
    },
      gridTemplateColumns:{
        '20':'repeat(auto-fit, minmax(20rem, 1fr))',
      },

    },
  },
  plugins: [],
}
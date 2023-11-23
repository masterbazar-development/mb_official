/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [   './components/**/*.{html,js,php}',
  './**/*.{html,js,css,php}',],
  theme: {
    extend: {
      maxWidth: {
        'max-w-8xl': '100rem',
      },
      colors: {
        'head': '#172554',
        'blue':'#264CC5',
      },
      text:{
        '2xl':'1.5rem',
        '3xl':'1.875rem',
      },
      screens: {
        'sm': '640px',
        // => @media (min-width: 640px) { ... }
  
        'md': '768px',
        // => @media (min-width: 768px) { ... }
  
        'lg': '1024px',
        // => @media (min-width: 1024px) { ... }
  
        'xl': '1280px',
        // => @media (min-width: 1280px) { ... }
  
        'xll':'1360px',
         // => @media (min-width: 1360px) { ... }
         
        '2xl': '1536px',
        // => @media (min-width: 1536px) { ... }
      },
      
    },
  },
  plugins: [],
};


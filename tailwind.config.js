/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'li-red': "#F9784B",
                "gray-botder":"#676767",
                'gray-select':"#3D3C3C",
                "yellow":"#FDBF0F"
            }
        },
        container: {
            center: true,
            padding: {
                default: '1rem',
                sx: '2rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
  }

/** @type {import('tailwindcss').Config} */
export default {
    // Con los * le digo que va a entrar a todas las carpetas de resources y los archivos .blade para aplicar los estilos de tailwind
    // Archivos donde se agregan clases de css
    content: ["./resources/**/*.blade.php", "./resources/**/*.blade.js"],
    theme: {
        extend: {},
    },
    plugins: [],
};

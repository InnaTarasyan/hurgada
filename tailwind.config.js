import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
                dancing: ['Dancing Script', 'cursive'],
                playfair: ['Playfair Display', 'serif'],
                crimson: ['Crimson Text', 'serif'],
                cormorant: ['Cormorant Garamond', 'serif'],
            },
            colors: {
                sea: {
                    50: '#f0fdfa',
                    100: '#ccfbf1',
                    200: '#99f6e4',
                    300: '#5eead4',
                    400: '#2dd4bf',
                    500: '#14b8a6',
                    600: '#0d9488',
                    700: '#0f766e',
                    800: '#115e59',
                    900: '#134e4a',
                },
                sand: {
                    50: '#fdfbf7',
                    100: '#faf6ef',
                    200: '#f5ebe0',
                    300: '#e8d5c4',
                    400: '#d4b896',
                    500: '#c4a07a',
                },
                coral: {
                    50: '#fff7f5',
                    100: '#ffebe6',
                    200: '#ffd4c9',
                    300: '#ffb39e',
                    400: '#ff8a6b',
                    500: '#f97066',
                    600: '#e85d4f',
                    700: '#c2413c',
                    800: '#9a342e',
                    900: '#7f2d28',
                },
                blush: {
                    50: '#fff5f7',
                    100: '#ffe8ee',
                    200: '#fecdd9',
                    300: '#fda4b8',
                    400: '#fb7185',
                    500: '#f43f5e',
                    600: '#e11d48',
                    700: '#be123c',
                    800: '#9f1239',
                    900: '#881337',
                },
                rose: {
                    50: '#fff1f7',
                    100: '#ffe4f0',
                    200: '#fec7df',
                    300: '#fea0c7',
                    400: '#fd6ca8',
                    500: '#f63f8f',
                    600: '#dd2079',
                    700: '#b51663',
                    800: '#921651',
                    900: '#791545',
                },
            },
            boxShadow: {
                soft: '0 10px 30px -10px rgba(244, 114, 182, 0.35)',
                polaroid: '0 4px 20px rgba(15, 118, 110, 0.12), 0 8px 32px rgba(0, 0, 0, 0.06)',
                card: '0 8px 30px -12px rgba(13, 148, 136, 0.2)',
            },
            backgroundImage: {
                'dot-grid': 'radial-gradient(circle, #fecdd9 1px, transparent 1px)',
                'sea-gradient': 'linear-gradient(135deg, #f0fdfa 0%, #fff5f7 40%, #faf6ef 100%)',
                'hero-overlay': 'linear-gradient(to bottom, rgba(15, 118, 110, 0.15) 0%, rgba(255, 245, 247, 0.85) 70%, #fdfbf7 100%)',
            },
            backgroundSize: {
                'dot-grid': '24px 24px',
            },
            animation: {
                float: 'float 6s ease-in-out infinite',
                'fade-up': 'fadeUp 0.8s ease-out forwards',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-8px)' },
                },
                fadeUp: {
                    '0%': { opacity: '0', transform: 'translateY(16px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
            },
        },
    },

    plugins: [forms],
};

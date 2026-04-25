import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'tertiary-fixed': '#7dfe5d',
                'outline': '#a78992',
                'inverse-surface': '#f6dce3',
                'secondary-fixed-dim': '#e6b4ff',
                'tertiary-container': '#25ab02',
                'error': '#ffb4ab',
                'surface-container': '#2a1c20',
                'on-secondary-fixed': '#30004a',
                'on-background': '#f6dce3',
                'on-error-container': '#ffdad6',
                'on-primary-container': '#5d0034',
                'surface': '#1d1014',
                'on-primary-fixed': '#3e0021',
                'tertiary-fixed-dim': '#61e143',
                'on-error': '#690005',
                'inverse-on-surface': '#3c2c31',
                'on-tertiary-container': '#053500',
                'surface-dim': '#1d1014',
                'secondary': '#e6b4ff',
                'on-tertiary-fixed': '#022100',
                'primary-fixed': '#ffd9e4',
                'on-secondary-container': '#dea1ff',
                'error-container': '#93000a',
                'on-secondary': '#4f0077',
                'outline-variant': '#584048',
                'primary-fixed-dim': '#ffb0cc',
                'background': '#1d1014',
                'tertiary': '#61e143',
                'primary-container': '#ff4fa3',
                'surface-container-high': '#35262b',
                'on-primary-fixed-variant': '#8d0051',
                'secondary-container': '#7401ab',
                'surface-variant': '#403036',
                'surface-container-highest': '#403036',
                'surface-container-low': '#25181c',
                'on-surface-variant': '#dfbec8',
                'surface-container-lowest': '#170a0f',
                'on-tertiary': '#063900',
                'on-secondary-fixed-variant': '#7000a6',
                'surface-bright': '#45353a',
                'inverse-primary': '#b7046c',
                'on-surface': '#f6dce3',
                'on-tertiary-fixed-variant': '#0d5300',
                'secondary-fixed': '#f5d9ff',
                'primary': '#ffb0cc',
                'surface-tint': '#ffb0cc',
                'on-primary': '#640038'
            },
            borderRadius: {
                'DEFAULT': '0.25rem',
                'lg': '0.5rem',
                'xl': '0.75rem',
                'full': '9999px'
            },
            spacing: {
                'xs': '8px',
                'container-padding': '32px',
                'gutter': '24px',
                'sm': '16px',
                'md': '24px',
                'xl': '80px',
                'unit': '4px',
                'lg': '48px'
            },
            fontFamily: {
                'sans': ['Plus Jakarta Sans', ...defaultTheme.fontFamily.sans],
                'h1': ['Epilogue'],
                'label-caps': ['Plus Jakarta Sans'],
                'h2': ['Epilogue'],
                'h3': ['Epilogue'],
                'body-md': ['Plus Jakarta Sans'],
                'body-lg': ['Plus Jakarta Sans']
            },
            fontSize: {
                'h1': ['64px', { lineHeight: '1.1', letterSpacing: '-0.04em', fontWeight: '800' }],
                'label-caps': ['12px', { lineHeight: '1', letterSpacing: '0.1em', fontWeight: '700' }],
                'h2': ['48px', { lineHeight: '1.2', letterSpacing: '-0.03em', fontWeight: '700' }],
                'h3': ['32px', { lineHeight: '1.2', letterSpacing: '-0.02em', fontWeight: '700' }],
                'body-md': ['16px', { lineHeight: '1.6', fontWeight: '400' }],
                'body-lg': ['18px', { lineHeight: '1.6', fontWeight: '400' }]
            }
        },
    },

    plugins: [forms],
};

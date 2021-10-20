module.exports = {
  //   mode: 'jit',
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      xs: '440px',
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      xxl: '1536px',
    },
    extend: {
      colors: {
        primary: 'var(--primary)',
        secondary: 'var(--secondary)',
        accent: 'var(--accent)',
        'base-400': 'var(--base-000)',
        'base-100': 'var(--base-100)',
        'base-200': 'var(--base-200)',
        'base-300': 'var(--base-300)',
        'base-content': 'var(--base-content)',
        info: 'var(--info)',
        success: 'var(--success)',
        warning: 'var(--warning)',
        error: 'var(--error)',
      },
      borderRadius: {
        'base-sm': '0.125rem',
        'base-md': '0.375rem',
        'base-lg': '0.5rem',
        'base-full': '9999px',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

import { defineConfig } from 'vite'

export default defineConfig({
  build: {
    manifest: true,
    outDir: './',
    emptyOutDir: false,
    rollupOptions: {
      input: {
        main: './assets/css/main.css',
        js: './assets/js/main.js',
      },
      output: {
        entryFileNames: 'assets/js/[name]-[hash].js',
        chunkFileNames: 'assets/js/[name]-[hash].js',
        assetFileNames: (assetInfo) => {
          const info = assetInfo.name.split('.')
          const ext = info[info.length - 1]
          if (/\.(css)$/i.test(assetInfo.name)) {
            return 'assets/css/[name]-[hash][extname]'
          }
          return 'assets/[ext]/[name][extname]'
        },
      },
    },
  },
  css: {
    postcss: './postcss.config.js',
  },
  server: {
    port: 3000,
    strictPort: true,
  },
})

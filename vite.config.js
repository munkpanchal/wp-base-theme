import { defineConfig } from "vite";
import liveReload from "vite-plugin-live-reload";
import tailwindcss from "@tailwindcss/vite";
import fs from 'fs';
import path from 'path';

const { resolve } = require("path");

// Custom live reload plugin for PHP files
function phpLiveReload() {
  return {
    name: 'php-live-reload',
    configureServer(server) {
      // Watch PHP files and trigger full reload
      server.watcher.on('change', (file) => {
        if (file.endsWith('.php')) {
          console.log(`🔄 PHP file changed: ${path.basename(file)} - Triggering full reload`);
          server.ws.send({
            type: 'full-reload',
            path: '*'
          });
        }
      });
      
      // Add specific PHP file patterns to watcher
      const phpPatterns = [
        '**/*.php',
        'templates/**/*.php',
        'inc/**/*.php', 
        'component/**/*.php'
      ];
      
      phpPatterns.forEach(pattern => {
        server.watcher.add(path.resolve(__dirname, pattern));
      });
    }
  };
}

// https://vitejs.dev/config
export default defineConfig({
  plugins: [
    liveReload([
      __dirname + "/**/*.php",
      __dirname + "/**/*.html",
      __dirname + "/**/*.css",
      __dirname + "/**/*.js",
      __dirname + "/**/*.scss",
      __dirname + "/**/*.sass",
      __dirname + "/templates/**/*",
      __dirname + "/inc/**/*",
      __dirname + "/component/**/*",
    ]),
    phpLiveReload(),
    tailwindcss(),
  ],

  // config
  root: "",
  base: process.env.NODE_ENV === "development" ? "/" : "/dist/",

  // Disable automatic copying of public directory
  publicDir: false,

  build: {
    outDir: resolve(__dirname, "./dist"),
    emptyOutDir: true,

    manifest: true,
    target: "es2022",

    rollupOptions: {
      input: {
        main: resolve(__dirname + "/main.js"),
      },
    },

    minify: true,
    write: true,
  },

  server: {
    cors: true,
    strictPort: true,
    port: 3000,
    https: false,
    host: "localhost",

    hmr: {
      host: "localhost",
      port: 3000,
    },

    // Watch additional files for changes
    watch: {
      usePolling: true,
      interval: 100,
      ignored: ["**/node_modules/**", "**/dist/**", "**/.git/**"],
    },
  },

  resolve: {
    alias: {
      //vue: 'vue/dist/vue.esm-bundler.js'
    },
  },
});

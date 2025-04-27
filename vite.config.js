import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
  plugins: [tailwindcss()],
  build: {
    rollupOptions: {
      input: {
        main: "./src/index.js",
      },
      output: {
        entryFileNames: "index.js",
        assetFileNames: "[name].[ext]",
      },
    },
    outDir: "dist",
  },
  server: {
    cors: true,
  },
  esbuild: {
    drop: ["console", "debugger"],
  },
});

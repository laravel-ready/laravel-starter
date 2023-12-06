import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import tailwindcss from 'tailwindcss';

export default defineConfig({
	plugins: [
		laravel({
			input: ['resources/sass/app.scss', 'resources/vendor/fortify-ui/sass/starter/auth.scss', 'resources/js/app.js'],
			refresh: true,
		}),
		vue({
			template: {
				transformAssetUrls: {
					base: null,
					includeAbsolute: false,
				},
			},
		}),
	],
	resolve: {
		alias: {
			vue: 'vue/dist/vue.esm-bundler.js',
		},
	},
	css: {
		postcss: {
			plugins: [tailwindcss],
		},
	},
	server: {
		port: 3000,
		host: false,
	},
});

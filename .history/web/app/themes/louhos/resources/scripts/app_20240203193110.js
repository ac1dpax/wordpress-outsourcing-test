import domReady from '@roots/sage/client/dom-ready';
// Import Sage scripts
import './bootstrap';

// Your custom scripts go here
console.log('Hello from Sage!');

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);


import domReady from '@roots/sage/client/dom-ready';
// Import Sage scripts
import '@roots/sage/resources/assets/scripts';
// Import Bootstrap JavaScript
import 'bootstrap';

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


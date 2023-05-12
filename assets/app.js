/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import "./styles/custom.scss";
import "./styles/app.css";

// custom js for the theme
import "./js/sidebar.js";

// start the Stimulus application
import "./bootstrap";

import * as mdb from "mdb-ui-kit"; // lib
window.mdb = mdb;

const imagesContext = require.context(
  "./images",
  true,
  /\.(png|jpg|jpeg|gif|ico|svg|webp)$/
);
imagesContext.keys().forEach(imagesContext);

import "vanilla-cookieconsent/src/cookieconsent.js";

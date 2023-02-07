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

const sidenav = document.getElementById("sidenav-1");
const sidenavInstance = mdb.Sidenav.getInstance(sidenav);

let innerWidth = null;

const setMode = (e) => {
  // Check necessary for Android devices
  if (window.innerWidth === innerWidth) {
    return;
  }

  innerWidth = window.innerWidth;

  if (window.innerWidth < 1400) {
    sidenavInstance.changeMode("over");
    sidenavInstance.hide();
  } else {
    sidenavInstance.changeMode("side");
    sidenavInstance.show();
  }
};

setMode();

// Event listeners
window.addEventListener("resize", setMode);

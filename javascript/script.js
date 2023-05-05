/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

/* Add body class on scroll */
function addClassOnScroll() {
    const pageElement = document.body;
    const scrollPosition = pageElement.scrollTop;
    const className = "scrolled";
    if (scrollPosition > 0) {
        document.body.classList.add(className);
    } else {
        document.body.classList.remove(className);
    }
}

/* Toggle hamburger menu  */
function toggleNavActive() {
    const masthead = document.getElementById("masthead");
    masthead.classList.toggle("nav-active");
}

/* set aspect of .looper__slider */
function setAspectRatio() {
    const aspectRatioBox = document.querySelector(".looper__slider");
    if (aspectRatioBox) {
      const height = aspectRatioBox.offsetHeight;
      const aspectRatio = 16 / 9;
      const width = height * aspectRatio;
      aspectRatioBox.style.width = `${width}px`;
    }
}
  
// init onload
window.onload = function() {

    /* Init body class on scroll */
    const pageElement = document.body;
    if (pageElement) {
        pageElement.addEventListener("scroll", addClassOnScroll);
    }

    /* Init hamburger menu  */
    const hamburger = document.querySelector(".masthead__hamburger");
    if (hamburger) {
        hamburger.addEventListener("click", toggleNavActive);
    }

    /* Init aspect ratio */
    setAspectRatio();
    window.addEventListener("resize", setAspectRatio);

}

// ======================================================================
// IMPORTS
// ======================================================================



// ======================================================================
// DOCUMENT READY
// ======================================================================
$(function () {


  var pathname = window.location.pathname;
  if (pathname.includes("shop")) {
    particlesJS.load('particles-js-sampleabout', '/wp-content/themes/height_sonics/assets/js/src/particles-samples.json', function () { });

    particlesJS.load('particles-js-sampleshop', '/wp-content/themes/height_sonics/assets/js/src/particles-samples.json', function () { });

    particlesJS.load('particles-js-shopcontact', '/wp-content/themes/height_sonics/assets/js/src/particles-samples.json', function () { });

  } else if (pathname.includes("mastering")) {
    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
    particlesJS.load('particles-js', '/wp-content/themes/height_sonics/assets/js/src/particles.json', function () { });

    particlesJS.load('particles-js2', '/wp-content/themes/height_sonics/assets/js/src/particles.json', function () { });

    particlesJS.load('particles-js3', '/wp-content/themes/height_sonics/assets/js/src/particles.json', function () { });
  }






  $('#multiple-items').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 5000,
  });

});

window.onload = function () { document.body.style.opacity = '1'; }


// ======================================================================
// GLOBAL EXPORTS
// ======================================================================

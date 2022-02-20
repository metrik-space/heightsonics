// ======================================================================
// IMPORTS
// ======================================================================



// ======================================================================
// DOCUMENT READY
////localhost:3000/height-sonics/wp-content/themes/heightsonics/
// ======================================================================
$(function () {




  // SHRINK OM SCROLL 
  $(window).on('scroll', function (e) {
    if ($(window).width() < 900) {
      if ($(document).scrollTop() >= 100) {
        $("#mobileNav__bg")[0].classList.add("bgCol");
      } else if ($(document).scrollTop() == 0) {
        $("#mobileNav__bg")[0].classList.remove("bgCol");
      }
    } else {
      if ($(document).scrollTop() >= 250) {
        $("#navBg")[0].classList.add("bgCol");
      } else if ($(document).scrollTop() == 0) {
        $("#navBg")[0].classList.remove("bgCol");
      }
    }
  });

  var pathname = window.location.pathname;


  if (pathname.includes("shop")) {
    particlesJS.load('particles-js-sampleabout', '/wp-content/themes/height_sonics/assets/js/src/particles-samples.json', function () { });

    particlesJS.load('particles-js-samples-about', '/wp-content/themes/height_sonics/assets/js/src/particles.json', function () { });

    particlesJS.load('particles-js-sampleshop', '/wp-content/themes/height_sonics/assets/js/src/particles-samples.json', function () { });

    particlesJS.load('particles-js-shopcontact', '/wp-content/themes/height_sonics/assets/js/src/particles-samples.json', function () { });


  } else if (pathname.includes("mastering")) {
    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
    particlesJS.load('particles-js', '/wp-content/themes/height_sonics/assets/js/src/particles.json', function () { });

    particlesJS.load('particles-js-mastering-about', '/wp-content/themes/height_sonics/assets/js/src/particles-white.json', function () { });

    particlesJS.load('particles-js4', '/wp-content/themes/height_sonics/assets/js/src/particles-white.json', function () { });

    particlesJS.load('particles-js2', '/wp-content/themes/height_sonics/assets/js/src/particles.json', function () { });

    particlesJS.load('particles-js3', '/wp-content/themes/height_sonics/assets/js/src/particles.json', function () { });
  } else {
    particlesJS.load('particles-js-landing', '/wp-content/themes/height_sonics/assets/js/src/particles-white.json', function () { });
  }


  $(".mobNavLink").on("click", function () {
    $("#navi-toggle").prop('checked', false);
  });


  $('#multiple-items').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    autoplay: true,
    autoplaySpeed: 12000,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        },
      },
    ],
  });

});

window.onload = function () { document.body.style.opacity = '1'; }


// ======================================================================
// GLOBAL EXPORTS
// ======================================================================

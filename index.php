<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dasa
 */

get_header(); ?>

</head>

<main id="primary">
  <div class="landing">
    <div id="particles-js-landing" class="particles-js"></div>
    <div class="landing__content">
      <img data-aos="fade-up" data-aos-duration="1000" class="landing__content__logo" src="<?= get_template_directory_uri() ?>/assets/images/heightsonicslogo.png" alt="Height Mastering logo">
      <div class="landing__content__buttons">
        <a href="shop/" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          <div class="landing__content__buttons__bg" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/heightbgcol.jpg)"></div>
          <img class="landing__content__buttons__logo" src="<?= get_template_directory_uri() ?>/assets/images/heightsampleslogo.png" alt="Height Mastering logo">
        </a>
        <a href="mastering/" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/heightbg.jpg)">
          <div class="landing__content__buttons__bg" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/heightbg.jpg)"></div>
          <img class="landing__content__buttons__logo" src="<?= get_template_directory_uri() ?>/assets/images/heightlogowhite.png" alt="Height Mastering logo">
        </a>
      </div>
    </div>
  </div>
</main><!-- #main -->

<?php get_footer();

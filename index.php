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
    <div class="landing__sonics" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/heightbgcol.png')">
      <img src="<?=get_template_directory_uri()?>/assets/images/heightsampleslogo.png" alt="Height Samples logo">
      <a href="shop/">Open</a>
    </div>
    <div class="landing__mastering" style="background-image: url(<?= get_template_directory_uri() . '/assets/images/heightbg.png' ?>)">
      <img src="<?=get_template_directory_uri()?>/assets/images/heightlogowhite.png" alt="Height Mastering logo">
      <a href="mastering/">Open</a>
    </div>
  </div>
</main><!-- #main -->

<?php get_footer();

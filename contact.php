<?php
/* Template Name: Contact Us */

$email = get_field('contact_email');

get_header(); ?>

<main id="primary" class="site-main">
  <?php include 'components/navigation.php'; ?>
  <?php include get_template_directory() . '/components/mobileNavigation.php'; ?>

  <div class="contact">
    <div class="contact__header"><img src="<?= get_template_directory_uri() .
                                              '/assets/images/header-bg.png' ?>" alt=""></div>

    <div class="contact__container">
      <h1>CONTACT US</h1>
      <p>
        For general enquiries and comissions, get in touch via email or Instagram.
      </p>
      <a href="mailto: $email" class="contact__button">
        <div style="background-image: url(<?= get_template_directory_uri() .
                                            '/assets/images/wooden-buttonn.png' ?>)">
          <span><?= $email ?></span>
        </div>
      </a>
      <a href="https://www.instagram.com/saladelf/" class="contact__insta">
        <div style="background-image: url(<?= get_template_directory_uri() .
                                            '/assets/images/insta.png' ?>)">
        </div>
      </a>
    </div>
    <div class="contact__footer"><img src="<?= get_template_directory_uri() .
                                              '/assets/images/footer-bg.png' ?>" alt=""></div>
  </div>
  <?php include 'components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();

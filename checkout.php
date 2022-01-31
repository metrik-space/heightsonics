<?php
/* Template Name: Checkout Page */

$image_left = get_field('image_left');
$image_right = get_field('image_right');

get_header();
?>

<main id="primary" class="site-main">
  <?php include 'components/navigation.php'; ?>
  <?php include get_template_directory() . '/components/mobileNavigation.php'; ?>

  <div class="checkoutPage">
    <div class="checkoutPage__header"></div>
    <div class="checkoutPage__container">
      <div class="checkoutPage__content">
        <?php echo do_shortcode('[woocommerce_checkout]'); ?>
      </div>
    </div>

    <div class="checkoutPage__footer"></div>
  </div>
  <?php include 'components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();

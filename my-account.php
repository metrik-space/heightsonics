<?php
/* Template Name: Account Page */

$image_left = get_field('image_left');
$image_right = get_field('image_right');

get_header();
?>

<main id="primary" class="site-main">
    <?php include 'components/navigation.php'; ?>
    <?php include get_template_directory() . '/components/mobileNavigation.php'; ?>

    <div class="about">
        <div class="about__header"><img src="<?= get_template_directory_uri() .
          '/assets/images/header-bg.png' ?>" alt=""></div>
        <?php echo do_shortcode('[woocommerce_my_account]'); ?>
        <div class="about__footer"><img src="<?= get_template_directory_uri() .
          '/assets/images/footer-bg.png' ?>" alt=""></div>
    </div>
    <?php include 'components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();

<?php

/**
 * Created by PhpStorm.
 * User: imransayed
 * Date: 6/3/18
 * Time: 2:04 AM
 */

get_header(); ?>
 <!-- /**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
 -->
 <?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * do_action('woocommerce_before_main_content'); ?>
 */
?>

<main id="primary" class="site-main">
	<?php include get_template_directory() . '/components/navigation.php'; ?>
	<?php include get_template_directory() . '/components/mobileNavigation.php'; ?>

		<?php while (have_posts()):
    the_post(); ?>

		<?php wc_get_template_part('content', 'single-product'); ?>

		<?php
  endwhile; ?>

		<div class="shop__footer"><img src="<?= get_template_directory_uri() . '/assets/images/footer-bg.png' ?>" alt=""></div>
<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
?>
 
 <?php
/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
?>
</div>
<!-- do_action('woocommerce_after_main_content'); ?> -->
<?php include get_template_directory() . '/components/footer.php'; ?>
</main>
<!-- #main --
<?php get_footer();
?>

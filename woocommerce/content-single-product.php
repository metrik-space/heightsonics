<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit();

global $product;
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

$souncloudEmbed = get_field('soundcloud_embed_link');

do_action('woocommerce_before_single_product');

if (post_password_required()) {
  echo get_the_password_form(); // WPCS: XSS ok.
  return;
}

global $product;

$image_url = wp_get_attachment_image_url($product->image_id, 'full');


$count = 0
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
  <div class="product">
    <div class="product__header"></div>
    <div class="product__container">
      <div class="product__breadcrumbs">
        <div>
          < </div>
            <a href="<?= $root ?>shop/">Shop</a>
            <span>/</span>
            <a href="<?= $root ?>clothing/">Clothing</a>
            <span>/</span>
            <a href="<?= $root ?>/<?= $product->slug ?>"><?= $product->name ?></a>
        </div>

        <div class="product__info">
          <div class="product__info__main">
            <div class="product__info__main__gallery">
              <div class="product__info__main__gallery__image">
                <a href="#" id="mainImgFeatherlight" data-featherlight="<?= $image_url ?>">
                  <div id="mainImg" style="background-image: url(<?= $image_url ?>)"></div>
                </a>
              </div>

              <div class="summary entry-summary product__info__main__info">
                <h1><?= $product->name ?></h1>
                <div class='product__info__main__info__desc'><?= $product->description ?></div>
              </div>
            </div>
          </div>

          <div class="product__filters" style="margin-bottom: 75px;">
            <h1>Order</h1>
            <?php if ($product->is_type('variable')) {
              woocommerce_variable_add_to_cart();
            } else {
              woocommerce_template_single_price();
              woocommerce_simple_add_to_cart();
            } ?>
          </div>

          <?php if (!empty($souncloudEmbed)) {
            echo $souncloudEmbed;
          } ?>

          <?php
          /**
           * Hook: woocommerce_after_single_product_summary.
           *
           * @hooked woocommerce_output_product_data_tabs - 10
           * @hooked woocommerce_upsell_display - 15
           * @hooked woocommerce_output_related_products - 20
           */
          do_action('woocommerce_after_single_product_summary');
          ?>
        </div>
      </div>

      <?php do_action('woocommerce_after_single_product'); ?>
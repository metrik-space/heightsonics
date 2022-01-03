<?php
/* Template Name: Clothing Page */

$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

get_header();
?>

<main id="primary" class="site-main">
  <?php include 'components/navigation.php'; ?>
  <?php include get_template_directory() . '/components/mobileNavigation.php'; ?>
  <div class="shop">
    <div class="shop__header"><img src="<?= get_template_directory_uri() .
                                          '/assets/images/header-bg.png' ?>" alt=""></div>
    <div class="shop__container">
      <div class="shop__breadcrumbs">
        <div>
          < </div>
            <a href="<?= $root ?>shop/">SHOP</a>
            <span>/</span>
            <a href="<?= $root ?>clothing/">CLOTHING</a>
        </div>
        <h1>ALL CLOTHING</h1>
        <div class="shop__allItems">
          <?php
          // Setup your custom query
          $args = ['post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'clothing'];
          $loop = new WP_Query($args);

          while ($loop->have_posts()) :
            $loop->the_post(); ?>
            <a href="<?php echo get_permalink($loop->post->ID); ?>" class="shop__items__item">
              <div style="background-image: url(<?= get_the_post_thumbnail_url($loop->post->ID) ?>)">
                <h1><?= the_title() ?></h1>
              </div>
            </a>
          <?php
          endwhile;
          wp_reset_query();

          // Remember to reset
          ?>
        </div>
      </div>
      <div class="shop__footer"><img src="<?= get_template_directory_uri() .
                                            '/assets/images/footer-bg.png' ?>" alt=""></div>
    </div>
    <?php include 'components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();

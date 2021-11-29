<?php
/* Template Name: About Page */

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
        <div class="about__container">
            <h1>We are</h1>
            <h2>SaladElf</h2>
            <p>
                <?= the_field('description_top_column') ?>
            </p>
            <img class="about__img" src="<?= $image_left['url'] ?>" alt="">
            <p>
                <?= the_field('description_bottom_column') ?>
            </p>
            <img class="about__img" src="<?= $image_right['url'] ?>" alt="">
        </div>
        <div class="about__footer"><img src="<?= get_template_directory_uri() .
          '/assets/images/footer-bg.png' ?>" alt=""></div>
    </div>
    <?php include 'components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();

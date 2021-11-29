<?php
/* Template Name: Commisions & Bespoke */

$image_left = get_field('image_left');
$image_right = get_field('image_right');
$pdf = get_field('pdf');

get_header();
?>

<main id="primary" class="site-main">
    <?php include 'components/navigation.php'; ?>
    <?php include get_template_directory() . '/components/mobileNavigation.php'; ?>

    <div class="bespoke">
        <div class="bespoke__header"><img src="<?= get_template_directory_uri() .
                                                    '/assets/images/header-bg.png' ?>" alt=""></div>
        <div class="bespoke__container">
            <h1>COMMISSIONS & BESPOKE</h1>
            <div class="bespoke__subtitle">
                <?= the_field('title_top_column') ?>
            </div>
            <p>
                <?= the_field('description_top_column') ?>
            </p>
            <img class="bespoke__img" src="<?= $image_left['url'] ?>" alt="">
            <div class="bespoke__subtitle">
                <?= the_field('title_bottom_column') ?>
            </div>
            <p>
                <?= the_field('description_bottom_column') ?>
            </p>
            <img class="bespoke__img" src="<?= $image_right['url'] ?>" alt="">
            <p>Click <a style="color: #ff9900;" href="<?= $pdf ?>">here</a> to see our full range of garments, designs and available vinyl colours.</p>
        </div>
        <div class="bespoke__footer"><img src="<?= get_template_directory_uri() .
                                                    '/assets/images/footer-bg.png' ?>" alt=""></div>
    </div>
    <?php include 'components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();

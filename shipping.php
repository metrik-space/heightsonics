<?php
/* Template Name: Shipping & Returns */
$shipping_content = get_field('shipping_content');
$returns_content = get_field('returns_content');
$after_email_content = get_field('after_email_content');

get_header(); ?>

<main id="primary" class="site-main">
    <?php include 'components/navigation.php'; ?>

    <div class="shipping">
        <div class="shipping__header"><img src="<?= get_template_directory_uri() .
                                                    '/assets/images/header-bg.png' ?>" alt=""></div>
        <div class="shipping__container">
            <h1>SHIPPING & RETURNS</h1>
            <div class="shipping__subtitle">Shipping</div>
            <p>
                <?= $shipping_content ?>
            </p>
            <div class="shipping__subtitle">Returns</div>
            <p>
                <?= $returns_content ?>
            </p>
            <div class="shipping__subtitle">saladelfstudios@gmail.com</div>
            <p>
                <?= $after_email_content ?>
            </p>
        </div>
        <div class="shipping__footer"><img src="<?= get_template_directory_uri() .
                                                    '/assets/images/footer-bg.png' ?>" alt=""></div>
    </div>
    <?php include 'components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();

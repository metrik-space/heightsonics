<?php
global $product;
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
get_header();
?>


<main id="primary" class="site-main">
	<?php include get_template_directory() . '/components/navigation.php'; ?>
	<?php include get_template_directory() . '/components/mobileNavigation.php'; ?>
    <div class="hero" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/heightbgcol.png')">
        <div class="hero__cont">
        <div class="hero__cont__logo">
            <img src="<?=get_template_directory_uri()?>/assets/images/heightsampleslogo.png" alt="Height Samples logo">
        </div>
        </div>
    </div>
	<div class="shop">
			<div class="shop__about" id="about">
				<div class="shop__about__left">
					<img class="shop__about__left__image" src="<?=get_template_directory_uri()?>/assets/images/portImage.png" alt="">
					<div id="particles-js-sampleabout" class="particles-js"></div>
				</div>
				<div class="shop__about__right">
					<div class="shop__about__right__content">
						<h1>Production Made Simple</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
					</div>
				</div>

			</div>
			<div class="shop__shopCont">
				<div class="shop__container">
					<div class="shop__items" id="shop">
						<div class="shop__items__item">
							<div class="shop__items__item__image" ><div style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/samplepack.jpg')"></div></div>
							<div class="shop__items__item__content">
								<h4>Revan - Not Another D&B Sample Pack - Vol​.​1</h4>
							</div>
						</div>
						<div class="shop__items__item">
							<div class="shop__items__item__image" ><div style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/samplepack.jpg')"></div></div>
							<div class="shop__items__item__content">
								<h4>Revan - Not Another D&B Sample Pack - Vol​.​1</h4>
							</div>
						</div>
						<div class="shop__items__item">
							<div class="shop__items__item__image" ><div style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/samplepack.jpg')"></div></div>
							<div class="shop__items__item__content">
								<h4>Revan - Not Another D&B Sample Pack - Vol​.​1</h4>
							</div>
						</div>
					</div>
				</div>
				<div id="particles-js-sampleshop" class="particles-js"></div>
			</div>

	</div>
	<?php include get_template_directory() . '/components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();

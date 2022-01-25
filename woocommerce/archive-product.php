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
				<img src="<?= get_template_directory_uri() ?>/assets/images/heightsampleslogo.png" alt="Height Samples logo">
			</div>
		</div>
	</div>
	<div class="shop">
	<div class="shop__shopCont">
			<div class="shop__container">
				<div class="shop__items" id="shop">
					<div class="shop__items__item">
						<div class="shop__items__item__image">
							<div style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/samplepack.jpg')"></div>
						</div>
						<div class="shop__items__item__content">
							<h4>Revan - Not Another D&B Sample Pack - Vol​.​1</h4>
						</div>
					</div>
					<div class="shop__items__item">
						<div class="shop__items__item__image">
							<div style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/samplepack.jpg')"></div>
						</div>
						<div class="shop__items__item__content">
							<h4>Revan - Not Another D&B Sample Pack - Vol​.​1</h4>
						</div>
					</div>
					<div class="shop__items__item">
						<div class="shop__items__item__image">
							<div style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/samplepack.jpg')"></div>
						</div>
						<div class="shop__items__item__content">
							<h4>Revan - Not Another D&B Sample Pack - Vol​.​1</h4>
						</div>
					</div>
				</div>
			</div>
			<div id="particles-js-sampleshop" class="particles-js"></div>
		</div>
		<div class="shop__about" id="about">
			<div class="shop__about__left">
				<img class="shop__about__left__image" src="<?= get_template_directory_uri() ?>/assets/images/portImage.png" alt="">
				<div id="particles-js-sampleabout" class="particles-js"></div>
			</div>
			<div class="shop__about__right">
				<div class="shop__about__right__content">
					<h1>Production Made Simple</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					</p>
					<img class="shop__about__right__content__image" src="<?= get_template_directory_uri() ?>/assets/images/portImage.png" alt="">
				</div>
				<div id="particles-js-samples-about" class="particles-js"></div>
			</div>

		</div>

		<div class="shop__contactdark">
			<div id="particles-js-shopcontact" class="particles-js"></div>
			<div class="shop__container" id="contact">
				<h1>Get In Contact</h1>
				<div class="shop__contactdark__formCont">
					<form action="" class="shop__contactdark__form">
						<div class="shop__contactdark__form__input">
							<label for="name">Name</label>
							<input name="name" type="text" placeholder="Name" required />
						</div>
						<div class="shop__contactdark__form__input">
							<label for="email">Email</label>
							<input name="email" type="text" placeholder="Email" required />
						</div>
						<div class="shop__contactdark__form__input">
							<label for="message">Message</label>
							<textarea name="message" id="" cols="20" rows="7" placeholder="Message" required></textarea>
						</div>
						<input type="submit" value="Submit" class="btn-reverse">
					</form>
					<div class="shop__contactdark__maps">
						<img src="<?= get_template_directory_uri() ?>/assets/images/capture.png" alt="">
					</div>
				</div>
				<div class="shop__contactdark__pageButtons">
                <a href="shop/">
                    <div class="shop__contactdark__pageButtons__bg" style="background-image: url(<?=get_template_directory_uri()?>/assets/images/heightbgcol.png)"></div>
                    <img class="shop__contactdark__pageButtons__logo" src="<?=get_template_directory_uri()?>/assets/images/heightsampleslogo.png" alt="Height Mastering logo">
                    <div class="shop__contactdark__pageButtons__text">
                        Enter
                    </div>
                </a>
                <a href="shop/">
                    <div class="shop__contactdark__pageButtons__bg" style="background-image: url(<?=get_template_directory_uri()?>/assets/images/heightbgcol.png)"></div>
                    <img class="shop__contactdark__pageButtons__logo" src="<?=get_template_directory_uri()?>/assets/images/heightsampleslogo.png" alt="Height Mastering logo">
                    <div class="shop__contactdark__pageButtons__text">
                        Enter
                    </div>
                </a>
                <a href="mastering/" style="background-image: url(<?=get_template_directory_uri()?>/assets/images/heightbg.png)">
                    <div class="shop__contactdark__pageButtons__bg" style="background-image: url(<?=get_template_directory_uri()?>/assets/images/heightbg.png)"></div>
                    <img class="shop__contactdark__pageButtons__logo" src="<?=get_template_directory_uri()?>/assets/images/heightlogowhite.png" alt="Height Mastering logo">
                    <div class="shop__contactdark__pageButtons__text">
                        Enter
                    </div>
                </a>
            </div>
			</div>
		</div>
		<?php include get_template_directory() . '/components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();

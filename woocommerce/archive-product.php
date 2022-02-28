<?php
global $product;
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
get_header();
?>


<main id="primary" class="site-main">
	<?php include get_template_directory() . '/components/navigation.php'; ?>
	<?php include get_template_directory() . '/components/mobileNavigation.php'; ?>
	<div class="hero">
		<video autoplay muted loop playsinline width="100%" height="100vh" poster="<?= get_template_directory_uri() ?>/assets/images/heightbgcol.jpg' ?>">

			<source src="<?= get_template_directory_uri() . '/assets/videos/heightsamplesVid-c.mp4' ?>" type="video/mp4">
			<source src="<?= get_template_directory_uri() . '/assets/videos/heightsamplesVid-c.webm' ?>" type="video/webm">

			Sorry, your browser doesn't support embedded videos.
		</video>
		<div class="hero__cont">
			<div class="hero__cont__logo" data-aos="fade-up" data-aos-duration="1000">
				<img src="<?= get_template_directory_uri() ?>/assets/images/heightsampleslogo.png" alt="Height Samples logo">
			</div>
		</div>
		<div class="hero__arrow bounce">
			<a href="#shop"><img src="<?= get_template_directory_uri() ?>/assets/images/arrowdown.png" alt=""></a>
		</div>
	</div>
	<div class="shop">
		<div class="shop__shopCont" id="shop">
			<div class="shop__container">
				<div class="shop__items" data-aos="fade-up" data-aos-duration="1000">
					<?php
					// Setup your custom query
					$args = ['post_type' => 'product'];
					$loop = new WP_Query($args);

					while ($loop->have_posts()) :
						$loop->the_post(); ?>
						<a href="<?php echo get_permalink($loop->post->ID); ?>" class="shop__items__item">
							<div class="shop__items__item__image">
								<div style="background-image: url(<?= get_the_post_thumbnail_url($loop->post->ID); ?>)"></div>
							</div>
							<div class="shop__items__item__content">
								<h4><?= the_title() ?></h4>
							</div>
						</a>
					<?php
					endwhile;
					wp_reset_query();

					// Remember to reset
					?>
				</div>
			</div>
			<div id="particles-js-sampleshop" class="particles-js"></div>
		</div>

		<div class="shop__about" id="about">
			<div class="shop__about__left">
				<div id="particles-js-sampleabout" class="particles-js"></div>
			</div>
			<div class="shop__about__right">
				<div id="particles-js-samples-about" class="particles-js"></div>
			</div>
			<div class="shop__container" style="display:flex; align-items: center;">
				<div class="shop__about__content">
					<img class="shop__about__content__image" src="<?= get_template_directory_uri() ?>/assets/images/portImage.png" alt="" data-aos="zoom-in" data-aos-duration="1000">
					<div class="shop__about__content__text" data-aos="fade-up" data-aos-duration="1000">
						<h1>Height Samples</h1>
						<p>
							In an age where music is more and more disposable by the day, we believe it is crucial to separate yourself and your craft from the rest. In order to do this you must trust the tools you are using. 
						</p>
						<p>
							Height Samples deliver nothing but high quality resources for music production at all levels, whether it be samples, synth presets or tutorials. 
						</p>
						<p>
							We appreciate your support, now go and make some music!
						</p>
					</div>
				</div>
			</div>
		</div>


		<div class="shop__contactdark">
			<div id="particles-js-shopcontact" class="particles-js"></div>
			<div class="shop__container" id="contact">
				<h1 data-aos="fade-up" data-aos-duration="1000">Get In Contact</h1>
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
							<textarea name="message" id="" cols="20" rows="7" placeholder="Message..." required></textarea>
						</div>
						<input type="submit" value="SUBMIT" class="btn-reverse">
					</form>
				</div>
				<div class="shop__contactdark__pageButtons" data-aos="fade-up" data-aos-duration="1000">
					<a href="shop/">
						<div class="shop__contactdark__pageButtons__bg" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/heightbgcol.jpg)"></div>
						<img class="shop__contactdark__pageButtons__logo" src="<?= get_template_directory_uri() ?>/assets/images/heightsampleslogo.png" alt="Height Mastering logo">
					</a>
					<a href="/">
						<div class="shop__contactdark__pageButtons__bg" style="background-color: transparent;"></div>
						<img class="shop__contactdark__pageButtons__logoHome" src="<?= get_template_directory_uri() ?>/assets/images/heightsonicslogo.png" alt="Height Mastering logo">
					</a>
					<a href="mastering/" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/heightbg.jpg)">
						<div class="shop__contactdark__pageButtons__bg" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/heightbg.jpg)"></div>
						<img class="shop__contactdark__pageButtons__logo" src="<?= get_template_directory_uri() ?>/assets/images/heightlogowhite.png" alt="Height Mastering logo">
					</a>
				</div>
			</div>
		</div>
		<?php include get_template_directory() . '/components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();

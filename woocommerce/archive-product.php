<?php
global $product;
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
get_header();
?>
  <meta charset="UTF-8">
  <title>Height Samples</title>
  <meta name="description" content="Tools for Creatives. Focused on aiding music producers hone their craft through high quality samples, presets and tutorials.">
  <meta name="keywords" content="Sample packs, Bristol Music Services, Height Samples">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<main id="primary" class="site-main">
	<?php include get_template_directory() . '/components/navigation.php'; ?>
	<?php include get_template_directory() . '/components/mobileNavigation.php'; ?>
	<div class="hero">
		<video playsinline muted mute autoplay loop  width="100%" height="100vh" poster="<?= get_template_directory_uri() ?>/assets/images/heightbgcol.jpg' ?>">

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
	<div class="shop__about" id="about">
			<div class="shop__about__left">
				<div id="particles-js-sampleabout" class="particles-js"></div>
			</div>
			
			<div class="shop__container" style="display:flex; align-items: center;">
				<div class="shop__about__content">
					<!-- <img class="shop__about__content__image" src="/assets/images/portImage.png" alt="" data-aos="zoom-in" data-aos-duration="1000"> -->

					</div>
					<div class="shop__about__content__text" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
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
						<a href="#contact">Get In Touch</a>
					</div>
				</div>
			</div>
		</div>

		<div class="shop__shopCont" id="shop">
			<div class="shop__container">
				<h1 data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
							Featured Products
						</h1>
						<p data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
							We have a variety of interesting sample packs to help take your productions to the next level.
						</p>
					<?php
					// Setup your custom query
					$args = ['post_type' => 'product'];
					$loop = new WP_Query($args); ?>

					<div class="shop__items--mobile" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
					<div class=" mastering__testi__items mastering__testi__items--mobile" id="multiple-items" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
					<?php
						while ($loop->have_posts()) :
							$loop->the_post(); ?>
							<a href="<?php echo get_permalink($loop->post->ID); ?>" class="shop__items__item">
								<div class="shop__items__item__image">
									<div style="background-image: url(<?= get_the_post_thumbnail_url($loop->post->ID); ?>)"></div>
								</div>
								<div class="shop__items__item__content">
									<h4><?= the_title() ?></h4>
									<?php $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */ ?>
									<p><?php echo $product->get_price_html(); ?></p>
								</div>
							</a>
						<?php
						endwhile;
						wp_reset_query();

						// Remember to reset
						?>
					</div>
					</div>

				<div class="shop__items" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

					<?php
					while ($loop->have_posts()) :
						$loop->the_post(); ?>
						<a href="<?php echo get_permalink($loop->post->ID); ?>" class="shop__items__item">
							<div class="shop__items__item__image">
								<div style="background-image: url(<?= get_the_post_thumbnail_url($loop->post->ID); ?>)"></div>
							</div>
							<div class="shop__items__item__content">
								<h4><?= the_title() ?></h4>
								<?php $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */ ?>
								<p><?php echo $product->get_price_html(); ?></p>
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


		<div class="shop__contactdark">
			<div id="particles-js-shopcontact" class="particles-js"></div>
            <div class="mastering__container" id="contact">
                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">Get In Touch</h1>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">Have a project that you would like to discuss? Pop us a message below,</p>
                <div class="mastering__contact__formCont">
                    <form action="" class="mastering__contact__form">
                        <?php echo(do_shortcode('[ninja_form id=1]')) ?>
                    
                </div>
                <div class="mastering__contact__pageButtons" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <a href="shop/">
                        <div class="mastering__contact__pageButtons__bg" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/heightbgcol.jpg)"></div>
                        <img class="mastering__contact__pageButtons__logo" src="<?= get_template_directory_uri() ?>/assets/images/heightsampleslogo.png" alt="Height Mastering logo">
                    </a>
                    <a href="/">
                        <div class="mastering__contact__pageButtons__bg" style="background-color: #000;"></div>
                        <img class="mastering__contact__pageButtons__logoHome" src="<?= get_template_directory_uri() ?>/assets/images/heightsonicslogo.png" alt="Height Sonics logo">
                    </a>
                    <a href="mastering/" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/heightbg.jpg)">
                        <div class="mastering__contact__pageButtons__bg" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/heightbg.jpg)"></div>
                        <img class="mastering__contact__pageButtons__logo" src="<?= get_template_directory_uri() ?>/assets/images/heightlogowhite.png" alt="Height Mastering logo">
                    </a>
                </div>
            </div>
		</div>
		<?php include get_template_directory() . '/components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();

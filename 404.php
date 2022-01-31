<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dasa
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php include 'components/navigation.php'; ?>
	<?php include get_template_directory() . '/components/mobileNavigation.php'; ?>
	<div class="about">
		<div class="about__header"></div>
		<div class="about__container">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'dasa'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dasa'); ?></p>
					</ul>
				</div><!-- .widget -->

		</div><!-- .page-content -->
		</section><!-- .error-404 -->
		<div class="about__footer"></div>
	</div>
</main><!-- #main -->

<?php
get_footer();

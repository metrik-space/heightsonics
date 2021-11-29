<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dasa
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://www.dafontfree.net/embed/YWR1bXUtcmVndWxhciZkYXRhLzkwL2EvMTY2ODA3L0FkdW11LnR0Zg" rel="stylesheet" type="text/css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class('woocommerce'); ?>>
	<?php wp_body_open(); ?>
	<div class="woocommerce" id="page" class="site">

		<header id="masthead" class="site-header">

		</header><!-- #masthead -->
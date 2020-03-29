<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alma_Digital
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alma-wp' ); ?></a>

	<div class="container-header full-width">
	<header id="masthead" class="site-header content-space">
		<div class="site-branding col-2">
			<?php
			the_custom_logo();
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation col-10">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'HAM', 'alma-wp' ); ?></button> -->
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="24" height="2.28571" fill="#2680C2" class="hamburger-line"  />
					<rect y="6.85742" width="24" height="2.28571" fill="#2680C2" class="hamburger-line" />
					<rect y="13.7139" width="24" height="2.28571" fill="#2680C2" class="hamburger-line" />
				</svg>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	</div>

	<div id="content" class="site-content">

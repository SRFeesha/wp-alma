<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Alma_Digital
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<p class="giant-text" style="font-size:50vh;position:absolute;font-style:italic;top:-100px;color:#F0F4F8;z-index:-1;font-weight:600;text-align:right;width:100%">404</p>
				<header class="page-header">
					<h1 class="page-title margin-top-10"><?php esc_html_e( 'Whoops!', 'alma-wp' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<h2 class="margin-top-2"><?php esc_html_e( 'Abbiamo perso questa pagina', 'alma-wp' ); ?></h2>
					
					<p class="has-text-color has-big-font-size has-gray-500-color sm--margin-top-3 width-37">Ci abbiamo provata, l'abbiamo cercata ovunque, ma niente, non si trova. </p>

					<div class="margin-top-6 has-bigger-font-size" style="display:inline-block;">
						<p>Hai già visto i <a href="https://almadigital.it/progetti/">nostri progetti</a> ?</p>
					</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

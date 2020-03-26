<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alma_Digital
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta margin-top-8">
				<?php
				alma_wp_posted_on();
				alma_wp_get_post_category();
				?>
			</div><!-- .entry-meta -->
		<?php endif;
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title margin-top-3">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title margin-top-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		
		get_template_part('template-parts/template-sharing-box', 'sharing-box'); ?>

	</header><!-- .entry-header -->

	<?php alma_wp_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'alma-wp' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alma-wp' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php 
		alma_wp_entry_footer(); 
		get_template_part('template-parts/template-sharing-box', 'sharing-box'); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
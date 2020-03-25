<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alma_Digital
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php 
	$related = alma_wp_get_related_posts( get_the_ID(), 3 );

	if ( $related->have_posts() ):
		?>
		<div class="related-posts margin-top-7">
			<h3>Potrebbe interessarti anche</h3>
				<?php while ( $related->have_posts() ): $related->the_post(); ?>
					<a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
						<div class="blog-post-card">
						
							<?php alma_wp_post_thumbnail(); ?>

							<div class="entry-meta">
								<?php
									alma_wp_get_post_category();
									alma_wp_posted_on();
								?>
							</div><!-- .entry-meta -->
							<?php 
								the_title( '<h3 class="entry-title">', '</h3>');
							?>
						</div>
					</a>
				<?php endwhile; ?>
		</div>
		<?php
	endif;
	wp_reset_postdata();
	?>

<?php
// get_sidebar();
get_footer();

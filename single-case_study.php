<?php
/*
 * Template Name: Case study
 * Template Post Type: post
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<h1 class="case-study-title margin-top-7"><?php the_title(); ?></h1>
			
			<?php
			the_content();

			// get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation();
			the_post_navigation( array(
				'prev_text'                  => __( '← Caso studio precedente: <em> %title </em>' ),
				'next_text'                  => __( 'Caso studio successivo: %title →' ),
				// 'in_same_term'               => true,
				// 'taxonomy'                   => __( 'post_tag' ),
				'screen_reader_text' => __( 'Continue Reading' ),
			) );

			
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

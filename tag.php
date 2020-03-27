<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alma_Digital
 */

get_header(); ?>

<header class="page-header">
	<h1 class="page-title margin-top-7">
		<?php single_term_title( '<span class="has-gray-300-color"> Tag: </span>'); ?> </h1>
</header> <!-- .page-header -->

<div class="blog-catalog">
	<div id="primary" class="content-area">
		<main id="main" class="site-main"> <?php
			// $cat = get_the_category()[0]->name;
			// $args = array(
			// 		'category_name' => $cat,
			// 		'paged' => $paged
			// 		);
			// $wp_query = new WP_Query($args);

			if ( have_posts() ) : ?>
				<div class="blog-post-grid margin-top-6">
					<?php /* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content-blog-page', get_post_type() );
					endwhile;
				?> </div> <?php

			else :
				get_template_part( 'template-parts/content', 'none' );
			endif; ?>

		</main><!-- #main --> <?php

		the_posts_pagination( array(
				'mid_size'  => 2,
				'prev_text' => __( 'Precedente', 'textdomain' ),
				'next_text' => __( 'Successiva', 'textdomain' ),
			) );
		?>
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
	
</div>
<?php
get_footer();

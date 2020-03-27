
<?php
/**
 * The blog index template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alma_Digital
 */

get_header(); ?>

<header>
	<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
	<h1 class="entry-title margin-top-7"> Blog </h1>
</header>

<div class="blog-catalog">
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php
		if ( have_posts() ) : ?>

			<div class="blog-post-grid margin-top-6">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-blog-page', get_post_type() );

			endwhile;

						
			?> </div> <?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
		<?php
		the_posts_pagination( array(
				'mid_size'  => 2,
				'prev_text' => __( 'Precedente', 'textdomain' ),
				'next_text' => __( 'Successiva', 'textdomain' ),
			) );
		?>
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

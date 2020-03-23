<?php
/**
 * Template part for displaying all the posts of the blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alma_Digital
 */

?>

<a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
	<div class="blog-post-card">
	
		<?php alma_wp_post_thumbnail(); ?>

		<div class="entry-meta">
			<?php
				/* translators: used between list items, there is a space after the comma */
				// $categories_list = get_the_category_list( esc_html__( ', ', 'alma-wp' ) );
				$category = get_the_category()[0]->name;
				// echo ($categories_list[0]->name);

				if ( $category ) {
					/* translators: 1: list of categories. */
					printf( '<span class="cat-links has-gray-500-color">' . esc_html__( '%1$s', 'alma-wp' ) . " • " . '</span>', $category ); // WPCS: XSS OK.
				}
				alma_wp_posted_on();
			?>
		</div><!-- .entry-meta -->
		<?php 
			the_title( '<h3 class="entry-title">', '</h3>');
		?>
</div>
</a>


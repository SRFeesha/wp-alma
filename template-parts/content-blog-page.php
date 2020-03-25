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
				alma_wp_posted_on();
				alma_wp_get_post_category();
			?>
		</div><!-- .entry-meta -->
		<?php 
			the_title( '<h3 class="entry-title">', '</h3>');
		?>
	</div>
</a>


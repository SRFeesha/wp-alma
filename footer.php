<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alma_Digital
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer full-width">
		<div class="container-footer content-space grid grid-2-col">

			<?php
				wp_nav_menu( 
					array( 
						'theme_location' => 'footer-left',
						'container_class' => 'footer-menu col-4 start-col-2',
						'items_wrap' => '<h3 class="footer-title">Alma Digital</h3><ul class="%2$s">%3$s</ul>'
					) 
				); 

				wp_nav_menu( 
					array( 
						'theme_location' => 'footer-center',
						'container_class' => 'footer-menu col-2',  
						'items_wrap' => '<h3 class="footer-title">Contatti</h3><ul class="%2$s">%3$s</ul>'
					) 
				);

				wp_nav_menu( 
					array( 
						'theme_location' => 'footer-right',
						'container_class' => 'footer-menu col-3 start-col-10',
						'items_wrap' => '<h3 class="footer-title">Social</h3><ul class="%2$s">%3$s</ul>'
					) 
				); 

				wp_nav_menu( 
					array( 
						'theme_location' => 'footer-down',
						'container_class' => 'footer-down col-8 start-col-3 width-100',
						'items_wrap' => '<ul class="grid grid-space-between-items grid-max-content caption">%3$s</ul>'  
					) 
				); 
			?>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

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
		
		<svg class="decoration" id="ball" viewBox="0 0 425 425" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g clip-path="url(#clip0)">
				<rect x="418.607" y="219.203" width="301" height="20" transform="rotate(-135 418.607 219.203)" fill="#DCEEFB"/>
				<rect x="376.181" y="261.631" width="301" height="20" transform="rotate(-135 376.181 261.631)" fill="#DCEEFB"/>
				<rect x="333.755" y="304.057" width="301" height="20" transform="rotate(-135 333.755 304.057)" fill="#DCEEFB"/>
				<rect x="291.328" y="346.482" width="301" height="20" transform="rotate(-135 291.328 346.482)" fill="#62B0E8"/>
				<rect x="248.901" y="388.91" width="301" height="20" transform="rotate(-135 248.901 388.91)" fill="#62B0E8"/>
				<rect x="397.394" y="240.418" width="301" height="20" transform="rotate(-135 397.394 240.418)" fill="#DCEEFB"/>
				<rect x="354.968" y="282.844" width="301" height="20" transform="rotate(-135 354.968 282.844)" fill="#DCEEFB"/>
				<rect x="312.541" y="325.27" width="301" height="20" transform="rotate(-135 312.541 325.27)" fill="#62B0E8"/>
				<rect x="270.115" y="367.697" width="301" height="20" transform="rotate(-135 270.115 367.697)" fill="#62B0E8"/>
				<rect x="227.688" y="410.123" width="301" height="20" transform="rotate(-135 227.688 410.123)" fill="#62B0E8"/>
				<rect x="206.476" y="431.336" width="301" height="20" transform="rotate(-135 206.476 431.336)" fill="#62B0E8"/>
			</g>
			<defs>
				<clipPath id="clip0">
					<rect y="212.133" width="300" height="301" rx="150" transform="rotate(-45 0 212.133)" fill="white"/>
				</clipPath>
			</defs>
		</svg>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alma_Digital
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alma-wp' ); ?></a>

	<div class="container-header full-width">
	<header id="masthead" class="site-header content-space">
		<div class="site-branding col-2">
			<?php
			// the_custom_logo(); 
			?>
			<a href="<?php echo get_home_url(); ?>">
				<svg class="logo-alma-svg" height="100%" x="0" y="0" viewBox="0 0 107 56" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="logomark" d="M40.4591 32.4883L40.002 30.5967H37.4375L36.9932 32.4883H34.835L37.4883 23.6903H40.0147L42.6681 32.4883H40.4591ZM37.793 29.0859H39.6466L38.7198 25.2011L37.793 29.0859ZM45.1925 32.7041C44.6085 32.7041 44.1515 32.5391 43.8214 32.209C43.4998 31.8704 43.339 31.3922 43.339 30.7744V23.0682L45.3449 22.8524V30.6982C45.3449 30.9775 45.4591 31.1172 45.6876 31.1172C45.8061 31.1172 45.9161 31.096 46.0177 31.0537L46.4113 32.4756C46.0473 32.6279 45.6411 32.7041 45.1925 32.7041ZM54.7506 25.5311C55.2838 25.5311 55.7113 25.7131 56.0329 26.0771C56.3545 26.4325 56.5153 26.9277 56.5153 27.5624V32.4883H54.5094V27.9052C54.5094 27.3043 54.319 27.0038 53.9381 27.0038C53.7265 27.0038 53.5403 27.0758 53.3795 27.2196C53.2187 27.3635 53.0621 27.5836 52.9098 27.8798V32.4883H50.9039V27.9052C50.9039 27.3043 50.7135 27.0038 50.3326 27.0038C50.1295 27.0038 49.9433 27.08 49.774 27.2323C49.6132 27.3762 49.4566 27.592 49.3043 27.8798V32.4883H47.2984V25.747H49.0504L49.19 26.5341C49.4524 26.1955 49.7401 25.9459 50.0533 25.7851C50.3749 25.6158 50.7389 25.5311 51.1451 25.5311C51.526 25.5311 51.8518 25.6242 52.1227 25.8104C52.402 25.9966 52.6051 26.259 52.732 26.5976C53.0029 26.2336 53.2991 25.967 53.6207 25.7978C53.9508 25.62 54.3275 25.5311 54.7506 25.5311ZM63.5071 30.5332C63.5071 30.7871 63.5409 30.9733 63.6086 31.0918C63.6848 31.2103 63.8033 31.2991 63.9641 31.3584L63.5451 32.666C63.1304 32.6322 62.7919 32.5433 62.5295 32.3994C62.2671 32.2471 62.064 32.0101 61.9201 31.6885C61.48 32.3656 60.8029 32.7041 59.8888 32.7041C59.2202 32.7041 58.687 32.5094 58.2892 32.1201C57.8914 31.7308 57.6925 31.223 57.6925 30.5967C57.6925 29.8603 57.9634 29.2975 58.505 28.9081C59.0467 28.5188 59.8296 28.3242 60.8537 28.3242H61.5393V28.0322C61.5393 27.6344 61.4546 27.3635 61.2853 27.2196C61.1161 27.0673 60.8198 26.9911 60.3967 26.9911C60.1766 26.9911 59.91 27.025 59.5968 27.0927C59.2837 27.1519 58.9621 27.2366 58.632 27.3466L58.1749 26.0263C58.5981 25.8655 59.0298 25.7427 59.4699 25.6581C59.9185 25.5735 60.3332 25.5311 60.714 25.5311C61.6789 25.5311 62.3856 25.73 62.8342 26.1278C63.2828 26.5256 63.5071 27.1223 63.5071 27.9179V30.5332ZM60.4728 31.2695C60.9299 31.2695 61.2853 31.0537 61.5393 30.622V29.4287H61.0441C60.5871 29.4287 60.2443 29.5091 60.0158 29.6699C59.7957 29.8307 59.6857 30.0804 59.6857 30.4189C59.6857 30.6898 59.7534 30.9013 59.8888 31.0537C60.0327 31.1976 60.2274 31.2695 60.4728 31.2695ZM70.6469 23.7157C72.0095 23.7157 73.0971 24.0246 73.9096 24.6425C74.7306 25.2603 75.1411 26.3987 75.1411 28.0576C75.1411 29.6826 74.7391 30.8294 73.935 31.498C73.131 32.1582 72.1111 32.4883 70.8754 32.4883H68.4887V23.7157H70.6469ZM70.1645 24.9725V31.2314H70.9897C71.7345 31.2314 72.3185 31.0029 72.7417 30.5459C73.1648 30.0804 73.3764 29.2509 73.3764 28.0576C73.3764 27.2281 73.2664 26.5891 73.0463 26.1405C72.8348 25.6835 72.5512 25.3746 72.1957 25.2138C71.8487 25.0529 71.4298 24.9725 70.9389 24.9725H70.1645ZM78.4221 25.7724V32.4883H76.7971V25.7724H78.4221ZM77.5969 22.37C77.9016 22.37 78.147 22.4673 78.3332 22.662C78.5279 22.8482 78.6252 23.0809 78.6252 23.3602C78.6252 23.6395 78.5279 23.8723 78.3332 24.0585C78.147 24.2447 77.9016 24.3378 77.5969 24.3378C77.3007 24.3378 77.0552 24.2447 76.8606 24.0585C76.6743 23.8723 76.5812 23.6395 76.5812 23.3602C76.5812 23.0809 76.6743 22.8482 76.8606 22.662C77.0552 22.4673 77.3007 22.37 77.5969 22.37ZM86.347 26.1278C85.9153 26.2802 85.2678 26.3564 84.4046 26.3564C84.8193 26.5426 85.124 26.7753 85.3186 27.0546C85.5218 27.3254 85.6233 27.6682 85.6233 28.0829C85.6233 28.5231 85.5133 28.9124 85.2932 29.2509C85.0816 29.5895 84.7685 29.8561 84.3538 30.0507C83.9475 30.2454 83.4693 30.3427 82.9192 30.3427C82.6145 30.3427 82.3479 30.3089 82.1194 30.2412C81.9332 30.3681 81.8401 30.5332 81.8401 30.7363C81.8401 31.0495 82.1109 31.206 82.6526 31.206H83.6809C84.1718 31.206 84.5992 31.2864 84.9632 31.4472C85.3356 31.6081 85.6233 31.8366 85.8265 32.1328C86.0296 32.4206 86.1311 32.7464 86.1311 33.1104C86.1311 33.7875 85.8434 34.3122 85.2678 34.6846C84.6923 35.0655 83.8629 35.2559 82.7795 35.2559C82.0009 35.2559 81.3873 35.1755 80.9387 35.0147C80.4986 34.8539 80.1854 34.6211 79.9992 34.3164C79.813 34.0117 79.7199 33.6224 79.7199 33.1484H81.1799C81.1799 33.3854 81.2222 33.5716 81.3069 33.707C81.4 33.8425 81.5608 33.944 81.7893 34.0117C82.0263 34.0795 82.3648 34.1133 82.8049 34.1133C83.4228 34.1133 83.8586 34.0371 84.1126 33.8848C84.3665 33.7324 84.4934 33.5124 84.4934 33.2246C84.4934 32.9707 84.3961 32.7718 84.2014 32.6279C84.0068 32.4925 83.7232 32.4248 83.3508 32.4248H82.3352C81.7004 32.4248 81.2222 32.3021 80.9006 32.0566C80.579 31.8112 80.4182 31.5023 80.4182 31.1299C80.4182 30.8929 80.4859 30.6644 80.6213 30.4443C80.7652 30.2242 80.9598 30.038 81.2053 29.8857C80.799 29.6741 80.4986 29.416 80.3039 29.1113C80.1177 28.7981 80.0246 28.4257 80.0246 27.9941C80.0246 27.5116 80.1431 27.0885 80.3801 26.7245C80.6171 26.3606 80.9429 26.0813 81.3576 25.8866C81.7808 25.6835 82.2632 25.5819 82.8049 25.5819C83.5159 25.5989 84.0872 25.5481 84.5188 25.4296C84.9589 25.3026 85.4329 25.1037 85.9407 24.8329L86.347 26.1278ZM82.8303 26.6864C82.4664 26.6864 82.1786 26.8049 81.967 27.0419C81.7639 27.2704 81.6623 27.5794 81.6623 27.9687C81.6623 28.3749 81.7681 28.6966 81.9797 28.9335C82.1913 29.1705 82.4833 29.289 82.8557 29.289C83.245 29.289 83.5413 29.1748 83.7444 28.9462C83.9475 28.7093 84.0491 28.3792 84.0491 27.956C84.0491 27.1096 83.6428 26.6864 82.8303 26.6864ZM89.0779 25.7724V32.4883H87.4529V25.7724H89.0779ZM88.2527 22.37C88.5574 22.37 88.8028 22.4673 88.989 22.662C89.1837 22.8482 89.281 23.0809 89.281 23.3602C89.281 23.6395 89.1837 23.8723 88.989 24.0585C88.8028 24.2447 88.5574 24.3378 88.2527 24.3378C87.9565 24.3378 87.711 24.2447 87.5163 24.0585C87.3301 23.8723 87.237 23.6395 87.237 23.3602C87.237 23.0809 87.3301 22.8482 87.5163 22.662C87.711 22.4673 87.9565 22.37 88.2527 22.37ZM95.0096 32.1709C94.7726 32.3402 94.506 32.4671 94.2097 32.5518C93.922 32.6364 93.6258 32.6787 93.3211 32.6787C92.6609 32.6703 92.1573 32.484 91.8103 32.1201C91.4718 31.7477 91.3025 31.2018 91.3025 30.4824V26.9403H90.2487V25.7724H91.3025V24.287L92.9275 24.0966V25.7724H94.489L94.324 26.9403H92.9275V30.4443C92.9275 30.7744 92.9825 31.0114 93.0925 31.1553C93.211 31.2991 93.393 31.3711 93.6384 31.3711C93.8839 31.3711 94.1505 31.2907 94.4383 31.1299L95.0096 32.1709ZM100.891 30.7109C100.891 30.9733 100.929 31.1679 101.005 31.2949C101.089 31.4134 101.221 31.5065 101.398 31.5742L101.056 32.6533C100.675 32.6195 100.362 32.5264 100.116 32.374C99.8791 32.2217 99.6972 31.9889 99.5702 31.6758C99.3417 32.0143 99.0539 32.2682 98.7069 32.4375C98.3684 32.5983 97.9875 32.6787 97.5643 32.6787C96.8957 32.6787 96.3667 32.4883 95.9774 32.1074C95.5881 31.7266 95.3934 31.2272 95.3934 30.6093C95.3934 29.8815 95.6558 29.3271 96.1805 28.9462C96.7137 28.5569 97.4712 28.3622 98.453 28.3622H99.2909V27.9814C99.2909 27.5497 99.1894 27.2493 98.9862 27.08C98.7916 26.9023 98.4742 26.8134 98.0341 26.8134C97.5432 26.8134 96.9507 26.9319 96.2567 27.1689L95.8758 26.0644C96.7137 25.7427 97.5262 25.5819 98.3134 25.5819C100.031 25.5819 100.891 26.3521 100.891 27.8925V30.7109ZM97.996 31.498C98.5461 31.498 98.9778 31.223 99.2909 30.6728V29.3144H98.6181C97.5686 29.3144 97.0438 29.7037 97.0438 30.4824C97.0438 30.804 97.1242 31.0537 97.285 31.2314C97.4458 31.4092 97.6828 31.498 97.996 31.498ZM104.447 32.6787C103.931 32.6787 103.524 32.5306 103.228 32.2344C102.94 31.9297 102.797 31.5023 102.797 30.9521V23.0809L104.422 22.9032V30.9013C104.422 31.2145 104.549 31.3711 104.802 31.3711C104.929 31.3711 105.056 31.3499 105.183 31.3076L105.526 32.4502C105.188 32.6025 104.828 32.6787 104.447 32.6787Z" fill="#0F609B"/>
					<path class="logotype" d="M27.9994 28C27.9994 23.3758 19.1024 15 14.2178 15C10.0309 15 0 22.6779 0 25.9933C0 26.953 0.348904 27.8255 0.697806 28.2617C0.697806 28.2617 0.785031 28.349 0.785031 28.2617C2.18064 25.208 9.94372 17.8792 14.2178 17.8792C18.3174 17.8792 25.0337 24.4228 25.0337 28C25.0337 31.5772 18.0557 38.1207 14.2178 38.1207C11.5138 38.1207 6.54191 33.4966 6.54191 30.8792C6.54191 29.2215 7.93752 27.4765 9.33314 27.0403C10.816 26.604 14.5667 26.953 14.5667 26.953L12.7349 25.0335C12.7349 25.0335 13.6944 23.6376 14.305 23.6376C15.9623 23.6376 18.9279 28 18.9279 28C18.9279 28 15.9623 32.3624 14.305 32.3624C13.7816 32.3624 12.7349 30.8792 12.7349 30.8792L14.6539 29.1342C14.6539 29.1342 11.3393 28.8725 10.6415 29.1342C9.8565 29.3087 9.42035 30.0067 9.42035 30.8792C9.42035 32.4497 12.7349 35.2416 14.305 35.2416C17.009 35.2416 21.9808 30.6175 21.9808 28C21.9808 25.4698 17.009 20.5839 14.305 20.7584C11.3393 20.9329 3.4018 27.302 3.4018 30.8792C3.4018 34.4564 10.3798 41 14.2178 41C19.1024 40.9128 28.0866 32.5369 27.9994 28Z" fill="#0F609B"/>
				</svg>
			</a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation col-10">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'HAM', 'alma-wp' ); ?></button> -->
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="24" height="2.28571" fill="#2680C2" class="hamburger-line"  />
					<rect y="6.85742" width="24" height="2.28571" fill="#2680C2" class="hamburger-line" />
					<rect y="13.7139" width="24" height="2.28571" fill="#2680C2" class="hamburger-line" />
				</svg>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container_class'=>	'menu-header-container',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	</div>

	<div id="content" class="site-content">

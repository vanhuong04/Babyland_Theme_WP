<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BabyLand
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'babyland'); ?></a>

		<header id="masthead" class="site-header">
			<!-- header top bar -->
			<div class="header__top">
				<div class="header__adress">
					<div class="header__adress--location">
						<div><i class="bi bi-geo-alt"></i></div>
						<p class=""><?php echo get_theme_mod('set-location-header', 'Choose your location') ?></p>
					</div>

					<div class="header__adress--phone">
						<div><i class="bi bi-telephone"></i></div>
						<p class=""><?php echo get_theme_mod('set-phone-header', '1234567896') ?></p>
					</div>
				</div>
				<div class="header__socail">
					<a href="https://<?php echo get_theme_mod('set-facebook-header', '#') ?>"><i class="bi bi-facebook"></i></a>
					<a href="https://<?php echo get_theme_mod('set-intagram-header', '#') ?>"><i class="bi bi-instagram"></i></a>
					<a href="https://<?php echo get_theme_mod('set-x-header', '#') ?>"><i class="bi bi-twitter"></i></a>
					<a href="https://<?php echo get_theme_mod('set-youtube-header', '#') ?>"><i class="bi bi-youtube"></i></a>
				</div>
			</div>

			<div class="header__main">

				<div class="site-branding">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()):
						?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
								rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
					else:
						?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
								rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
					endif;
					$babyland_description = get_bloginfo('description', 'display');
					if ($babyland_description || is_customize_preview()):
						?>
						<p class="site-description">
							<?php echo $babyland_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<div class="header nav">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu"
							aria-expanded="false"><?php esc_html_e('Primary Menu', 'babyland'); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>

				<div class="header__acount">
					<a href="<?php echo get_permalink (wc_get_page_id ('myaccount'))?>" class="header__ac">
						<i class="bi bi-person-circle"></i>
						<p>Account</p>

					</a>
					<a href="<?php echo wc_get_cart_url() ?>" class="header__cart">
						<i class="bi bi-cart2"></i>
						<p>Cart</p>
					</a>
				</div>

			</div>
		</header><!-- #masthead -->
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package looks-blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/img/favicon.png' ?>">
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-6J0EVXL9B9"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-6J0EVXL9B9');
	</script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'looks-blog'); ?>
		</a>

		<?php the_custom_header_markup(); ?>

		<header id="masthead" class="site-header">
			<div class="container" style="display: flex; align-items: center">
				<div class="site-branding" style="display: flex; min-width: 360px; align-items: center;">
					<a href="<?php echo esc_url(home_url('/')); ?>"><img src=<?php echo get_template_directory_uri() . '/assets/img/logo.png'; ?> alt="" height="75"
						width="75" style="margin-right: 20px;" /></a>
					<div>
						<?php
						// the_custom_logo();
						if (is_front_page() && is_home()):
							?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
							<?php
						else:
							?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
							<?php
						endif;
						$looks_blog_description = get_bloginfo('description', 'display');
						if ($looks_blog_description || is_customize_preview()):
							?>
							<p class="site-description">
								<?php echo $looks_blog_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</p>
						<?php endif; ?>
						<div style="margin-left: 0px; color: white; text-align: center;">Let's study daily</div>
					</div>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button type="button" class="menu-toggle">
						<i class="fa fa-list-ul fa-2x"></i>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div><!-- .container -->
		</header><!-- #masthead -->
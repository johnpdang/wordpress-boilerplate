<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- THEME FONT TEMP INCLUSION FROM GOOGLE FONTS -->
<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet"> -->
<!-- THEME FONT TEMP INCLUSION FROM TYPEKIT ADOBE --><link rel="stylesheet" href="https://use.typekit.net/xgw5cxd.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" title="Skip to main content" href="#content" tabindex="0"><?php _e( 'Skip to content', 'traina_wp' ); ?></a>
		<div id="curtain"></div>
		<header id="masthead" class="site-header " role="banner">
			<nav class="navbar animate-in-1" role="navigation" aria-label="main navigation">
				<div class="nav-bg left"></div>
				<div class="nav-bg right"></div>
				<div class="navbar-inner-wrap container">
					<div class="navbar-brand">
						<a href="/" alt="Return to homepage">
							<div class="title">
								<div id="website_logo_link" class="image_link" aria-hidden="true" tabindex="1">
									<!-- <img src="/wp-content/uploads/2018/12/logo.png" alt="SYA Logo"> -->
									<?php $template_slug = get_page_template_slug(); ?>
									<span class="site-logo dark-logo <?php if($template_slug === 'page-home.php') : ?> active <?php else: ?> hidden <?php endif; ?> "><?php echo traina_get_svg_icon('logo-with-icon'); ?></span>
									<span class="site-logo light-logo <?php if($template_slug !== 'page-home.php'): ?> active  <?php else: ?> hidden  <?php endif; ?>"><?php echo traina_get_svg_icon('white-logo'); ?></span>
								</div>
							</div>
						</a>
					</div>
					<div class="navbar-nav">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->
<?php

<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<?php // the_custom_logo();
	$content_office = get_field('td_global_office_info', 'option');
?>

<nav id="display_navigation" role="navigation" aria-label="website display menu">
	<div class="main-menu">
		<!-- <div id="logo-mobile">
			<span id="" class="image_link" aria-hidden="true">
				<a href="/"><img src="" alt=""></a>
			</span>
		</div> -->
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'traina_wp' ); ?>">
			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class' => 'nav-menu',
				'container_class' => 'menu'
			) ); ?>
		</nav><!-- #site-navigation -->
		<button title="Click Here to open the complete navigation menu" class="hamburger-menu menu-toggle" aria-controls="menu-primary-menu-full" aria-expanded="false">
			<span class="h-line h-line__1"></span>
			<span class="h-line h-line__2"></span>
			<span class="h-line h-line__3"></span>
		</button>
	</div>
</nav>

<nav id="display_full_navigation" role="navigation" aria-label="website display menu" class="fade-in-menu" data-tabbable>
	<div class="flex-grid">
		<div class="left-content">
			<div class="content__wrapper">
				<span class="image_link" aria-hidden="true">
					<!-- <img src="/wp-content/uploads/2018/12/logo.png" alt="SYA Logo"> -->
					<?php echo traina_get_svg_icon('logo-with-icon'); ?>
				</span>
				<h2 class="nav-cta">Winning <br/>the right way.<br/> Every Day.</h2>
			</div>
		</div>

		<nav id="full-site-nav" class="full-site-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Full Menu', 'traina_wp' ); ?>" >
			<div class="top-mobile-nav">
				<a href="/" class="logo-link" alt="Return to homepage">
					<div class="image_link mobile-logo" aria-hidden="true" tabindex="1">
							<!-- <img src="/wp-content/uploads/2018/12/logo.png" alt="SYA Logo"> -->
							<?php echo traina_get_svg_icon('logo-with-icon'); ?>
					</div>
				</a>
				<button title="Click here to close the menu overlay" class="close-button menu-close" close-menu close-button  tabindex="1">
					<span class="close-bar close-bar-one"></span>
					<span class="close-bar close-bar-two"></span>
				</button>
			</div>
			<div class="menu">
				<?php
					wp_nav_menu( array(
					'theme_location' => 'primary_menu_full',
					'menu_class' => 'nav-menu-full'
				) ); ?>
				<nav class="mobile-nav-footer">
					<h6 class="footer-nav-col-title">Office</h6>
					<?php echo $content_office; ?>
				</nav>
			</div>
		</nav>
	</div>
</nav>

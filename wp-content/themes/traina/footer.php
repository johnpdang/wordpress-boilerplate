<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.2
*/
global $footer_modals_array; /* get global modals array */

$content_office = get_field('td_global_office_info', 'option');
?>
<footer id="footer" class="footer bg_alt fade-in load-hidden">
	<div class="inner-wrap">
		<div class="theme-container">
			<div class="flex-wrap">
				<div class="flex-col flex-col__logo">
					<span id="footer-website_logo_link" class="image_link" aria-hidden="true">
						<?php echo traina_get_svg_icon('logo-with-icon'); ?>
					</span>
				</div>
				<div class="footer-right-content">
					<?php if($content_office): ?>
						<div class="flex-col flex-col__nav">
							<h6 class="footer-col-title">Office</h6>
							<?php echo $content_office; ?>
						</div>
					<?php endif; ?>
					<div class="flex-col flex-col__nav">
						<h6 class="footer-col-title">Info</h6>
						<nav id="footer-tertiary-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Secondary Menu', 'traina_wp' ); ?>">
						<?php wp_nav_menu( array(
							'menu'       => '3',
							'menu_class' => 'menu second-menu',
							'container'  => 'ul'
						) ); ?>
						</nav>
					</div>

				</div>
			</div>
			<div class="flex-wrap">
				<div class="flex-col flex-col__logo">&nbsp;</div>
				<div class="flex-col flex-2 disclaimer">
					<p><?php echo get_field('td_global_copyright', 'option'); ?></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php if($footer_modals_array): ?>
	<div id="footer__modals_container">
		<?php foreach($footer_modals_array as $modal_html):
        echo $modal_html;
    	endforeach;
		// echo '<div class="modal-backdrop fade"></div>'; ?>
	</div>
<?php endif; ?>
</div><!-- #page -->
<div class="td_modal_backdrop"></div>
<?php wp_footer(); ?>


<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
            <header class="page-header">
						<?php /** Set variable for the height of the Hero Banner **/ ?>
						<?php
								$image_arr = get_field('hero_featured_image');
								$cta_header = get_field('hero_header');
								$cta_tagline = get_field('hero_tagline');
								$handle_title = explode("::",get_the_title());
								$header_title = $handle_title[0];
								// $form_id = get_field('gravity_form_id');
								$sub_title = $handle_title[1];
								if(!$image_arr) {
										$img_url = '/wp-content/uploads/2019/06/advocacy-hero-bg@2x.jpg';
								} else {
										$img_url = $image_arr["url"];
								}
						?>
						<div class="hero-section hero lp-hero">
								<figure class="hero-background-image">
										<img src="<?php echo $img_url; ?>" aria-hidden="true" alt="" />
								</figure>
								<div class="hero-content__wrapper grow container">
										<div class="hero-content">
												<span class="line"></span>
												<p class="eyebrow fade-in load-hidden"><?php echo 'Error 404'//get_the_title(); ?></p>
												<h1 class="page-header fade-in load-hidden"><?php echo 'Objection.'//$cta_header; ?></h1>
												<p class="fade-in load-hidden c_white">We couldn't find the page you're looking for or it doesn't exist!</p>
												<p class="fade-in load-hidden c_white">Case dismissed.</p>
												<a href="/" class="button btn-reverse">Return Home</a>
										</div>
								</div>
						</div>
						</header><!-- .page-header -->

				<div class="page-content">

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();





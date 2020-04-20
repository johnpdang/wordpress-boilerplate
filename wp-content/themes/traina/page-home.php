<?php
/* Template Name: Home Page

 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();
$pid = get_the_ID();

?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <header class="page-header">
                <?php include(locate_template('template-parts/components/hero.php') );	?>
            </header>
			<?php
			if(get_the_content()):
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/page/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			endif;
			?>
			<?php include(locate_template('template-parts/components/home-masonry-block-one.php')); ?>

				<?php include(locate_template('template-parts/components/block-quotes.php') );	?>
				<?php include(locate_template('template-parts/components/home-masonry-block-two.php')); ?>

			<?php include(locate_template('template-parts/components/contact-form.php' ) ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();

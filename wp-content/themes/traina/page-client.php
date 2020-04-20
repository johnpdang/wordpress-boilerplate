<?php
/* Template Name: Client Page */
get_header();
$pid = get_the_ID();
$caseStudyArgs = array(
	'post_type'      => array( 'case-study' ),
	'posts_per_page' => -1,
	'post_status'    => 'publish',
	'orderby'        => 'published',
	'order'          => 'ASC',
	'tax_query'		 => array(
		array(
			'taxonomy' => 'case-study-post-relationship',
			'field'    => 'slug',
			'terms'    => 'clients-page',
			'operator' => 'IN',
		)
	)
);
?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <header class="page-header">
                <?php include(locate_template('template-parts/components/hero-subpage.php') );	?>
            </header>
			<?php include(locate_template('template-parts/blocks/block-client-list.php') );	?>
			<section class="image__wrapper">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" />
			</section>
			<?php include(locate_template('template-parts/blocks/block-case-studies.php') );	?>
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'page' );
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();

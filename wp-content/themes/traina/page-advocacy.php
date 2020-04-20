<?php

/* Template Name: Advocacy Page */

get_header();
$pid = get_the_ID();
$personnelArgs = array(
	"term" => 'advocates',
	"term_id" => 6
);
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
			'terms'    => 'advocacy',
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
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'page' );
			endwhile; // End of the loop.
			?>
      		<?php handle_info_section('template-parts/components/section-blocks.php', $pid, 0); ?>
			<?php include(locate_template('template-parts/components/section-banner.php')); ?>
			<?php include(locate_template('template-parts/components/grid-personnel.php') ); ?>
			<?php include(locate_template('template-parts/components/block-quotes.php') );	?>
			<?php include(locate_template('template-parts/blocks/block-three-col.php') );	?>
			<?php include(locate_template('template-parts/components/section-info.php')); ?>
			<?php include(locate_template('template-parts/blocks/block-case-studies.php') );	?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();

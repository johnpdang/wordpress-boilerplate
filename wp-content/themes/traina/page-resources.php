<?php

/* Template Name: Resources Page */

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
 			'terms'    => 'advocacy',
 			'operator' => 'IN',
 		)
 	)
 );

 ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <header class="page-header">
                <?php include(locate_template('template-parts/components/hero-subpage.php') );	?>
			</header>

            <?php include(locate_template('template-parts/blocks/block-resources-gvmt-agencies.php') );	?>
            <?php include(locate_template('template-parts/blocks/block-resources-legis-cal.php') );	?>
            <?php include(locate_template('template-parts/blocks/block-resources-findmyrep.php') );	?>
            <?php include(locate_template('template-parts/blocks/block-resources-newsinfo.php') );	?>
            <?php include(locate_template('template-parts/blocks/block-resources-legislative-agenda.php') );	?>
            <?php include(locate_template('template-parts/blocks/block-resources-am-resources.php') );	?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();

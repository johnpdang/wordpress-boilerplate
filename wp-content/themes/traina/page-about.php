<?php

/* Template Name: About Page */


get_header();
$pid = get_the_ID();

$personnelArgs = array(
	"term" => 'dream-team',
	"term_id" => 4
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

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			<?php handle_info_section('template-parts/components/section-blocks.php', $pid, 0); ?>

            <?php include(locate_template('template-parts/components/section-banner.php')); ?>

			<?php handle_info_section('template-parts/components/section-blocks.php', $pid, 1); ?>

			<?php include(locate_template('template-parts/components/grid-personnel.php') ); ?>

			<?php include(locate_template('template-parts/components/block-quotes.php') );	?>
			<section id="section-info" class="section__wrapper">
				<div class="container">
					<div class="flex-grid">
						<div class="grid-item left-content flex-2" data-sr-id="5">
							<h2 class="column-title"><?php echo get_the_title(17); ?></h2>
							<p class="column-content"><?php echo get_field('sec_preview_block_summary', 17); ?></p>
							<a class="button" href="<?php echo get_the_permalink(17); ?>">Learn More</a>
						</div>
						<div class="grid-item flex-2 image-right " data-sr-id="3" >
							<div class="icon  icon__bottom-left">
								<img src="<?php echo get_field('sec_preview_block_icon', 17)["url"]; ?>" alt="">
							</div>
							<figure class="image__wrapper">
								<img src="<?php echo get_field('sec_preview_block_img', 17)["url"]; ?>" alt="" class="img-responsive">
							</figure>
						</div>
					</div>

					<div class="flex-grid">
						<div class="grid-item flex-2 image-right " data-sr-id="3" >
							<div class="icon  icon__bottom-right">
								<img src="<?php echo get_field('sec_preview_block_icon', 19)["url"]; ?>" alt="">
							</div>
							<figure class="image__wrapper">
								<img src="<?php echo get_field('sec_preview_block_img', 19)["url"]; ?>" alt="" class="img-responsive">
							</figure>
						</div>
						<div class="grid-item left-content flex-2" data-sr-id="5">
							<h2 class="column-title"><?php echo get_the_title(19); ?></h2>
							<p class="column-content"><?php echo get_field('sec_preview_block_summary', 19); ?></p>
							<a class="button" href="<?php echo get_the_permalink(19); ?>">Learn More</a>
						</div>
					</div>
				</div>
			</section>

			<?php include(locate_template('template-parts/blocks/block-giving-back.php') ); ?>
            <?php include(locate_template('template-parts/components/contact-form.php' ) ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();

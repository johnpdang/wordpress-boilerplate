<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

 /* ARTICLE FIELDS */

/*

 article_gallery_rep
 	article_gallery_slide_eyebrow
	article_gallery_slide_title
	article_gallery_slide_img

*/


$a_eyebrow = get_field('article_eyebrow');
$a_excerpt = get_the_excerpt();
$a_downloads = get_field('article_dl_rep');

$a_post_gallery = get_field('article_gallery_rep');
if($a_post_gallery):
	$sliderHTML = '<div class="slider article__slider">';
	foreach($a_post_gallery as $aRow):
		$article_gallery_slide_eyebrow = $aRow["article_gallery_slide_eyebrow"];
		$article_gallery_slide_title = $aRow["article_gallery_slide_title"];
		$article_gallery_slide_img = $aRow["article_gallery_slide_img"]["url"];
		$sliderHTML .= '
			<div class="slider-large-card__wrapper">
				<div class="flex-grid grow">
					<div class="flex-3 masonry-card  aqua-block ">
						<hr class="line__bottom"/>';
						if($article_gallery_slide_eyebrow):
						$sliderHTML .= '<p class="eyebrow sup_eyebrow">' . $article_gallery_slide_eyebrow . '</p>';
						endif;
						$sliderHTML .= '<h3 class="column-title">' . $article_gallery_slide_title . '</h3>
					</div>
					<div class="flex-2 grow image__wrapper">
						<figure class="image__wrapper">
							<img class="img-responsive" src="' . $article_gallery_slide_img . '" />
						</figure>
					</div>
				</div>
			</div>';

	// while(have_rows('$a_post_gallery')): the_row();
	endforeach;
	$sliderHTML .= '</div>';
endif;

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="entry__header">
					<?php if($a_eyebrow): ?>
						<p class="eyebrow"><?php echo $a_eyebrow; ?></p>
					<?php endif; ?>
					<h1 style="h3"><?php the_title(); ?></h1>
				</div>

				<?php /* FEATURED MEDIA ASSET */ include(locate_template('template-parts/blocks/block-article-feature-media.php') );	?>

				<?php if($a_excerpt): ?>
					<div class="entry__excerpt">
						<p><?php echo $a_excerpt; ?></p>
					</div>
					<hr/>
				<?php endif; ?>
				<div class="entry__content">
				<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						if($a_post_gallery):
							$the_content = get_the_content();
							$newContent = str_replace('[TRAINA-WPGALLERY]', $sliderHTML, $the_content);
							echo $newContent;
						else:
							the_content();
						endif;
						// If comments are open or we have at least one comment, load up the comment template.
						// if ( comments_open() || get_comments_number() ) :
						// 	comments_template();
						// endif;

					endwhile; // End of the loop.
					?>
				</div>
				<?php if($a_downloads): ?>
					<div class="entry__downloads">
						<div class="header">
							<h6>DOCUMENTS</h6>
						</div>
						<div class="block__content">
							<?php foreach($a_downloads as $dl): ?>
								<div class="">
									<h6><?php echo $dl["article_dl_file_name"]; ?></h6>
									<a href="<?php echo $dl["article_dl_file"]["url"]; ?>" class="button button__download" title="Download the <?php echo $dl["article_dl_file_name"]; ?> Resource">DOWNLOAD</a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>
				<div class="entry__endpager text-center">
					<button onclick="goBack()" class="button button__back">BACK TO CASE STUDIES</button><script>function goBack() {window.history.back();}</script>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php /* get_sidebar(); */ ?>
<?php get_footer();

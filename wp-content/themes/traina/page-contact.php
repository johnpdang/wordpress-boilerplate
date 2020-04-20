<?php
/* Template Name: Contact Page */
get_header();
$pid = get_the_ID();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <header class="page-header">
            <?php include(locate_template('template-parts/components/hero-subpage.php') );	?>
        </header>
        <div class="container">
            <?php include('template-parts/components/contact-form.php'); ?>
        </div>
        <div class="container-fluid">
            <?php include('template-parts/blocks/block-location.php'); ?>
        </div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();

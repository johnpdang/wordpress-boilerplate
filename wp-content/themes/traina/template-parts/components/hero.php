<?php /** Set variable for the height of the Hero Banner **/ ?>
<?php
    $image_arr = get_field('hero_featured_image');
    $hero_header = get_field('hero_header');
    $hero_sub_header = get_field('hero_sub_header');
    $hero_tagline = get_field('hero_tagline');
    $handle_title = explode("::",get_the_title());
    $header_title = $handle_title[0];
    // $form_id = get_field('gravity_form_id');
    $sub_title = $handle_title[1];
    $hero_cta = get_field('hero_cta');
?>

<div class="hero-section hero lp-hero home">
    <figure class="hero-background-image">
        <img src="<?php echo $image_arr['url']; ?>" aria-hidden="true" alt="" />
    </figure>
    <div class="hero-content__wrapper grow container">
        <div class="hero-content">
            <h1 class="page-header animate-in-down load-hidden"><?php echo $hero_header; ?></h1>
            <?php if($hero_sub_header): ?>
                <h2 class="page-subheader fade-in-delay load-hidden"><?php echo $hero_sub_header; ?></p>
            <?php endif; ?>
            <?php if($hero_tagline): ?>
                <p class="page-tagline fade-in-delay load-hidden"><?php echo $hero_tagline; ?></p>
            <?php endif; ?>
            <?php if($hero_cta): ?>
            <a class="button" href="<?php echo $hero_cta["url"]; ?>" title="<?php echo $hero_cta["title"]; ?>" target="<?php echo $hero_cta["target"]; ?>"><?php echo $hero_cta["title"]; ?></a>
            <?php endif ?>
        </div>
    </div>
</div>
<!-- <div class="ghost-container"></div> -->

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
        $img_url = '/wp-content/uploads/2019/05/advocacy-hero-bg.jpg';
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
            <p class="eyebrow fade-in load-hidden"><?php echo get_the_title(); ?></p>
            <h1 class="page-header fade-in load-hidden"><?php echo $cta_header; ?></h1>
        </div>
    </div>
</div>
<!-- <div class="ghost-container"></div> -->

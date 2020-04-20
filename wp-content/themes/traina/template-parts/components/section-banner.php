<?php
    $banner_size     = get_field('banner_size');
    $banner_position = get_field('banner_position');

    if(have_rows('left_content')){
        while(have_rows('left_content')){
            the_row();
            $bg_color = get_sub_field('background_color');
            $bg_image = get_sub_field('background_image');
            $eyebrow  = get_sub_field('eyebrow');
            $title    = get_sub_field('title');
            $quote    = get_sub_field('blockquote');
            $content  = get_sub_field('content');
        }
    }

    if(have_rows('right_content')){
        while ( have_rows('right_content')){
            the_row();
            $featured_image = get_sub_field('featured_image');
            $icon           = get_sub_field('icon');
            $animation_type = get_sub_field('animation_type');
        }
    }
?>

<section id="section-banner" class="<?php echo $banner_size; ?> <?php echo $banner_position; ?> section__wrapper" nav-item="grid">
    <div class="container top-layer">
        <div class="flex-grid">
            <div class="grid-item left-content flex-2 <?php if($bg_color): echo $bg_color; endif; ?>">
            <span class="support-large-text ">10 </span>
                <?php if($eyebrow): ?>
                    <span class="eyebrow c_white"><?php echo $eyebrow; ?></span>
                    <hr class="line__bottom" />
                <?php endif; ?>
                <?php if($title): ?>
                    <h2 class="column-title"><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if($blockquote): ?>
                    <span class="line"></span>
                    <blockquote class="c_white"><?php echo $quote; ?></blockquote>
                <?php endif; ?>
                <?php if($content): ?>
                    <div class="column-content">
                    <span class="line"></span>
                        <?php echo $content; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="grid-item flex-2 image-right <?php if($animation_type): echo $animation_type; endif; ?> " >
                <?php if($icon): ?>

                    <div class="icon"><img src="<?php echo $icon['url'] ;?>" alt="<?php echo $icon['alt']; ?>"></div>
                <?php endif; ?>
                <?php if($featured_image): ?>
                    <figure class="image__wrapper">
                        <img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>">
                    </figure>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

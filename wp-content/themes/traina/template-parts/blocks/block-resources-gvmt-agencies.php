<section id="section-info" class="section__wrapper container">
    <div class="grid__header">
        <h2><?php echo get_field('block_gov_agency_title'); ?></h2>
        <p><?php echo get_field('block_gov_agency_sum'); ?></p>
    </div>
    <div class="grid light-card-grid__wrapper">
        <div class="section-grid flex-grid card">
            <?php if(have_rows('block_gov_agency_rep')): ?>
                    <!-- <ul> -->
                    <?php while(have_rows('block_gov_agency_rep')): the_row(); ?>
                        <div class="flex-4 card__item has-more">
                            <div class="card__content">
                                <div class="card__text">
                                    <p><?php echo get_sub_field('block_gov_agency_rep_title'); ?></p>
                                    <hr class="line__bottom">
                                </div>
                                <?php if(get_sub_field('block_gov_agency_rep_img')): ?>
                                    <div class="card__more" id="client-block--0-data" data-rel="">
                                        <div class="card__body">
                                            <!-- <figure><img data-animate="f-sync-fIn-0" class="f-sync-i f-sync-fIn-0 hoverZoomLink" src="<?php echo get_the_post_thumbnail_url($pid); ?>" alt=""></figure> -->
                                            <figure class="card__image-wrapper"><img data-animate="f-sync-fIn-0" class="f-sync-i f-sync-fIn-0 hoverZoomLink" src="<?php echo get_sub_field('block_gov_agency_rep_img')['url']; ?>" alt="<?php echo get_sub_field('block_gov_agency_rep_title'); ?> Logo"></figure>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <a title="Click here to visit the <?php echo get_sub_field('block_gov_agency_rep_title'); ?> website, opens in a new window" href="<?php echo get_sub_field('block_gov_agency_rep_url'); ?>" class="link_external" target="_blank"><?php echo traina_get_svg_icon('link-out-icon'); ?></a>
                                <!-- <img src="/wp-content/uploads/2019/05/external-link-btn-default@2x.png"> -->
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- </ul> -->
            <?php endif; ?>
        </div>
</section>


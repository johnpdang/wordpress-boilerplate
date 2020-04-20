<section id="section-news-info" class="section section__wrapper">
    <div class="container top-layer">
        <div class="flex-grid background-image">
            <div class="grid-item left-content flex-2 text-content">
                <div class="column-content">
                    <span class="eyebrow"><?php echo get_field('block_newsinfo_title'); ?></span>
                    <h2 class="column-title"><?php echo get_field('block_newsinfo_title'); ?></h2>
                    <?php if(have_rows('block_gov_agency_rep')): ?>
                        <ul class="flex-grid">
                            <?php while(have_rows('block_newsinfo_rep')): the_row(); ?>
                                <li class="flex-2">
                                    <a title="Click here to visit <?php echo get_sub_field('block_newsinfo_rep_link')['title']; ?>, opens in a new window" href="<?php echo get_sub_field('block_newsinfo_rep_link')['url']; ?>" class="link_external" target="_blank">
                                        <?php echo get_sub_field('block_newsinfo_rep_link')['title']; ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-item flex-3 image-absolute bg_secondary_reverse">
        <div class="icon"><img src="<?php echo get_field('block_newsinfo_icon'); ?>" alt=""></div>
        <figure class="image__wrapper">
            <img src="<?php echo get_field('block_newsinfo_img')["url"]; ?>" alt="" />
        </figure>
    </div>
</section>
<section id="section-info" class="section__wrapper above-footer">
    <div class="container">
        <div class="grid__header-lg">
            <p class="eyebrow"><?php echo get_field('block_giving_eyebrow', 'option'); ?></p>
            <h3><?php echo get_field('block_giving_title', 'option'); ?></h3>
        </div>
        <div class="section-grid flex-grid">
            <div class="flex-2">
                <?php if(have_rows('links_column_one_rep', 'option')): ?>
                    <?php while(have_rows('links_column_one_rep', 'option')): the_row(); ?>
                        <div>
                            <a href="<?php echo get_sub_field('block_giving_link', 'option'); ?>" title="Click here to visit <?php echo get_sub_field('block_giving_link_title'); ?>, opens in a new window" target="_blank"><?php echo get_sub_field('block_giving_link_title', 'option'); ?></a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="flex-2">
                <?php if(have_rows('links_column_two_rep', 'option')): ?>
                    <?php while(have_rows('links_column_two_rep', 'option')): the_row(); ?>
                        <div>
                            <a href="<?php echo get_sub_field('block_giving_link', 'option'); ?>" title="Click here to visit <?php echo get_sub_field('block_giving_link_title'); ?>, opens in a new window" target="_blank"><?php echo get_sub_field('block_giving_link_title', 'option'); ?></a>
                        </div>
                        <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </section>

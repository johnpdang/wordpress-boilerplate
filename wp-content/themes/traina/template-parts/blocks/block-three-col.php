<section id="industry-expertise" class="section__wrapper">
    <div class="container">
        <div class="grid__header grid__header-md">
            <h3><?php echo get_field('tcol_block_title'); ?></h3>
            <p><?php echo get_field('tcol_block_summary'); ?></p>
        </div>
        <div class="flex-grid">
            <?php if(have_rows('tcol_col1_item_rep')): ?>
                <div class="flex-3">
                    <?php while(have_rows('tcol_col1_item_rep')): the_row(); ?>
                        <div class="item">
                            <h6><?php echo get_sub_field('tcol_col_title'); ?></h6>
                            <p><?php echo get_sub_field('tcol_block_col_body'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php if(have_rows('tcol_col2_item_rep')): ?>
                <div class="flex-3">
                    <?php while(have_rows('tcol_col2_item_rep')): the_row(); ?>
                        <div class="item">
                            <h6><?php echo get_sub_field('tcol_col_title'); ?></h6>
                            <p><?php echo get_sub_field('tcol_block_col_body'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php if(have_rows('tcol_col3_item_rep')): ?>
                <div class="flex-3">
                    <?php while(have_rows('tcol_col3_item_rep')): the_row(); ?>
                        <div class="item">
                            <h6><?php echo get_sub_field('tcol_col_title'); ?></h6>
                            <p><?php echo get_sub_field('tcol_block_col_body'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

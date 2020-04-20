<section id="section-legislative-cal" class="section__wrapper">
    <div class="container">
        <div class="grid__header">
            <h6 class="eyebrow"><?php echo get_field('block_leg_cal_eyebrow'); ?></h6>
            <h2><?php echo get_field('block_leg_cal_title'); ?></h2>
        </div>
        <div class="grid">
            <div class="section-grid flex-grid card">
                <?php if(have_rows('block_leg_cal_rep')): ?>
                        <!-- <ul> -->
                        <table id="legislative-calendar" class="theme_table__list">
                            <?php while(have_rows('block_leg_cal_rep')): the_row(); ?>
                            <tr>
                                <td><?php echo get_sub_field('block_leg_cal_rep_date'); ?></td>
                                <td><?php echo get_sub_field('block_leg_cal_rep_title'); ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </table>
                        <!-- </ul> -->
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>


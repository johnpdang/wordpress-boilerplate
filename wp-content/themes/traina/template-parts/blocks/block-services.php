<?php
    $content_divs = '';
    $c = 0;
?>
<section id="section-info" class="">
    <div class="container">
        <div class="grid__header">
            <p class="eyebrow"><?php echo get_field('block_service_eyebrow'); ?></p>
            <h3><?php echo get_field('block_service_title'); ?></h3>
        </div>
        <div class="section-grid flex-grid">
            <?php if(have_rows('block_service_rep')): ?>
                <div class="flex-2">
                    <!-- <ul> -->
                    <?php while(have_rows('block_service_rep')): the_row(); ?>
                        <div>
                            <a class="popup_div__link <?php if($c == 0): ?>active<?php endif; ?>" href="#" id="" data-rel="#popup_div_<?php echo $c; ?>">
                                <?php echo get_sub_field('block_service_s_title'); ?>
                            </a>
                            <?php
                                $content_divs .= '
                                <div id="popup_div_' . $c . '" class="popup_div hidden';
                                if($c == 0):
                                    $content_divs .= ' active';
                                endif;
                                $content_divs .= '">';
                                $content_divs .= get_sub_field('block_service_s_copy');
                                $content_divs .= '<img class="popup_div__icon" src="' . get_sub_field('block_service_s_icon') . '"/>
                                </div>';
                            ?>
                        </div>
                    <?php $c++; endwhile; ?>
                    <!-- </ul> -->
                </div>
                <div class="flex-2">
                    <?php echo $content_divs; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php
 $link1 = get_field('block_leg_agenda_link1');
 $link2 = get_field('block_leg_agenda_link2');
 $link3 = get_field('block_leg_agenda_link3');
?>
<section id="section-legislative-agenda" class="background-beige section__wrapper">
    <div class="container">
        <div class="grid__header">
            <h6 class="eyebrow"><?php echo get_field('block_leg_agenda_eyebrow'); ?></h6>
            <h2><?php echo get_field('block_leg_agenda_title'); ?></h2>
            <p><?php echo get_field('block_leg_agenda_sum'); ?></p>
        </div>
        <div class="grid">
            <div class="section-grid flex-grid agenda-grid">
                <?php if($link1): ?>
                    <div class="flex-3 no-padding">
                        <h4><?php echo $link1['title']; ?></h4>
                        <a class="link_external button" href="<?php echo $link1['url']; ?>" title="Click here to visit <?php echo $link1['title']; ?>, opens in a new window" target="_blank">Learn More</a>
                    </div>
                <?php endif; ?>
                <?php if($link2): ?>
                    <div class="flex-3 no-padding">
                        <h4><?php echo $link2['title']; ?></h4>
                        <a class="link_external button" href="<?php echo $link2['url']; ?>" title="Click here to visit <?php echo $link2['title']; ?>, opens in a new window" target="_blank">Learn More</a>
                    </div>
                <?php endif; ?>
                <?php if($link3): ?>
                    <div class="flex-3 no-padding">
                        <h4><?php echo $link3['title']; ?></h4>
                        <a class="link_external button" href="<?php echo $link3['url']; ?>" title="Click here to visit <?php echo $link3['title']; ?>, opens in a new window" target="_blank">Learn More</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php
    $block_contact_eyebrow = get_field('block_contact_eyebrow');
    $block_contact_headline = get_field('block_contact_headline');
    $block_contact_subheader = get_field('block_contact_subheader');
    $block_contact_copy = get_field('block_contact_copy');
    $block_contact_addt = get_field('block_contact_addt');
    $form_obj = get_field('block_contact_form_obj');

    // contact page id = 23
    // if(get_the_ID() == 23) {
    //     $showCareerOption = true;
    // }
    $block_contact_careers_show = get_field('block_contact_careers_show');
    if($block_contact_careers_show):
        $showCareerOption = true;
        $block_contact_careers_msg = get_field('block_contact_careers_msg');
        $block_contact_careers_link = get_field('block_contact_careers_link');
    endif;

?>
<?php if($form_obj): ?>
<section class="section-grid section-form__wrapper form inverse">
    <div class="theme-container featured">
        <div class="container">
            <div class="flex flex-grid">
            <div class="flex-2">
                <?php if($block_contact_eyebrow): ?>
                    <p class="section-eybrow eyebrow"><?php echo $block_contact_eyebrow; ?></h2>
                <?php endif; ?>
                <?php if($block_contact_headline): ?>
                    <h2 class="section-title"><?php echo $block_contact_headline; ?></h2>
                <?php endif; ?>
                <?php if($block_contact_subheader): ?>
                    <p class="section-subtitle"><?php echo $block_contact_subheader; ?></p>
                <?php endif; ?>
                <?php if($block_contact_copy): ?>
                    <p class="section-content"><?php echo $block_contact_copy; ?></p>
                <?php endif; ?>
                <?php if($block_contact_addt): ?>
                <hr />
                    <p class="section-subtitle"><?php echo $block_contact_addt; ?></p>
                <?php endif; ?>
            </div>
            <div class="flex-2">
                <?php if($showCareerOption): ?>
                    <div class="tab__wrapper" role="tab-list">
                    <div class="tab__header">
                        <li><a data-toggle="tab" href="#contact_block_form" class="active" role="tab" aria-controls="contact_block_form" aria-selected="true">Contact</a></li>
                        <li><a data-toggle="tab" href="#contact_block_careers" role="tab" aria-controls="contact_block_careers" aria-selected="false">Careers</a></li>
                    </div>
                    <div class="tab__content">
                        <div class="tab__item tab-pane active" id="contact_block_form" role="tabpanel" arai-labelledby="contact_block_form">
                            <?php echo do_shortcode('[gravityform id="' . $form_obj['id'] . '" title="false" description="false" ajax="true"]'); ?>
                        </div>
                        <div class="tab__item tab-pane" id="contact_block_form" role="tabpanel" arai-labelledby="contact_block_careers">
                            <div><?php echo $block_contact_careers_msg; ?></div>
                            <a class="button button__external" href="<?php echo $block_contact_careers_link["url"]; ?>" title="Click here to <?php echo $block_contact_careers_link["title"]; ?>, opens in a new window" target="<?php echo $block_contact_careers_link["target"]; ?>"><?php echo $block_contact_careers_link["title"]; ?></a>
                        </div>
                    </div>

                <?php else: ?>
                    <?php echo do_shortcode('[gravityform id="' . $form_obj['id'] . '" title="false" description="false" ajax="true"]'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php
$eventArgs = array(
    'post_type'      => array( 'upcoming-event' ),
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'meta_key'		 => 'event_start_date',
    'orderby'        => 'meta_value',
    'order'          => 'ASC'
);
$results = get_query_results($eventArgs);

?>


<section id="upcoming-events" class="">
    <div class="container">
        <div class="grid__header">
            <h3><?php echo get_field('block_up_events_title', 'option'); ?></h3>
            <p><?php echo get_field('block_up_events_copy', 'option'); ?></p>
        </div>
        <div class="section-grid flex-grid flex-start">
            <?php foreach($results as $rid):
                $event_title = get_the_title($rid);
                ?>
                <div class="event item flex-3">
                    <?php if(get_field('event_external_link_url', $rid)): ?>
                        <a href="<?php echo get_field('event_external_link_url', $rid); ?>" class="button-mask" title="Click here to view the <?php echo $event_title; ?> details, opens in a new window" target="_blank">
                    <?php endif; ?>
                    <p class="eyebrow"><?php echo $termTitle; ?></p>
                    <h6><?php echo $event_title; ?></h6>
                    <p class="event__date"><?php echo get_field('event_date', $rid); ?></p>
                    <?php if(get_field('event_location', $rid)): ?>
                        <p class="event__loc"><?php echo get_field('event_location', $rid); ?></p>
                    <?php endif; ?>
                    <?php if(get_field('event_external_link_url', $rid)): ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

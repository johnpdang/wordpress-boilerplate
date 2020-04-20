<?php
    global $google_map_api_key;
    if(get_field('block_loc_map')):
        $show_map = true;
        $loc_lat = get_field('block_loc_map')["lat"];
        $loc_lng = get_field('block_loc_map')["lng"];
        $html .= '<img src="';
        $html .= 'https://maps.googleapis.com/maps/api/staticmap?center=' . $loc_lat . ',' . $loc_lng;
        $html .= '&zoom=13';
        $html .= '&size=657x394';
        $html .= '&scale=2';
        $html .= '&maptype=roadmap';
        $html .= '&markers=' . $loc_lat . ',' . $loc_lng;
        $html .= '&key=' . $google_map_api_key;
    $html .= '" class="img-responsive"/>';
    $map_img = $html;
    endif;
$block_loc_title = get_field('block_loc_title');
$block_loc_copy = get_field('block_loc_copy');

?>
<?php if($block_loc_title && $show_map): ?>
    <div class="section-grid flex-grid background-image">
        <div class="grid-item left-content flex-2 bg_secondary_reverse">
            <?php if($block_loc_copy): ?>
                <div class="column-content">
                <h2 class="column-title"><?php echo $block_loc_title; ?></h2>
                    <?php echo $block_loc_copy; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="grid-item flex-2 image-right">
        <div class="icon"><img src="/wp-content/uploads/2019/05/nres-info@3x.png" alt=""></div>
            <figure class="image__wrapper">
                <?php echo $map_img; ?>
            </figure>
        </div>
    </div>
<?php endif; ?>

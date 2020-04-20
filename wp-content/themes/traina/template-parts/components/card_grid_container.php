<?php
// replace card array values with the proper acf fields
// define $slider_name in order to use a slider and before the include 
// define $card_type before the include 
// card_types => card_info, card_profile, card_blog

$card_arr = array(
    'card-1' => array(
        'image_url' => 'http://local.traina:8888/wp-content/uploads/2018/10/disease-cone.png',
        'image_alt' => 'image-alt-1',
        'card_title' => 'Early aDetection 1',
        'card_desc' => 'Monitoring those at risk or for recurrence through non-invasive diagnostics',
        'btn_text' => 'Learn More',
        'btn_link' => 'google.com'
    ),
    'card-2' => array(
        'image_url' => 'http://local.traina:8888/wp-content/uploads/2018/10/disease-cone.png',
        'image_alt' => 'image-alt-2',
        'card_title' => 'Early aDetection 2',
        'card_desc' => 'Monitoring those at risk or for recurrence through non-invasive diagnostics',
        'btn_text' => 'Learn More',
        'btn_link' => 'google.com'
    ),
    'card-3' => array(
        'image_url' => 'http://local.traina:8888/wp-content/uploads/2018/10/disease-cone.png',
        'image_alt' => 'image-alt-3',
        'card_title' => 'Early aDetection 3',
        'card_desc' => 'Monitoring those at risk or for recurrence through non-invasive diagnostics',
        'btn_text' => 'Learn More',
        'btn_link' => 'google.com'
    ),
);
?>
<div class="card-grid__wrapper flex-grid" <?php if($slider_name != ''): ?> js-data-slider="<?php echo $slider_name; ?>" <?php endif; ?>>
    <?php render_cards($card_arr, $card_type, $modal_name); ?>
</div>


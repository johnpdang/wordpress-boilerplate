<?php
    $slider_data = array(
        0 => array('title' => 'title 1', 'alt' => 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to ', 'caption' => 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to ', 'url' => 'https://via.placeholder.com/500'),
        1 => array('title' => 'title 2', 'alt' => 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to ', 'caption' => 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to ', 'url' => 'https://via.placeholder.com/500'),
        2 => array('title' => 'title 3', 'alt' => 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to ', 'caption' => 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to ', 'url' => 'https://via.placeholder.com/500'),
        3 => array('title' => 'title 4', 'alt' => 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to ', 'caption' => 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to ', 'url' => 'https://via.placeholder.com/500'),
        4 => array('title' => 'title 5', 'alt' => 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to ', 'caption' => 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to ', 'url' => 'https://via.placeholder.com/500')
    );
?>

<div class="section-slider flex-grid">
    <div class="left_column flex-2">
        <span class="slider-controls arrow_prev" data-controls='prev'><?php echo $slider_arrow; ?></span>
        <span class="slider-controls arrow_next" data-controls='next'><?php echo $slider_arrow; ?></span>
        <div class="slide-content__wrapper">
        <?php foreach($slider_data as $key=>$val): ?>
            <div class="slide-content <?php if($key === 0): ?> show <?php else: ?> hide <?php endif; ?>" slide-index="<?php echo $key ?>">
                <h4 class="section-title"><?php echo $val['title']; ?></h4>
                <p class="section-content"><?php echo $val['caption']; ?></p>
                <p class="section-content"><?php echo $val['alt']; ?></p>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <div class="right_column grow flex-2">
        <div class="slider_wrapper"  js-contact-gallery>
            <?php foreach($slider_data as $key=>$val): ?>
                <div class="slide__wrapper" data-slide="<?php echo $key; ?>">
                    <?php return_image($val, true); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

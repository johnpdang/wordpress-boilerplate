<?php
    $title = '';
    $subheader = '';
    $desc = '';
    $count = 0;
    $column_count = count($multi_column_info['columns']);
    $has_separators = $multi_column_info['has_separators'];

    // Loops through the $multi_column_info to pull out needed data
    foreach($multi_column_info as $key => $val){
        switch($key){
            case 'title':
                $title = $val;
                break;
            case 'subheader':
                $subheader = $val;
                break;
            case 'bg-color':
                $bg_color = $val;
            case 'svg-overlay':
                $svg_overlay = $val;
        };
    };
    if($svg_overlay){
        $overlayHTML = '<div class="svg-overlay">' .  $svg_overlay . '</div>';
    }else {
        $overlayHTML = '';
    }
?>

<?php if($multi_column_info): ?>
    <div class="section-multi-column__wrapper flex-grid" style="background-color: <?php echo $bg_color?>">
        <?php echo $overlayHTML; ?>
        <div class="flex-1 text_only text-center" >
            <h3 class="section-title"><?php echo $title ?></h3>
            <h4 class="section-subheading"><?php echo $subheader ?></h4>
        </div>
        <?php if($column_count > 0):?>
            <div class="section-column__wrapper flex-grid">
                <?php 
                    foreach($multi_column_info['columns'] as $key => $val){
                        $count += 1;
                        echo handle_multi_column($val, $count, $column_count, $has_separators);
                    };    
                ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
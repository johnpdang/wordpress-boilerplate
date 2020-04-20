<?php
    $title = '';
    $subheader = '';
    $desc = '';

    foreach($two_column_text_info as $key => $val){
        switch($key){
            case 'title':
                $title = $val;
                break;
            case 'subheader':
                $subheader = $val;
                break;
            case 'desc':
                $desc = $val;
                break;
        };
    };
?>

<?php if($two_column_text_info): ?>
    <div class="section-two-column__wrapper text_only flex-grid">
        <div class="flex-3" >
            <h3 class="section-title"><?php echo $title ?></h3>
            <h4 class="section-subheading"><?php echo $subheader ?></h4>
        </div>
        <div class="flex-2 grow">
            <p class="section-desc"><?php echo $desc ?></p>
        </div>
    </div>
<?php endif; ?>
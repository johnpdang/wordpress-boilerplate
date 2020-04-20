<?php
    $title = '';
    $subheader = '';
    $desc = '';
    $img_url = '';
    $btn_url = '';
    $btn_title = ''; 

    foreach($text_image_info as $key => $val){
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
            case 'button_title':
                $btn_title = $val;
                break;
            case 'button_link':
                $btn_link = $val;
                break;
            case 'image_link':
                $img_url = $val;
                break;
        };
    };
?>

<?php if($text_image_info): ?>
    <div class="section-two-column__wrapper text_image flex-grid">
        <div class="flex-2 <?php echo $order ?>" >
            <h3 class="section-title"><?php echo $title ?></h3>
            <?php if($btn_link): ?>
                <h4 class="section-subheading"><?php echo $subheader ?></h4>
            <?php endif; ?>
            <p class="section-desc"><?php echo $desc ?></p>
            <?php if($btn_link): ?>
                <a href="<?php echo $btn_link ?>" class="btn btn-primary"> <?php echo $btn_title ?> </a>
            <?php endif; ?>
        </div>
        <div class="flex-2">
            <img src="<?php echo $img_url ?>" alt="test">
        </div>
    </div>
<?php endif; ?>
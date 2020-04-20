<?php 
    if(have_rows('cta_section', $pid)){
        while ( have_rows('cta_section', $pid) ) : the_row();
            $bg_type = get_sub_field('background');
            $background = '';
            if($bg_type == 'image'){
                $background_img = get_sub_field('background_image');
                $background = 'style="background-image: url('. $background_img['url'] .')"';
            }else if($bg_type == 'color'){
                $background_color = get_sub_field('background_color');
                $background = 'style="background-color: #' . $background_color .'"';
            }
            $data = array(
                'section_title' => get_sub_field('section_title'),
                'section_subheader' => get_sub_field('section_subheader'),
                'background' => $background
            );
            $form_id = get_sub_field('gravity_form_id');
        endwhile;
    }
?>

<div class="section-grid cta_section" <?php echo $data['background']; ?>>
    <h2 class="column-title animate-in-down load-hidden"><?php echo $data['section_title']; ?></h2>
    <p class="column-desc fade-in-delay load-hidden"><?php echo $data['section_subheader']; ?></p>
    <?php include('signup-form.php'); ?>
</div>
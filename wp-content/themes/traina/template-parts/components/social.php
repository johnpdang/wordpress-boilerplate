<?php 
    $html = '<ul id="social_menu" class="menu second-menu text-left">';
    $linkedin = get_field('social_linkedin', 'option');

    if(get_field('social_facebook', 'option')){
        $html .= '<li class="icon-link-facebook menu-item"><a href="' . get_field('social_facebook', 'option') . '" title="Opens Facebook profile in new window" tabindex="0">' . traina_get_svg_icon('social-facebook', false) . ' Facebook</a></li>';
    }
    if(get_field('social_twitter', 'option')){
        $html .= '<li class="icon-link-twitter menu-item"><a href="' . get_field('social_twitter', 'option') . '" title="Opens Twitter profile in new window" tabindex="0">' . traina_get_svg_icon('social-twitter', false) . ' Twitter</a></li>';
    }
    if($linkedin){
        $html .= '<li class="icon-link-linkedin menu-item"><a href="' . $linkedin . '" target="_blank" title="Opens Linkedin profile in new window" tabindex="0">' . traina_get_svg_icon('social-linkedin', false) . ' LinkedIn</a></li>';
    }

    $html .= '</ul>';

    return $html;
?>
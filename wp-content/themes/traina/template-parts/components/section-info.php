<?php
/** Section Information
 *
 * Important to note for CSS Class names:
 *  - $column_type will control the layout. Values are the following:
 *      - text_left: this should set the text content in the left column and the image in the right column.
 *      - text_right: this should set the image in the left column and the text content in the right column.
 *
 *  - $icon_position will control where the icon sits in relation to the image. The class name will be 'icon__' followed by one of these values:
 *      - top-right
 *      - top-left
 *      - bottom-left
 *      - bottom-right
*/
?>


<?php
    $pid = get_the_ID();
    $section_type = get_field('section_type');

    // This is repeater
    if(have_rows('2_col_image_text')){
        while(have_rows('2_col_image_text')){
            the_row();
            $column_type = get_sub_field('column_type');
            // HTML Wrapper for the section goes here
            $two_col_html .= '<div class="flex-grid ' . $column_type . '">';

            // This is a group
            if(have_rows('text_column')){
                while(have_rows('text_column')){
                    the_row();
                    $title    = get_sub_field('title');
                    $content  = get_sub_field('content');
                    $cta      = get_sub_field('cta');
                }
            }

            // This is a group
            if(have_rows('image_column')){
                while(have_rows('image_column')){
                    the_row();
                    $featured_image = get_sub_field('featured_image');
                    $icon           = get_sub_field('icon');
                    $icon_position  = get_sub_field('icon_position');
                }
            }

            $two_col_html .= '
                <div class="grid-item text-content flex-2">
                    <h2 class="column-title">' . $title . '</h2>
                    <p class="column-content">' . $content . '</p>
                    <a class="button cta_link" href="' . $cta['url'] . '" target="' . $cta['target']  . '">' . $cta['title'] . '</a>
                </div>
                <div class="grid-item flex-2 image-content">
                    <div class="icon  icon__' . $icon_position . '">
                        <img src="' . $icon['url'] . '" alt="' . $icon['alt'] . '">
                    </div>
                    <figure class="image__wrapper">
                        <img src="' . $featured_image['url'] . '" alt="' . $featured_image['alt'] . '">
                    </figure>
                </div>
            ';

            $two_col_html .= '</div>';
        }
    }

    // This is group
    if(have_rows('hover_for_info_section')){
        while(have_rows('hover_for_info_section')){
            the_row();

            $hover_eyebrow          = get_sub_field('eyebrow');
            $hover_title            = get_sub_field('title');
            $list_titles            = '';
            $hover_content_html     = '';

           $counter = 0;
            //this is a repeater
            if(have_rows('links')){
                while(have_rows('links')){
                    the_row();

                    $link_title          = get_sub_field('link_title');
                    $slug                = convert_string_to_slug($link_title);
                    $link_content        = get_sub_field('link_content');
                    $link_icon           = get_sub_field('link_icon');
                    $list_titles_html    .= '<li class="hover-item" data-target="' . $slug . '">' . $link_title . '<span class="draw-line"></span></li>';
                    $visibility = $counter === 0 ? 'active' : 'hidden';

                    $hover_content_html .= '
                        <div id="' . $slug . '" class="hover-content__wrapper ' . $visibility . '">
                            <div class="icon  icon__top-left">
                                <img src="'. $link_icon['url'] . '" alt="' . $link_icon['alt'] . '">
                            </div>
                            <h2 class="column-title">' . $link_title . '</h2>
                            <p class="column-content">' . $link_content . '</p>
                        </div>
                    ';

                    $counter++;
                }

            }

            $section_hover = '
            <section id="services">
                <div class="container">
                    <div class="flex-grid">';
                        $section_hover .= '
                            <div class="grid-item flex-2" hover-links>
                                <p class="eyebrow">' . $hover_eyebrow . '</p>
                                <h2 class="column-title">' . $hover_title . '</h2>
                                <ul class="column-content">' .  $list_titles_html . '</ul>
                            </div>
                            <div class="grid-item flex-2">'
            				.  $hover_content_html .
            				'</div>';
                            $section_hover .= '
                    </div>
                </div>
            </section>';

        }
    }
?>

<section id="services" class="doc-section" nav-item="grid">
<?php
// TODO: Remove the logic for displaying both on the components page
?>
    <?php if($section_type === '2_col_text_img'){
            echo $two_col_html;
            if($pid === 57){
                echo $section_hover;
            }
        }elseif($section_type === 'section_with_hover'){
            echo $section_hover;
            if($pid === 57){
                echo $two_col_html;
            }
        }
    ?>
</section>

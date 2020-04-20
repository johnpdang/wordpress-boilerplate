<?php
/* Template Name: Theme Guide Page */
add_filter( 'body_attributes', 'template_custom_body_attributes' );
function template_custom_body_attributes( $attributes = [] ) {
	$attributes[] = 'data-spy="scroll" data-target="#doc-sidebar" data-offset="0"';
	return $attributes;
}

?>

<?php get_header(); ?>

<?php

include('template-parts/blocks/block-feed-latest-posts.php');

include('template-parts/components/featured-grid-section.php');

include('template-parts/blocks/block-preview-careers.php');

include('template-parts/components/slider.php');

?>
<div class="row">
    <div class="col-md-3 sidebar__wrapper">
            <div id="doc-sidebar" class="sp-sidebar" data-sp-sidebar="">
                <div class="sp-sidebar-inner">
                    <div class="sp-sidebar-container">
                        <nav id="doc-navigation" class="sp-sidebar-navigation">
                            <ul class="nav-entry">
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    <div class="theme-info col-md-9">
        <div id="section" class="sections" nav-item="Sections">
            <h3>Sections</h3>
            <div id="section-triangle" class="section-with-triangle__specs" nav-sub-item="Section Triangle">
                <h4>Section with triangle</h4>
                <p> When including <code>section_with_triangle</code>, be sure to set the variable <code>$background</code>. For example:</p>
                <h5>To set a background image:</h5>
                <pre>
                    <code>
                        $background = 'style="background-image: url(\'http://local.traina_wp:8888/wp-content/uploads/2018/10/bg-image1.jpg\');"'
                        include('template-parts/components/section_with_triangle.php');
                    </code>
                </pre>
                <h5>To set a specific color:</h5>
                <pre>
                    <code>

                        $background = 'style="background-color: #000"'
                        include('template-parts/components/section_with_triangle.php');
                    </code>
                </pre>
                <h5>To use default: </h5>
                <pre>
                    <code>
                        To use default:
                        $background = ''
                        include('template-parts/components/section_with_triangle.php');
                    </code>
                </pre>
            </div>
            <div id="section-text-image" class="section-text-image__specs" nav-sub-item="Section Two Column Text & Image">
                <h4>Section Text and Image</h4>
                <p> When including <code>featured-grid_three-grid</code>, be sure to set the variable <code>$text_image_info</code> with an associative array. For example:</p>
                <pre>
                    <code>
                        $text_image_info = array(
                            'title' => 'Deeper Analysis', // required
                            'subheader' => 'Looking Beyond DNA', // optional
                            'desc' => 'Cancer is complex, and every patient’s cancer is unique. Relyingon standard analysis of a tumor’s DNA too often fails
                                        to provide a complete picture of the disease—reducing the likelihood for an effective treatment strategy. traina_wp’s
                                        next generation liquid biopsy technology, GeneRADAR™, is providing patients a more robust genomic profile of their cancer.' // required,
                            'button_title' => 'Our Technology 2', // optional
                            'button_link' => 'google.com', // optional
                            'image_link' => 'http://local.traina_wp:8888/wp-content/uploads/2018/10/disease-cone.png' // required
                        );

                        include('template-parts/components/section_text_image.php')
                    </code>
                </pre>
                <p> Note the required fields and optional fields.</p>
                <pre>
                    <code>
                        'title',         // required
                        'subheader',     // optional
                        'desc',          // required
                        'button_title',  // optional
                        'button_link',   // optional
                        'image_link',    // required
                    </code>
                </pre>
            </div>
            <div id="section-text-text" class="section-two-column-text__specs" nav-sub-item="Section Two Column Text">
                <h4>Section Two Column</h4>
                <p> When including <code>section_two_column_text</code>, be sure to set the variable <code>$two_column_text_info</code> with an associative array. For example:</p>
                <pre>
                    <code>
                        $two_column_text_info = array(
                            'title' => 'Deeper Analysis', // required
                            'subheader' => 'Looking Beyond DNA', // required
                            'desc' => 'Cancer is complex, and every patient’s cancer is unique. Relyingon standard analysis of a tumor’s DNA too often fails
                                        to provide a complete picture of the disease—reducing the likelihood for an effective treatment strategy. traina_wp’s
                                        next generation liquid biopsy technology, GeneRADAR™, is providing patients a more robust genomic profile of their cancer.' // required
                        );

                        include('template-parts/components/section_two_column_text.php')
                    </code>
                </pre>
                <p> Note the required fields and optional fields.</p>
                <pre>
                    <code>
                        'title',         // required
                        'subheader',     // required
                        'desc',          // required
                    </code>
                </pre>
            </div>
            <div id="section-multicolumn" class="section-multi-column__specs" nav-sub-item="Multi-Column">
                <h4>Section Multi-Column</h4>
                <p> Include <code>section_multi-columns.php</code> in order to create a section with multiple columns. To achieve different layouts is relatively simple. First we need to setup our variables like so, keeping the naming conventions:
                possible options include:
                <ul>
                    <li><code>category  => array()</code>
                        <ul>
                            <li><code>title  => string</code></li>
                            <li><code>target => string</code></li>
                            <li><code>class  => string</code></li>
                            <li><code>url    => string</code></li>
                            <li><code>text   => string</code></li>
                            <li><code>alt    => string</code></li>
                        </ul>
                    </li>
                    <li><code>title     => string</code></li>
                    <li><code>subheader => string</code></li>
                    <li><code>desc      => string</code></li>
                    <li><code>main_cta  => array()</code>
                        <ul>
                            <li><code>title  => string</code></li>
                            <li><code>target => string</code></li>
                            <li><code>class  => string</code></li>
                            <li><code>url    => string</code></li>
                            <li><code>text   => string</code></li>
                            <li><code>alt    => string</code></li>
                        </ul>
                    </li>
                    <li><code>columns   => array()</code>
                        <ul>
                            <li><code>title    => string</code></li>
                            <li><code>desc     => string</code></li>
                            <li><code>pub_date => string</code></li>
                            <li><code>link     => array</code></li>
                            <li><code>images   => array</code></li>
                        </ul>
                    </li>
                    <li><code>layout    => array()</code>
                        <ul>
                            <li><code>rows               => string</code></li>
                            <li><code>columns            => string</code></li>
                            <li><code>main_cta_location  => string</code></li>
                        </ul>
                    </li>
                </ul>
                <h5>Layout options:</h5>
                <p> Layout is broken out into 2 containers a <code>main-col</code> and a <code>description-col</code>. The <code>main-col</code> will house the primary content, where as the <code>description-col</code> will contain all of the column information and layout. </p>
                <ul>
                    <li>Set number of rows to determine layout. (max = 2).</li>
                    <li>Set number of columns to determine layout. (max = 4).</li>
                    <li>Set main_cta_location to either <code>main-col</code> or <code>description-col</code></li>
                </ul>
                <p>When adding the <code>main_cta</code> to the <code>main_col</code> add <code>extended-arrow-link</code> to the the string of classes for the <code>main_cta</code> option.</p>
                <p>An example layout with a 2 row and 3 column layout, where the main info sits in the top row and the following 3 columns are displayed below it, would look like this: </p>
                <pre>
                    <code>
                    $columns = array(
                        0 => array("title" => "test", "desc" => "test desc","pub_date" => "1/14/2018", "link" => array("title"=>"read more", "target" => "_self", "class" => "blog-link red-text ", "url" => "##", "text" => "read more", "alt" => "the alt text")),
                        1 => array("title" => "test", "desc" => "test desc","pub_date" => "1/16/2018", "link" => array("title"=>"read more", "target" => "_self", "class" => "blog-link red-text ", "url" => "##", "text" => "read more", "alt" => "the alt text")),
                        2 => array("title" => "test", "desc" => "test desc","pub_date" => "1/17/2018", "link" => array("title"=>"read more", "target" => "_self", "class" => "blog-link red-text ", "url" => "##", "text" => "read more", "alt" => "the alt text")),
                    );

                    $multi_column_info = array(
                        'category' => array("title"=>"category name", "target" => "_self", "class" => "eyebrow red-text ", "url" => "##", "text" => "News", "alt" => "the alt text"),
                        'title' => 'News Headline Goes here',
                        'subheader' => 'Intro text bla bla bla bla bla blabla bla bla bla bla blab al',
                        'main_cta' => array("title"=>"read all news", "target" => "_self", "class" => "red-text ", "url" => "##", "text" => "read all news", "alt" => "the alt text"),
                        'columns' => $columns,
                        'layout' => array( 'rows'=> '2', 'columns' => '3', 'main_cta_location' => 'description-col')
                    );


                    $title          = $multi_column_info['title'];
                    $subheader      = $multi_column_info['subheader'];
                    $desc           = $multi_column_info['desc'];
                    $category       = return_link($multi_column_info['category'], false);
                    $main_cta       = return_link($multi_column_info['main_cta'], false);
                    $rows_layout    = $multi_column_info['layout']['rows'];
                    $columns_layout = $multi_column_info['layout']['columns'];
                    $column_count   = count($multi_column_info['columns']);

                    </code>
                </pre>
            </div>
        </div>
        <div id="cards" class="card__specs" nav-item="Cards">
            <h3>Cards</h3>
            <p>To generate a card include <code>card_grid_container.php</code> and set the following variables <code>$card_arr, $card_type, $slider_name</code></p>
            <ul>
                <li><code>$card_arr</code> will be the data being retrieved from metafields</li>
                <li><code>$card_type</code> will equal one of these:
                    <ul>
                        <li><code>'card_info'</code></li>
                        <li><code>'card_blog'</code></li>
                        <li><code>'card_profile'</code></li>
                    </ul>
                </li>
                <li><code>$slider_name</code> will be set if the cards need to be in a slider, if no slider needed, then set it to an empty string.</li>
            </ul>
            <p>For example: </p>
            <pre>
                <code>
                    $card_arr = '';
                    $card_type = 'card_info';
                    $slider_name = '';
                    include('template-parts/components/card_grid_container.php');
                </code>
            </pre>
        </div>
        <div id="accordion" class="accordion__specs" nav-item="Accordion">
            <h3>Accordions</h3>
            <p>To generate an accordion include <code>accordion.php</code> and set the following variables <code>$accordion_arr, $accordion_name</code></p>
            <ul>
                <li><code>$accordion_arr</code> will be the data being retrieved from metafields</li>
                <li><code>$accordion_name</code> will be a unique name for your accordion.</li>
            </ul>
            <p>In the admin panel, the user can set whether to have a single or two column layout.</p>
            <p>For Example:</p>
            <pre>
                <code>
                    $accordion_arr = array(
                            'accordion_panel-1' => array(
                                'accordion_panel_header' => 'Research Associate',
                                'accordion_panel_content' => ' This is a lot of content that could potentially appear 1',
                                'accordion_panel_desc' => ' This is a description for a panel on the left side.',
                                'accordion_panel_btn_txt' => 'Apply',
                                'accordion_panel_btn_url' => 'google.com',
                                'two_column' => 'true'
                            ),
                            'accordion_panel-2' => array(
                                'accordion_panel_header' => 'Bioinformatics Database Engineer',
                                'accordion_panel_content' => ' This is a lot of content that could potentially appear 2'
                            ),
                            'accordion_panel-3' => array(
                                'accordion_panel_header' => 'Software Engineer',
                                'accordion_panel_content' => ' This is a lot of content that could potentially appear 3'
                            ),
                        );
                    $accordion_name = 'section-accordion';
                    include('template-parts/components/accordion.php');
                </code>
            </pre>
        </div>
        <div id="tab" class="tab__specs" nav-item="Tabs">
            <h3>Tabs</h3>
            <p>To generate a tab include <code>tabs.php</code> and set the following variables <code>$tab_arr</code></p>
            <ul>
                <li><code>$tab_arr</code> will be the data being retrieved from metafields.</li>
            </ul>

            <p>For Example:</p>
            <pre>
                <code>
                    $tab_array = array(
                        'tab-1' => array(
                            'tab_title' => 'Home',
                            'tab_content' => ' This is a lot of content that could potentially appear 1'
                        ),
                        'tab-2' => array(
                            'tab_title' => 'Profile',
                            'tab_content' => ' This is a lot of content that could potentially appear 2'
                        ),
                        'tab-3' => array(
                            'tab_title' => 'Contact',
                            'tab_content' => ' This is a lot of content that could potentially appear 3'
                        ),
                    );

                    include('template-parts/components/tabs.php');
                </code>
            </pre>
        </div>
    </div>
</div>

<?php get_footer(); ?>

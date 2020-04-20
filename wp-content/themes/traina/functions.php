<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * traina_wp only works in WordPress 4.7 or later.
 */

if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

global $footer_modals_array;
$footer_modals_array = array();

add_theme_support( 'post-thumbnails', array('post', 'blog', 'personnel') );
include('icon-store.php');

function traina_wp_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style('traina_wp-boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');

	// Theme stylesheet.
	wp_enqueue_style('traina_wp-boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');

	wp_enqueue_style( 'traina_wp-style', get_stylesheet_uri() );
	// Traina Styles
	wp_enqueue_style( 'traina_wp-style-local', get_theme_file_uri('/assets/build/main.min.css') );
	// Load the dark colorscheme.

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'traina_wp-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'traina_wp-style' ), '1.0' );
	wp_style_add_data( 'traina_wp-ie8', 'conditional', 'lt IE 9' );
	// Slick Slider Styles
	wp_enqueue_style('slick-styles', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/vendor/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	$traina_wp_l10n = array(
		'quote'          => traina_wp_get_svg( array( 'icon' => 'quote-right' ) ),
	);



	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'traina_wp-navigation', get_theme_file_uri( '/assets/js/components/navigation.js' ), array( 'jquery' ), '1.0', true );
		$traina_wp_l10n['expand']         = __( 'Expand child menu', 'traina_wp' );
		$traina_wp_l10n['collapse']       = __( 'Collapse child menu', 'traina_wp' );
		$traina_wp_l10n['icon']           = traina_wp_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) );
	}

	wp_enqueue_script( 'traina_wp-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );
  // You need styling for the datepicker. For simplicity I've linked to Google's hosted jQuery UI CSS.
  wp_register_style( 'jquery-ui', 'https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css' );
  wp_enqueue_style( 'jquery-ui' );

	add_action( 'wp_enqueue_scripts', 'wpse_enqueue_datepicker' );
	wp_localize_script( 'traina_wp-skip-link-focus-fix', 'traina_wpScreenReaderText', $traina_wp_l10n );
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script('traina_wp-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
	wp_enqueue_script( 'traina_wp-skip-link-focus-fix', get_theme_file_uri( '/assets/js/vendor/skip-link-focus-fix.js' ), array(), '1.0', true );
	wp_enqueue_script( 'traina_wp-slick', get_theme_file_uri( '/assets/js/vendor/slick.min.js' ), array( 'jquery' ), '1.0', false  );
	wp_enqueue_script( 'rellax', get_theme_file_uri( '/assets/js/vendor/rellax.min.js' ), array(	), '1.7', true );
	wp_enqueue_script( 'scrollreveal', get_theme_file_uri( '/assets/js/vendor/scrollreveal.min.js' ), array(	), '4.0.5', true );
	wp_enqueue_script('traina_wp-script', get_theme_file_uri('/assets/build/main.min.js'));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'traina_wp_scripts' );

register_nav_menus( array(
	'primary'                => __( 'Primary Menu', 'traina_wp' ),
	'primary_menu_full'      => __( 'Primary Full Menu', 'traina_wp' ),
	'social'                 => __( 'Social Links Menu', 'traina_wp' ),
	'footer'                 => __( 'Footer Links Menu', 'traina_wp' )
) );
/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );


if (function_exists('acf_add_options_page'))
{
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Blocks',
		'menu_title'	=> 'Theme Blocks',
		'menu_slug' 	=> 'theme-blocks',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Nav tooltips',
		'menu_title'	=> 'Nav tooltips',
		'menu_slug' 	=> 'navigation-general-tooltips',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

global $google_map_api_key;
$google_map_api_key = 'AIzaSyAtmdRn1Lt9xoJhiJbKG0YKRfm7f0nXxLM';

function my_acf_init() {

	acf_update_setting('google_api_key', $google_map_api_key);
}

add_action('acf/init', 'my_acf_init');
/**
 * Customizer additions.
 */
// require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );

// Function to handle-ize a string
function convert_string_to_slug($string){
	if($string){
		$string = str_replace(' ', '-', $string);
		$string = str_replace(',', '', $string);
		return strtolower($string);
	}else{
		return;
	}

}


function handle_section_data($data, $echo = false){
	$type = $data['content_type'];
	/*

	<div class="section-grid flex-grid featured">
	<div class="grid-item flex-2 load-hidden" data-sr-id="5">
		<h2 class="column-header">SYASL's track record of success is now entering its third decade.</h2>
		</div>
		<div class="grid-item flex-2 load-hidden" data-sr-id="5">
			<p class="column-content">For over 20 years, SYASL has exceeded the expectations of our advocacy and assocaition management clients. Today, we continue to raise the bar - elevating the visibility of our clients, influencing the state policymaking process and optimizing operations for some  of California's leading associations. We believe in both proven tactics and innovative strategies, building strong relationships along the way. SYASL acts as a seamless extension of our clients' teams and also serves as the in-house team for select clients. Consistently facing each new challenge with integrity and determination is a hallmark of our firm.</p>
		</div>
	</div>
	<div class="section-grid flex-grid">
	<div class="grid-item flex-2 load-hidden" data-sr-id="5">
	<span class="line"></span>
		<h4 class="column-header">Our experience and expertise are notable, but it's our highly engaged, senior-driven teams that set us apart.</h4>
		</div>
		<div class="grid-item flex-2 load-hidden" data-sr-id="5">
		<p class="column-content">Our history links bakc to 1975 with the founding of Edward R. Gerber & Associates. SYASL's founding partners, Josh Shaw and Paul Yoder, purchased Gerber's firm in 1998, establishing Shaw / Yoder, Inc. When Andrew Antwih was named a partner in 2009, the firm became Shaw/Yoder/Antwih, Inc. Two additional partners, Karen Lange and Jason Schmelzer, were added in 2015.</p>
		<p>Successful collaborations have also contributed to our firm's reputation and growth. In 2001, Shaw / Yoder, Inc. joined forces with Don Peterson of Peterson Consulting, Inc. to purchase Strategic Local Government Services (SLGS), LLC. Following Don Peterson's passing in 2009, Shaw/Yoder/Antwih purchased Peterson Consulting. Clients from both SLGS and Peterson Consulting, Inc. became SYASL clients in 2015.</p>
		<p>Initiated in 2008, SYASL maintains a strategic partnership with Chuck Cole of Advocation, Inc.</p>
		</div>
	</div>


	<div class="section-grid flex-grid">
	<div class="grid-item flex-1 load-hidden" data-sr-id="5">
	<span class="eyebrow">Association Management Resources</span>
		<h2 class="column-header">The latest on association management</h2>
		</div>
	<div class="grid-item flex-2 load-hidden" data-sr-id="5">
		<p class="column-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere placeat cum minus necessitatibus mollitia ab fugit nemo voluptates inventore, quam magni saepe enim quae voluptas delectus natus cupiditate ea unde. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque odio quos minima ab exercitationem error praesentium expedita. <strong>Unde animi deleniti iusto fugit quasi laborum consequuntur id fugiat numquam recusandae. Tempora. Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong> Molestias iusto natus reiciendis ab omnis libero labore, ad aperiam beatae consequuntur, quis totam! Porro saepe ipsa possimus natus odio, delectus libero.</p>
		</div>
		<div class="grid-item flex-2 load-hidden" data-sr-id="5">
		<p class="column-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. <strong>Consectetur corporis ut sunt quas dolorum voluptatum</strong> consequatur autem doloremque beatae incidunt facere explicabo iure perferendis accusamus, omnis expedita optio! At, eveniet? Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sunt iusto delectus? Dignissimos hic et quisquam, quo assumenda alias accusantium recusandae eligendi, veniam rem quas possimus repellat unde inventore dolor? Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora aliquam in, alias, earum, molestias quae obcaecati perferendis harum mollitia quidem rem blanditiis ut eaque sed culpa nesciunt. Veritatis, minima repellendus?</p>
		</div>
	</div>

	*/
	switch($type){
		case 'text':
			// $html = '<span class="eyebrow" style="color:#' . $data['header_color'] . ';">'. $data['index'] . '<span class="line" style="background-color:#' . $data['header_color'] . ';"></span>' . $data['eyebrow'] . '</span>';
			if($data["eyebrow"]) {
				$html .= '<span class="eyebrow">' . $data["eyebrow"] . '</span>';

			}
			if($data['header']) {
				if($data['block_style'] == 'feature'):
					$header = '<h2 class="column-title" style="color:#' . $data['header_color'] . ';">' . $data['header'] . '</h2>';
				else:
					$header = '<h3 class="column-title" style="color:#' . $data['header_color'] . ';">' . $data['header'] . '</h3>';
				endif;
				if(strpos($data['header'], '::') != false ){
					$title = explode('::',$data['header']);
					$header = '<h2 class="column-title" style="color:#' . $data['header_color'] . ';">' . $title[0] . '<br class="hidden-tablet" /> ' . $title[1] . '</h2>';
				}
				$html .= $header;
			}
			$html .='<div class="column-content"  style="color:#' . $data['header_color'] . ';">';
			if($data['content']) {
				$html .= '<div>' . $data['content'] . '</div>';
			}
			if($data['cta']) {
				$html .= '<a href="' . $data['cta']['url'] . '" class="btn" alt="' . $data['cta']['title'] . '">' . $data['cta']['title'] . '</a>';
			}
			$html .= '</div>';
		break;
		case 'image':
			$html = '
				<figure class="image__wrapper">
					<img src="' . $data['image']['sizes']['img_info_section'] . '" alt="' . $data['image']['alt'] . '" />
				</figure>
			';
		break;
		case 'slider':
			$html = '<div class="slider__wrapper" js-sponsor-slider>';
			$count = 0;
			$group_start = '<div class="group-' . $count . ' slide-item">';
			$column_start = '<div class="column">';
			$div_end = '</div>';
			$divider = '<div class="divider fader"></div>';
			$image_count = count($data['slider_image']);
			$evenly_dist = $image_count - ($image_count % 6);
			$image_in_column = 1;

			foreach ($data['slider_image'] as $index=>$img){
				// Start Group
				if($index === 0){
					$html .= $group_start;
				}
				if($count === 6){
					$count = 0;
					$html .= $div_end;
					$html .= $group_start;
				}

				if($index >= $evenly_dist){
					$html .= $column_start . '<figure class="sponsor fader" ><img src="' . $img['slider_image']['url'] . '" alt="' . $img['slider_image']['alt'] . '"/></figure>' . $divider . $div_end;
				}else {
					if($image_in_column === 1){
						$html .= $column_start . '<figure class="sponsor fader"><img src="' . $img['slider_image']['url'] . '" alt="' . $img['slider_image']['alt'] . '"/></figure>';
						// Increment the number of images in a column
						$image_in_column++;
					} else if($image_in_column === 2){
						$html .= '<figure class="sponsor fader"><img src="' . $img['slider_image']['url'] . '" alt="' . $img['slider_image']['alt'] . '"/></figure>' . $divider . $div_end;
						$image_in_column = 1;
					}
				}

				// Increment our count
				$count++;
				// decrement our image count to know how many images we have left
				$image_count--;
				if($count < 6 && $image_count === 0){
					$html .= $div_end;
				}
			}
			$html .= '</div>';

		break;
	}

	if($echo){
		echo $html;
	}else{
		return $html;
	}
}


function handle_info_section($template_to_include, $pid, $elem_index = 0){
	$rows = get_field('informational_section', $pid);
	if($rows) {

			$bg_color = $rows[$elem_index]['background_color'];
			$txt_color = $rows[$elem_index]['text_color'];
			$left_column = $rows[$elem_index]['left_column'];
			$right_column = $rows[$elem_index]['right_column'];
			$top_column = $rows[$elem_index]['top_column_group'];
			$block_style = 'feature';
			if($elem_index > 0) {
				$block_style = 'sub-feature';
			}
			$data = array(
				'layout_cols'	   => $rows[$elem_index]['info_sec_cols'],
				'bg_color'     	   => $bg_color,
				'txt_color'		   => $txt_color,
				'top_content'	   => array(
					'content_type' => $top_column['content_type'],
					'header'       => $top_column['column_title'],
					'eyebrow'      => $top_column['eyebrow'],
				),
				'left_content'     => array(
					'block_style' 	   => $block_style,
					'index'        => $left_column['section_index'],
					'col_width'	   => $left_column['column_width'],
					'eyebrow'      => $left_column['eyebrow'],
					'header'       => $left_column['column_title'],
					'content'      => $left_column['column_content'],
					'cta'		   => $left_column['column_cta'],
					'header_color' => $left_column['header_color'],
					'image'        => $left_column['image'],
					'slider_image' => $left_column['slider'],
					'content_type' => $left_column['content_type'],
					'animation_type' => $left_column['animation_type']
				),
				'right_content'    => array(
					'block_style' 	   => $block_style,
					'index'        => $right_column['section_index'],
					'col_width'	   => $right_column['column_width'],
					'eyebrow'      => $right_column['eyebrow'],
					'header'       => $right_column['column_title'],
					'content'      => $right_column['column_content'],
					'cta'		   => $right_column['column_cta'],
					'header_color' => $right_column['header_color'],
					'image'        => $right_column['image'],
					'slider_image' => $right_column['slider'],
					'content_type' => $right_column['content_type'],
					'animation_type' => $right_column['animation_type']
				)
			);
			include get_parent_theme_file_path($template_to_include);
    // endwhile;
	}
}

function personnel_register_post_type() {

	$args = array (
		'label' => esc_html__( 'Personnel', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Personnel', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Personnel', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Personnel', 'text-domain' ),
			'new_item' => esc_html__( 'New Personnel', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Personnel', 'text-domain' ),
			'view_item' => esc_html__( 'View Personnel', 'text-domain' ),
			'update_item' => esc_html__( 'Update Personnel', 'text-domain' ),
			'all_items' => esc_html__( 'All Personnel', 'text-domain' ),
			'search_items' => esc_html__( 'Search Personnel', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Personnel', 'text-domain' ),
			'not_found' => esc_html__( 'No Personnel found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Personnel found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Personnel', 'text-domain' ),
			'singular_name' => esc_html__( 'Personnel', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => true,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-admin-users',
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'revisions',
		),
		'rewrite' => true,
	);

	register_post_type( 'personnel', $args );
}
add_action( 'init', 'personnel_register_post_type' );

function personnel_type_register_taxonomy() {

	$args = array (
		'label' => esc_html__( 'Personnel Type', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Personnel Type', 'text-domain' ),
			'all_items' => esc_html__( 'All Personnel Type', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Personnel Type', 'text-domain' ),
			'view_item' => esc_html__( 'View Personnel Type', 'text-domain' ),
			'update_item' => esc_html__( 'Update Personnel Type', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Personnel Type', 'text-domain' ),
			'new_item_name' => esc_html__( 'New Personnel Type', 'text-domain' ),
			'parent_item' => esc_html__( 'Parent Personnel Type', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Personnel Type:', 'text-domain' ),
			'search_items' => esc_html__( 'Search Personnel Type', 'text-domain' ),
			'popular_items' => esc_html__( 'Popular Personnel Type', 'text-domain' ),
			'separate_items_with_commas' => esc_html__( 'Separate Personnel Type with commas', 'text-domain' ),
			'add_or_remove_items' => esc_html__( 'Add or remove Personnel Type', 'text-domain' ),
			'choose_from_most_used' => esc_html__( 'Choose most used Personnel Type', 'text-domain' ),
			'not_found' => esc_html__( 'No Personnel Type found', 'text-domain' ),
			'name' => esc_html__( 'Personnel Type', 'text-domain' ),
			'singular_name' => esc_html__( 'Personnel Type', 'text-domain' ),
		),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => false,
		'hierarchical' => true,
		'query_var' => true,
		'sort' => false,
		'rewrite_no_front' => false,
		'rewrite_hierarchical' => false,
		'rewrite' => true,
	);

	register_taxonomy( 'personnel-type', array( 'personnel' ), $args );
}
add_action( 'init', 'personnel_type_register_taxonomy', 0 );


function filter_personnel_by_taxonomies( $post_type, $which ) {

	// Apply this only on a specific post type
	if ( 'personnel' !== $post_type )
		return;

	// A list of taxonomy slugs to filter by
	$taxonomies = array( 'personnel-type' );

	foreach ( $taxonomies as $taxonomy_slug ) {

		// Retrieve taxonomy data
		$taxonomy_obj = get_taxonomy( $taxonomy_slug );
		$taxonomy_name = $taxonomy_obj->labels->name;

		// Retrieve taxonomy terms
		$terms = get_terms( $taxonomy_slug );

		// Display filter HTML
		echo "<select name='{$taxonomy_slug}' id='{$taxonomy_slug}' class='postform'>";
		echo '<option value="">' . sprintf( esc_html__( 'Show All %s', 'text_domain' ), $taxonomy_name ) . '</option>';
		foreach ( $terms as $term ) {
			printf(
				'<option value="%1$s" %2$s>%3$s (%4$s)</option>',
				$term->slug,
				( ( isset( $_GET[$taxonomy_slug] ) && ( $_GET[$taxonomy_slug] == $term->slug ) ) ? ' selected="selected"' : '' ),
				$term->name,
				$term->count
			);
		}
		echo '</select>';
	}

}
add_action( 'restrict_manage_posts', 'filter_personnel_by_taxonomies' , 10, 2);


function get_personnel($term) {
	$items = array();
	$items_query = new WP_Query(
	array(
		'post_type'      => array( 'personnel' ),
		'posts_per_page' => -1,
		'post_status'    => 'publish',
		'orderby'        => 'published',
		'order'          => 'ASC',
		'tax_query'		 => array(
			array(
				'taxonomy' => 'personnel-type',
				'field'    => 'slug',
				'terms'    => $term,
				'operator' => 'IN',
			)
		)
	));

	if($items_query->have_posts()):
		while ($items_query->have_posts()) : $items_query->the_post();
			$pid = get_the_ID();
			array_push($items, $pid);
		endwhile;
	endif;
	wp_reset_postdata();
	return $items;
}

function get_query_results($args) {
	$items = array();
	$items_query = new WP_Query($args);

	if($items_query->have_posts()):
		while ($items_query->have_posts()) : $items_query->the_post();
			$pid = get_the_ID();
			array_push($items, $pid);
		endwhile;
	endif;
	wp_reset_postdata();
	return $items;
}

function case_studies_register_post_type() {

	$args = array (
		'label' => esc_html__( 'Case Studies', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Case Studies', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Case Study', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Case Study', 'text-domain' ),
			'new_item' => esc_html__( 'New Case Study', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Case Study', 'text-domain' ),
			'view_item' => esc_html__( 'View Case Study', 'text-domain' ),
			'update_item' => esc_html__( 'Update Case Study', 'text-domain' ),
			'all_items' => esc_html__( 'All Case Studies', 'text-domain' ),
			'search_items' => esc_html__( 'Search Case Studies', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Case Study', 'text-domain' ),
			'not_found' => esc_html__( 'No Case Studies found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Case Studies found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Case Studies', 'text-domain' ),
			'singular_name' => esc_html__( 'Case Study', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'show_in_rest' => true,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-index-card',
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'custom-fields',
			'excerpt'
		),
		'rewrite' => true,
	);
	flush_rewrite_rules();

	register_post_type( 'case-study', $args );
}
add_action( 'init', 'case_studies_register_post_type' );

function casee_study_types_register_taxonomy() {

	$args = array (
		'label' => esc_html__( 'Case Study Types', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Case Study Types', 'text-domain' ),
			'all_items' => esc_html__( 'All Case Study Types', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Case Study Type', 'text-domain' ),
			'view_item' => esc_html__( 'View Case Study Type', 'text-domain' ),
			'update_item' => esc_html__( 'Update Case Study Type', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Case Study Type', 'text-domain' ),
			'new_item_name' => esc_html__( 'New Case Study Type', 'text-domain' ),
			'parent_item' => esc_html__( 'Parent Case Study Type', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Case Study Type:', 'text-domain' ),
			'search_items' => esc_html__( 'Search Case Study Types', 'text-domain' ),
			'popular_items' => esc_html__( 'Popular Case Study Types', 'text-domain' ),
			'separate_items_with_commas' => esc_html__( 'Separate Case Study Types with commas', 'text-domain' ),
			'add_or_remove_items' => esc_html__( 'Add or remove Case Study Types', 'text-domain' ),
			'choose_from_most_used' => esc_html__( 'Choose most used Case Study Types', 'text-domain' ),
			'not_found' => esc_html__( 'No Case Study Types found', 'text-domain' ),
			'name' => esc_html__( 'Case Study Types', 'text-domain' ),
			'singular_name' => esc_html__( 'Case Study Type', 'text-domain' ),
		),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => false,
		'hierarchical' => true,
		'query_var' => true,
		'sort' => false,
		'rewrite_no_front' => false,
		'rewrite_hierarchical' => false,
		'rewrite' => true,
	);

	register_taxonomy( 'case-study-type', array( 'case-study' ), $args );
}
add_action( 'init', 'casee_study_types_register_taxonomy', 0 );

function case_study_cat_register_taxonomy() {

	$args = array (
		'label' => esc_html__( 'Case Study Post Relationships', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Case Study Post Relationships', 'text-domain' ),
			'all_items' => esc_html__( 'All Case Study Post Relationships', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Case Study Post Relationship', 'text-domain' ),
			'view_item' => esc_html__( 'View Case Study Post Relationship', 'text-domain' ),
			'update_item' => esc_html__( 'Update Case Study Post Relationship', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Case Study Post Relationship', 'text-domain' ),
			'new_item_name' => esc_html__( 'New Case Study Post Relationship', 'text-domain' ),
			'parent_item' => esc_html__( 'Parent Case Study Post Relationship', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Case Study Post Relationship:', 'text-domain' ),
			'search_items' => esc_html__( 'Search Case Study Post Relationships', 'text-domain' ),
			'popular_items' => esc_html__( 'Popular Case Study Post Relationships', 'text-domain' ),
			'separate_items_with_commas' => esc_html__( 'Separate Case Study Post Relationships with commas', 'text-domain' ),
			'add_or_remove_items' => esc_html__( 'Add or remove Case Study Post Relationships', 'text-domain' ),
			'choose_from_most_used' => esc_html__( 'Choose most used Case Study Post Relationships', 'text-domain' ),
			'not_found' => esc_html__( 'No Case Study Post Relationships found', 'text-domain' ),
			'name' => esc_html__( 'Case Study Post Relationships', 'text-domain' ),
			'singular_name' => esc_html__( 'Case Study Post Relationship', 'text-domain' ),
		),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => false,
		'hierarchical' => true,
		'query_var' => true,
		'sort' => false,
		'rewrite_no_front' => false,
		'rewrite_hierarchical' => false,
		'rewrite' => true,
	);
	register_taxonomy( 'case-study-post-relationship', array( 'case-study' ), $args );
}
add_action( 'init', 'case_study_cat_register_taxonomy', 0 );

function upcoming_event_register_post_type() {

	$args = array (
		'label' => esc_html__( 'Upcoming Events', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Upcoming Events', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Upcoming Event', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Upcoming Event', 'text-domain' ),
			'new_item' => esc_html__( 'New Upcoming Event', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Upcoming Event', 'text-domain' ),
			'view_item' => esc_html__( 'View Upcoming Event', 'text-domain' ),
			'update_item' => esc_html__( 'Update Upcoming Event', 'text-domain' ),
			'all_items' => esc_html__( 'All Upcoming Events', 'text-domain' ),
			'search_items' => esc_html__( 'Search Upcoming Events', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Upcoming Event', 'text-domain' ),
			'not_found' => esc_html__( 'No Upcoming Events found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Upcoming Events found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Upcoming Events', 'text-domain' ),
			'singular_name' => esc_html__( 'Upcoming Event', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-calendar',
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'menu_position' => 21,
		'supports' => array(
			'title',
			'custom-fields',
		),
		'rewrite' => true,
	);

	register_post_type( 'upcoming-event', $args );
}
add_action( 'init', 'upcoming_event_register_post_type' );



add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  // Hide the editor on the page titled 'Homepage'

  // if($post_id == 23){
  //   remove_post_type_support('page', 'editor');
  // }
  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.
  $template_file = get_post_meta($post_id, '_wp_page_template', true);
  if($template_file == 'page-contact.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
}
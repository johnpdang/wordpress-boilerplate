<?php
/* Template Name: Style Guide Page */
add_filter( 'body_attributes', 'template_custom_body_attributes' );
function template_custom_body_attributes( $attributes = [] ) {
	$attributes[] = 'data-spy="scroll" data-target="#doc-sidebar" data-offset="0"';
	return $attributes;
}

$baseurl = get_site_url();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- THEME FONT TEMP INCLUSION FROM GOOGLE FONTS -->
<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet"> -->
<!-- THEME FONT TEMP INCLUSION FROM TYPEKIT ADOBE --><link rel="stylesheet" href="https://use.typekit.net/xgw5cxd.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site fade-in load-hidden">
		<a class="skip-link screen-reader-text" title="Skip to main content" href="#content" tabindex="0"><?php _e( 'Skip to content', 'traina_wp' ); ?></a>
		<div id="curtain"></div>
		<header id="masthead" class="site-header " role="banner">
			<nav class="navbar animate-in-1" role="navigation" aria-label="main navigation">
				<div class="navbar-inner-wrap">
					<div class="navbar-brand">
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->
<div class="row flex">
	<div class="col-md-3 sidebar__wrapper flex-2">
		<section>
			<div id="doc-sidebar" class="sp-sidebar sticky" data-sp-sidebar="">
				<div class="sp-sidebar-inner">
					<div class="sp-sidebar-container">
						<nav id="doc-navigation" class="sp-sidebar-navigation">
						<div class="title">
							<span id="website_logo_link" class="image_link" aria-hidden="true">
								<!-- <img src="/wp-content/uploads/2018/12/logo.png" alt="SYA Logo"> -->
								<?php echo traina_get_svg_icon('logo-with-icon'); ?>								
							</span>
						</div>						
							<div class="doc-section-header">
								<h3 class="doc-section-title">Style Guide</h3>
							</div>
							<ul class="nav-entry doc-panel">
								<ul>
									<li><a class="nav-link" href="#grid"><strong>1. Grid System</strong></a></li>
									<?php /*
									<ul>
										<li><a class="nav-link" href="#grid-sizes">1.1 Sizes</a></li>
										<li><a class="nav-link" href="#grid-gutter">1.2 Gutter</a></li>
										<li><a class="nav-link" href="#grid-responsive">1.3 Responsive</a></li>
										<li><a class="nav-link" href="#grid-examples">1.4 Examples</a></li>
									</ul>
									*/?>
								</ul>
								<ul>
									<li><a class="nav-link" href="#typography"><strong>2. Typography</strong></a></li>
									<ul>
										<li><a class="nav-link" href="#headings">2.1 Heading</a></li>
										<li><a class="nav-link" href="#paragraphs">2.2 Paragraph</a></li>
										<li><a class="nav-link" href="#lists">2.3 Lists</a></li>
										<li><a class="nav-link" href="#weights">2.4 Weights & Colors</a></li>
										<li><a class="nav-link" href="#typography-examples">2.5 Examples</a></li>
									</ul>
								</ul>
								<ul>
									<li><a class="nav-link" href="#colors"><strong>3. Brand Colors</strong></a></li>
								</ul>
								<ul>
									<li><a class="nav-link active" href="#ui"><strong>4. UI Components</strong></a></li>
									<ul>
										<li><a class="nav-link" href="#buttons">4.1 Buttons</a></li>
										<li><a class="nav-link" href="#button-states">4.11 States</a></li>
										<li><a class="nav-link" href="#button-colors">4.12 Color</a></li>
									</ul>
								</ul>
								<ul>
									<ul>
										<li><a class="nav-link" href="#form">4.2 Form</a></li>
										<li><a class="nav-link" href="#form-input">4.21 Input</a></li>
										<li><a class="nav-link" href="#form-checkbox-radio">4.23 Checkbox & Radios</a></li>
										<li><a class="nav-link" href="#form-select">4.22 Select</a></li>
										<li><a class="nav-link" href="#form-textarea">4.23 Textarea</a></li>
									</ul>
								</ul>
								<ul>
									<ul>
										<li><a class="nav-link" href="#ui-examples">4.3 Examples</a></li>
									</ul>
								</ul>								
								<ul><li><a class="nav-link" href="#cards"><strong>5. Cards</strong></a></li></ul>
								<ul><li><a class="nav-link" href="#accordions"><strong>6. Accordion</strong></a></li></ul>
								<ul><li><a class="nav-link" href="#tabs"><strong>7. Tabs</strong></a></li></ul>
								<ul><li><a class="nav-link" href="#modals"><strong>8. Modal</strong></a></li></ul>
								<ul><li><a class="nav-link" href="#sliders"><strong>9. Slider</strong></a></li></ul>
								<ul><li><a class="nav-link" href="#post-grids"><strong>10. Post Grid</strong></a></li></ul>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="col-md-9 main-content__wrapper flex-1">
		<section id="grid" class="doc-section" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Grid</h3>
			</div>
			<div class="doc-panel-body">
				<div class="doc-panel-preview">
					<div class="doc-panel-inner">
						<div class="doc-panel">							
							<div class="flex">
								<div class="flex-1">
									<p>Size 1 of 1 <span class="css">.flex-1</span></p>
								</div>
							</div>
							<div class="flex">
								<div class="flex-2">
									<p>Size 1 of 2 <span class="css">.flex-2</span></p>
								</div>
								<div class="flex-2">
									<p>Size 1 of 2 <span class="css">.flex-2</span></p>
								</div>
							</div>
							<div class="flex">
								<div class="flex-3">
									<p>Size 1 of 3 <span class="css">.flex-3</span></p>
								</div>
								<div class="flex-3">
									<p>Size 1 of 3 <span class="css">.flex-3</span></p>
								</div>
								<div class="flex-3">
									<p>Size 1 of 3 <span class="css">.flex-3</span></p>
								</div>
							</div>
							<div class="flex">
								<div class="flex-4">
									<p>Size 1 of 4 <span class="css">.flex-4</span></p>
								</div>
								<div class="flex-4">
									<p>Size 1 of 4 <span class="css">.flex-4</span></p>
								</div>
								<div class="flex-4">
									<p>Size 1 of 4 <span class="css">.flex-4</span></p>
								</div>
								<div class="flex-4">
									<p>Size 1 of 4 <span class="css">.flex-4</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="typography" class="doc-section" nav-item="Typography">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Typography</h3>
			</div>
			<div id="headings" class="doc-panel" nav-sub-item="Headings">
				<div class="doc-panel-inner">
					<div class="doc-panel-body">
						<div class="doc-panel-preview">
							<div class="doc-panel-header">
								<h4 class="doc-panel-title">Heading</h4>
							</div>							
							<p id="heading" class="text-info">Helvetica + PF DinText Pro</p>
							<h1 class="text_display">Display Text <span class="css">.text_display</span></h1>
							<p class="eyebrow eyebrow__h1">Eyebrow h1 <span class="css">p.eyebrow .eyebrow__h1</span></p>
							<h1>H1 Title <span class="css">.h1</span></h1>
							<p class="eyebrow eyebrow__h2">Eyebrow h2 <span class="css">p.eyebrow .eyebrow__h2</span></p>
							<h2>H2 Title <span class="css">.h2</span></h2>
							<p class="eyebrow eyebrow__h3">Eyebrow h3 <span class="css">p.eyebrow .eyebrow__h3</span></p>
							<h3>H3 Title <span class="css">.h3</span></h3>
							<h4>H4 Title <span class="css">.h4</span></h4>
							<h5>H5 Title <span class="css">.h5</span></h5>
							<h6>H6 Title <span class="css">.h6</span></h6>
						</div>
					</div>
				</div>
			</div>
			<div id="paragraphs" class="doc-panel">
				<div class="doc-panel-header">
					<h4 class="doc-panel-title">Paragraph</h4>
				</div>			
				<p>Paragragh text we are SYA, a performance audio brand. We believe that elevating your every moment
					is what a great audio product is meant to do. Through best-in-class sound and innovative connectivity, our
					immersive headphones and speakers let you personalize your environment, engage with the world, or even
					disconnect from it. So, you can be at your best, play harder, work smarter and make every experience yours. <span class="css">p</span></p>
				<p class="text-small">Text Small (Caption, legal text, etc) <span class="css">p.text-small</span></p>
				<p class="blockquote">Blockquote lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy
					nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
					<span>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex</span> <span class="css">p.blockquote</span></p>
				<div class="block_section_reverse">
					<blockquote>Blockquote lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh
						euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex</p> <span class="css">.block_section_reverse blockquote</span></blockquote>						
				</div>
			</div>
			<div id="lists" class="flex">
				<div id="unordered-list" class="doc-panel flex-2" nav-sub-item="Unordered List">
					<div class="doc-panel-inner">
						<div class="doc-panel-header">
							<h4 class="doc-panel-title">List - Unordered</h4>
						</div>
						<div id="lists" class="doc-panel-body">
							<div class="doc-panel-preview">
								<ul>
									<li>Lorem ipsum</li>
									<li>Lorem ipsum</li>
									<li>Lorem ipsum</li>
									<li>Lorem ipsum</li>
									<li>Lorem ipsum</li>									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div id="ordered-list" class="doc-panel flex-2" nav-sub-item="Ordered List">
					<div class="doc-panel-inner">
						<div class="doc-panel-header">
							<h4 class="doc-panel-title">List - Ordered</h4>
						</div>
						<div class="doc-panel-body">
							<div class="doc-panel-preview">
								<ol>
									<li>Lorem ipsum</li>
									<li>Lorem ipsum</li>
									<li>Lorem ipsum</li>
									<li>Lorem ipsum</li>
									<li>Lorem ipsum</li>						
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="flex">
				<div id="weights" class="doc-panel flex-2" nav-sub-item="Font Weights">
					<div class="doc-panel-inner">
						<div class="doc-panel-header">
							<h4 class="doc-panel-title">Font Weights</h4>
						</div>
						<div class="doc-panel-body">
							<div class="doc-panel-preview">
								<p class="font-weight-300">Font weight 300 <span class="css">.font-weight-300</span></p>
								<p class="font-weight-400">Font weight 400 <span class="css">.font-weight-400</span></p>								
								<p class="font-weight-500">Font weight 500 <span class="css">.font-weight-500</span></p>
								<p class="font-weight-600">Font weight 600 <span class="css">.font-weight-600</span></p>								
								<p class="font-weight-700">Font weight 700 <span class="css">.font-weight-700</span></p>
								<?php /*
								<p class="font-weight-800">Font weight 800 </p>
								<p class="font-weight-900">Font weight 900 </p>
								*/ ?>
							</div>
						</div>
					</div>
				</div>
				<div id="font-colors" class="doc-panel flex-2" nav-sub-item="Font Colors">
					<div class="doc-panel-inner">
						<div class="doc-panel-header">
							<h4 class="doc-panel-title">Font Colors</h4>
						</div>
						<div class="doc-panel-body">
							<div class="doc-panel-preview">
								<p><strong>Theme colors:</strong>
									<span class="c_primary">Primary <span class="css">.c_primary</span></span>
									<span class="c_secondary">Secondary <span class="css">.c_secondary</span></span>
									<span class="c_accent">Accent <span class="css">.c_accent</span></span>
									<span class="c_element">Element <span class="css">.c_element</span></span>
									<span class="c_primary_reverse">Primary Reverse <span class="css">.c_primary_reverse</span></span>
									<span class="c_secondary_reverse">Secondary Reverse<span class="css">.c_secondary_reverse</span></span>									
									<span class="c_alt">Alternate <span class="css">.c_alt</span></span>
								</p>
								<p><strong>Notification colors:</strong>
									<span class="text-success">Success  <span class="css">.text-success</span></span>
									<span class="text-warning">Warning  <span class="css">.text-warning</span></span>
									<span class="text-danger">Danger  <span class="css">.text-danger</span></span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="typography-examples" class="doc-panel">
				<div class="grid-item right-content flex-2 text-content fade-in load-hidden " data-sr-id="6" style="visibility: visible; opacity: 1; transition: opacity 1.75s ease-in-out 0.2s;">
					<div  class="doc-panel-header">
						<h4 class="doc-panel-title">H2 + copy Example</h4>
					</div>
					<div class="example">
						<p class="eyebrow eyebrow__h2">Advocacy</p>
						<h2>Winning the right way. Every day.</h2>
						<p>Effective advocacy requires a deep understanding of policy, tireless effort, and integrity. That's us.</p>
						<button>Learn More</button>
					</div>
				</div>	
			</div>					
		</section>
		<section id="colors">
			<div nav-sub-item="Brand Colors">
				<div class="doc-section-header">
					<h3 class="doc-section-title">Brand Colors</h3>
				</div>
				<div class="doc-panel-inner doc-panel">
					<div class="doc-panel-body">
						<div class="doc-panel-preview flex">
							<p class="block_img_preview flex-4 bg_primary text-small"><b>Dark Blue</b> <br>#0A436A<br> <span class="css c_white"> .c_primary</span><span class="css c_white"> .bg_primary</span></p>
							<p class="block_img_preview flex-4 c_white bg_secondary text-small"><b>Light Teal</b> <br>#0F7E97<br> <span class="css c_white"> .c_secondary</span><span class="css c_white"> .bg_secondary</span></p>
							<p class="block_img_preview flex-4 c_white bg_accent text-small"><b>Orange</b> <br>#FF9F00<br> <span class="css c_white"> .c_accent</span><span class="css c_white"> .bg_accent</span></p>
							<p class="block_img_preview flex-4 c_white bg_element text-small"><b>Gray</b> <br>#444444<br> <span class="css c_white"> .c_element</span><span class="css c_white"> .bg_element</span></p>
						</div>
						<div class="doc-panel-preview flex">
							<p class="block_img_preview flex-3 bg_primary_reverse text-small"><b>Light Beige</b> <br>#F7F7F7<br> <span class="css c_white"> .c_primary_reverse</span><span class="css c_white"> .bg_primary_reverse</span></p>
							<p class="block_img_preview flex-3 bg_secondary_reverse text-small"><b>Dark Beige</b> <br>#E6E6DE<br> <span class="css c_white"> .c_secondary_reverse</span><span class="css c_white"> .bg_secondary_reverse</span></p>
							<p class="block_img_preview flex-3 c_white bg_alt text-small"><b>Dark Green</b> <br>#003440<br> <span class="css c_white"> .c_alt</span><span class="css c_white"> .bg_alt</span></p>														
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="ui" class="doc-section" nav-item="UI Components">
			<div class="doc-section-header">
				<h3 class="doc-section-title">UI Components</h3>
			</div>
			<div id="buttons" class="doc-panel" nav-sub-item="Button States">		
				<div class="doc-panel-inner">
					<div class="doc-panel-header">
						<h4 class="doc-panel-title">Buttons</h4>
					</div>
					<div id="button-states" class="doc-panel-header">
						<h4 class="doc-panel-title">States</h4>
					</div>					
					<div class="doc-panel-body">
						<div class="doc-panel-preview">
							<div class="row flex">
								<div class="flex-4">
									<p>Default</p>	
									<button type="button" class="btn btn-primary">View Our Clients</button> <span class="css">.btn .btn-primary</span>									
								</div>
								<div class="flex-4">
									<p>Hover</p>	
									<button type="button" class="btn btn-md btn-primary btn-hover">View Our Clients</button>
								</div>
								<div class="flex-4">
									<p>Pressed</p>	
									<button type="button" class="btn btn-sm btn-primary btn-focus">View Our Clients</button>
								</div>
								<div class="flex-4">
									<p>Disabled</p>	
									<button type="button" class="btn btn-sm btn-primary btn-disabled">View Our Clients</button>
								</div>																
							</div>
						</div>
					</div>
				</div>
			</div>		
			<div id="buttons" class="doc-panel " nav-sub-item="Button Colors">
				<div id="button-colors" class="doc-panel-inner">
					<div class="doc-panel-header">
						<h4 class="doc-panel-title">Colors</h4>
					</div>
					<div class="doc-panel-body">
						<div class="doc-panel-preview">
							<div class="row flex block_section_reverse">
								<div class="flex-4">
									<p>Default</p>		
									<button type="button" class="btn btn-primary btn-reverse">View Our Clients</button> <span class="css">.btn .btn-primary .btn-reverse</span>										
								</div>
								<div class="flex-4">
									<p>Hover</p>	
									<button type="button" class="btn btn-md btn-primary btn-reverse btn-hover">View Our Clients</button>								
								</div>
							<div class="flex-4">
							<p>Pressed</p>	
							<button type="button" class="btn btn-sm btn-primary btn-reverse btn-focus">View Our Clients</button>
								
							</div>
							<div class="flex-4">
							<p>Disabled</p>	
							<button type="button" class="btn btn-sm btn-primary btn-reverse btn-disabled">View Our Clients</button>									
								</div>								
								<!-- <div class="flex-2 block_img_preview">
									<button type="button" class="btn  btn-primary">.btn_primary</button> <span class="css">  .btn .btn-primary</span>
								</div>
								<div class="flex-2 block_img_preview ">
									<button type="button" class="btn btn-white btn-primary">.btn_reverse</button> <span class="css">  .block_section_reverse .btn .btn-primary .btn-white</span>
								</div> -->
							</div>
						</div>
					</div>
				</div>			
			</div>
			<div id="forms" class="doc-section" nav-item="Forms">
				<div class="doc-section-header">
					<h3 class="doc-section-title">Forms</h3>
				</div>
				<div class="doc-panel">
					<div class="doc-panel-inner">
						<div class="doc-panel-header">
							<h4 class="doc-panel-title">Default</h4>
						</div>
						<div class="doc-panel-body">
							<?php
								$form_arr = array(
									'Full Name',
									'Email',
									'Phone Number'
								);
								include('template-parts/components/form.php');
							?>
						</div>
					</div>
				</div>
			</div>
		</section>		
		<section id="sections" class="doc-section" nav-item="Sections">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Sections</h3>
			</div>
			<div id="container-style" class="doc-panel">
				<div id="text-image" class="doc-panel-inner" nav-sub-item="Two Column Text & Image">
					<div class="doc-panel-header">
						<h4 class="doc-panel-title">2 Column Text & Image Sections</h4>
					</div>
					<div class="doc-panel-body">
						<div class="doc-panel-preview">
							<?php /**include('template-parts/components/section_text_image.php');  */?>
						</div>
					</div>
				</div>
				<div id="text-text" class="doc-panel-inner" nav-sub-item="Two Column Text & Text">
					<div class="doc-panel-header">
						<h4 class="doc-panel-title">2 Column Text & Text Sections</h4>
					</div>		
					<div class="doc-panel-body">
						<div class="doc-panel-preview">
							<?php
						/*
						* TODO: Replace these variables to replace with actual data.
						*/
						$two_column_text_info = array(
							'title' => 'Our Mission',
							'subheader' => 'To transform early cancer detection and disease management through advancements in technology and precision medicine.',
							'desc' => 'As we understand more about cancer on the genomic level, cancer may be treated with more effective, targeted therapies that specifically attack the genomic alterations in a patient\'s tumor. Our differentiated approach to understanding a patient\'s unique caner genome on RNA and DNA level from liquid biopsy enables us to uncovers unprecedented genomic alterations that are typically missed with DNA sequencing alone. With our breakthrough non-invasive cancer diagnostics technology, vast data sets, and advanced analytics, we partner with biopharmas and oncologists to help them optimize biomarker-driven clinical trials and accelerate the development of cancer therapies.'
						) ?>
							<?php include('template-parts/components/section_two_column_text.php'); ?>
						</div>
					</div>
				</div>
				<div id="multi-column" class="doc-panel-inner" nav-sub-item="Multi-Column">
					<div class="doc-panel-header">
						<h4 class="doc-panel-title">Multi Column Section</h4>
					</div>
					<div class="doc-panel-body">
						<div class="doc-panel-preview">
							<?php
						/*
						* TODO: Replace these variables to replace with actual data.
						*/

						$columns = array(
								'column-1' => array(
									'title' => 'Confirm genomic alterationsdetected at the DNA level',
									'desc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
									'image_url' => ''
								),
								'column-2' => array(
									'title' => 'Confirm genomic alterationsdetected at the DNA level',
									'desc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
									'image_url' => ''
								),
								'column-3' => array(
									'title' => 'Confirm genomic alterationsdetected at the DNA level',
									'desc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
									'image_url' => ''
								)
							) ?>
							<?php $multi_column_info = array(
							'title' => 'Our Mission',
							'subheader' => 'To transform early cancer detection and disease management through advancements in technology and precision medicine.',
							'columns' => $columns
						) ?>				
							<?php include('template-parts/components/section_multi-columns.php'); ?>
						</div>
					</div>			
				</div>
			</div>			
		</section>		
		<section id="cards" class="doc-section" nav-item="Cards">
			<div id="container-style" class="doc-panel">
				<div class="doc-panel-inner">
					<div class="doc-panel-header">
						<h3 class="doc-panel-title">Cards</h3>
					</div>
					<div id="info-cards" class="doc-panel-body" nav-sub-item="Info Cards">
						<div class="doc-panel-preview">
							<h5>Info Cards</h5>
							<?php
								$card_arr = array(
									'card-1' => array(
										'image_url' => $baseurl . '/wp-content/uploads/2018/10/disease-cone.png',
										'image_alt' => 'image-alt-1',
										'card_title' => 'Early aDetection 1',
										'card_desc' => 'Monitoring those at risk or for recurrence through non-invasive diagnostics',
										'btn_text' => 'Learn More',
										'btn_link' => 'google.com'
									),
									'card-2' => array(
										'image_url' => $baseurl . '/wp-content/uploads/2018/10/disease-cone.png',
										'image_alt' => 'image-alt-2',
										'card_title' => 'Early aDetection 2',
										'card_desc' => 'Monitoring those at risk or for recurrence through non-invasive diagnostics',
										'btn_text' => 'Learn More',
										'btn_link' => 'google.com'
									),
									'card-3' => array(
										'image_url' => $baseurl . '/wp-content/uploads/2018/10/disease-cone.png',
										'image_alt' => 'image-alt-3',
										'card_title' => 'Early aDetection 3',
										'card_desc' => 'Monitoring those at risk or for recurrence through non-invasive diagnostics',
										'btn_text' => 'Learn More',
										'btn_link' => 'google.com'
									),
								);
							?>

							<?php
									$card_type = 'card_info';
									$slider_name = '';
									include('template-parts/components/card_grid_container.php');
								?>

						</div>
					</div>
					<div id="staggered-cards" class="dstaggered-cards oc-panel-body" nav-sub-item="Staggered Cards">
						<div class="doc-panel-preview">
							<h5>Staggered Cards</h5>
							<?php
							$btn = array(
								'url' => 'http://google.com',
								'target' => '',
								'title' => '',
								'class' => ''
							);
								$card_arr = array(
									'card-1' => array(
										'image_url' => 'http://placehold.it/300x280',
										'image_alt' => 'image-1',
										'card_title' => 'traina_wp Receives CLIA Certification for its Genomic Sequencing Laboratory',
										'card_desc' => 'Lorem Ipsum:',
										'btn' => $btn,
									),
									'card-2' => array(
										'image_url' => 'http://placehold.it/300x280',
										'image_alt' => 'image-2',
										'card_title' => 'traina_wp Receives CLIA Certification for its Genomic Sequencing Laboratory',
										'card_desc' => 'Lorem Ipsum:',
										'btn' => $btn,
									),
									'card-3' => array(
										'image_url' => 'http://placehold.it/300x280',
										'image_alt' => 'image-3',
										'card_title' => 'traina_wp Receives CLIA Certification for its Genomic Sequencing Laboratory',
										'card_desc' => 'Location: ',
										'btn' => $btn,
									)
								);
							?>

							<?php
									$card_type = 'card_staggered';
									$slider_name = 'staggered-card-slider';
									include('template-parts/components/card_grid_container.php');
								?>
						</div>
					</div>
					<div id="blog-cards" class="doc-panel-body" nav-sub-item="Blog Cards">
						<div class="doc-panel-preview">
							<h5>Blog Cards</h5>
							<?php
								$card_arr = array(
									'card-1' => array(
										'blog_tag' => 'News',
										'blog_date' => 'August 16, 2018',
										'blog_title' => 'traina_wp Receives CLIA Certification for its Genomic Sequencing Laboratory',
										'blog_subheader_1' => 'Lorem Ipsum:',
										'blog_desc_1' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore',
										'blog_subheader_2' => '',
										'blog_desc_2' => '',
										'blog_btn_link' => 'google.com',
										'blog_btn_text' => 'Read More'
									),
									'card-2' => array(
										'blog_tag' => 'News',
										'blog_date' => 'August 16, 2018',
										'blog_title' => 'traina_wp Receives CLIA Certification for its Genomic Sequencing Laboratory',
										'blog_subheader_1' => 'Lorem Ipsum:',
										'blog_desc_1' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore',
										'blog_subheader_2' => '',
										'blog_desc_2' => '',
										'blog_btn_link' => 'google.com',
										'blog_btn_text' => 'Read More'
									),
									'card-3' => array(
										'blog_tag' => 'News',
										'blog_date' => 'August 16, 2018',
										'blog_title' => 'traina_wp Receives CLIA Certification for its Genomic Sequencing Laboratory',
										'blog_subheader_1' => 'Location: ',
										'blog_desc_1' => '34b west street',
										'blog_subheader_2' => 'Lorem Ipsum:',
										'blog_desc_2' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore',
										'blog_btn_link' => 'google.com',
										'blog_btn_text' => 'Read More'
									)
								);
							?>

							<?php
									$card_type = 'card_blog';
									$slider_name = 'blog-card-slider';
									include('template-parts/components/card_grid_container.php');
								?>

						</div>
					</div>
					<div id="profile-cards" class="doc-panel-body" nav-sub-item="Profile Cards">
						<div class="doc-panel-preview">
							<h5>Profile Cards</h5>
							<?php
								$card_arr = array(
									'card-1' => array(
										'image_url' => $baseurl . '/wp-content/uploads/2018/10/disease-cone.png',
										'image_alt' => 'image-2',
										'card_title' => 'John Casey',
										'card_desc' => 'CEO of a lot of companies',
										'modal_content' => array(
											'header' => 'Shidong Jia 1',
											'subheader' => 'CEO and Co-founder 1',
											'left_column_content' => '<img src="" alt="Image Alt"> 1',
											'right_column_content' => 'He used to do a lot of work, he\'s got a lot of background in stuff. 1'
										)
									),
									'card-2' => array(
										'image_url' => $baseurl . '/wp-content/uploads/2018/10/disease-cone.png',
										'image_alt' => 'image-2',
										'card_title' => 'John Casey',
										'card_desc' => 'CEO of a lot of companies',
									),
									'card-3' => array(
										'image_url' => $baseurl . '/wp-content/uploads/2018/10/disease-cone.png',
										'image_alt' => 'image-2',
										'card_title' => 'John Casey',
										'card_desc' => 'CEO of a lot of companies',
										'modal_content' => array(
											'header' => 'Shidong Jia 2',
											'subheader' => 'CEO and Co-founder 2',
											'left_column_content' => '<img src="" alt="Image Alt"> 2',
											'right_column_content' => 'He used to do a lot of work, he\'s got a lot of background in stuff. 2'
										)
									)

								);

								$modal_arr = array();
								foreach($card_arr as $key => $val){
									if($val['modal_content']){
										$modal_arr['modal_content-' . $key] = array();
										array_push($modal_arr['modal_content-' . $key], $val['modal_content']);
									}
								};
							?>

							<?php
									// $card_type = 'card_profile';
									// $slider_name = '';
									// $modal_name = 'about-modal';
									//
									// include('template-parts/components/card_grid_container.php');
									// include('template-parts/components/modal.php');
								?>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="accordion" class="doc-section" nav-item="Accordion">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Accordion</h3>
			</div>

			<?php
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
			?>
		</section>		

		<section id="tabs" class="doc-section" nav-item="Tabs">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Tabs</h3>
			</div>
			<div class="doc-panel">
				<div class="doc-panel-inner">
					<div class="doc-panel-header">
						<h4 class="doc-panel-title">Default</h4>
					</div>
					<div class="doc-panel-body">
						<?php
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

						?>
					</div>
				</div>
			</div>
		</section>

		<section id="modals" class="doc-section" nav-item="Modals">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Modal</h3>
			</div>
			<div class="doc-panel">
				<div class="doc-panel-inner">
					<div class="doc-panel-header">
						<h4 class="doc-panel-title"></h4>
					</div>
					<div class="doc-panel-body">
					<?php
				$modal_arr = array(
					'header' => 'Shidong Jia 3',
					'subheader' => 'CEO and Co-founder 3',
					'left_column_content' => '<img src="" alt="Image Alt"> 3',
					'right_column_content' => 'He used to do a lot of work, he\'s got a lot of background in stuff. 3'
				);
				$modal_name = 'section-modal';
				$modal_button = array(
					'include_button' => true,
					'button_text' => 'Open'
				);
				include('template-parts/components/modal.php');
			?>
					</div>
				</div>
			</div>

		</section>

		<section id="sliders" class="doc-section" nav-item="Sliders">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Slider</h3>
			</div>

			Coming soon...

		</section>

	</div>
</div>

<?php // get_footer(); ?>
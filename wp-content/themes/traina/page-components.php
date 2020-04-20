<?php
/* Template Name: Components Page */
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
<link rel="stylesheet" href="https://use.typekit.net/xgw5cxd.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site fade-in load-hidden">
		<a class="skip-link screen-reader-text" title="Skip to main content" href="#content" tabindex="0"><?php _e( 'Skip to content', 'traina_wp' ); ?></a>
		<div id="curtain"></div>

<div class="row">
	<div class="col-md-12 col-lg-3">
		<section class="sidebar__wrapper col-md-12 col-lg-3">
			<div id="doc-sidebar" class="sp-sidebar" data-sp-sidebar="">
				<div class="sp-sidebar-inner">
					<div class="sp-sidebar-container">
					<div class="title">
						<span id="website_logo_link" class="image_link" aria-hidden="true">
						<?php echo traina_get_svg_icon('logo-with-icon'); ?>
						</span>
					</div>
						<nav id="doc-navigation" class="sp-sidebar-navigation">
							<div class="doc-section-header">
								<h3 class="doc-section-title">Component<br>Library</h5>
							</div>
							<ul class="nav-entry doc-panel">
								<li><a class="nav-link" href="#navigation"> Navigation</a></li>
								<li><a class="nav-link" href="#hero"> Hero</a></li>
								<li><a class="nav-link" href="#section-blocks"> Section Blocks</a></li>
								<li><a class="nav-link" href="#section-banner"> Section Banner</a></li>
								<li><a class="nav-link" href="#section-info"> Section Info</a></li>
								<li><a class="nav-link" href="#footer"> Footer</a></li>
								<li><a class="nav-link" href="#blog"> Blog</a></li>
								<li><a class="nav-link" href="#article"> Article</a></li>
								<li><a class="nav-link" href="#block-quotes"> Block Quotes</a></li>
								<li><a class="nav-link" href="#masonry-grid"> Masonry Grid</a></li>
								<li><a class="nav-link" href="#modal"> Modal</a></li>
								<li><a class="nav-link" href="#form"> Form</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="col-md-12 col-lg-9 main-content__wrapper">
		<?php
		/* ==============================
		Navigation
		============================== */ ?>
		<section id="navigation" class="doc-section" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Navigation <code>/wp-content/theme/sya/header.php</code></h3>
			</div>
			<div class="doc-panel-body home">
				<div class="doc-panel-preview">
					<div class="doc-panel-inner">
						<div class="doc-panel">
						<header id="masthead" class="site-header " role="banner">
							<nav class="navbar animate-in-1" role="navigation" aria-label="main navigation">
								<div class="navbar-inner-wrap">
									<div class="navbar-brand">
										<div class="title">
											<span id="website_logo_link" class="image_link" aria-hidden="true">
											<?php echo traina_get_svg_icon('logo-with-icon'); ?>
											</span>
										</div>
									</div>
									<div id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', '' ); ?>">
									<?php wp_nav_menu( array(
										'theme_location' => 'top',
										'menu'        => 'main-menu',
										'container_class' => 'main-menu'
									) ); ?>
									</div>
									<button class="hamburger-menu menu-toggle" aria-controls="primary-menu" aria-expanded="false">
										<span class="h-line h-line__1"></span>
										<span class="h-line h-line__2"></span>
										<span class="h-line h-line__3"></span>
									</button>
								</div>
							</nav>
						</header>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		/* ==============================
		Hero
		============================== */ ?>
		<section id="hero" class="doc-section" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Hero <code>/wp-content/theme/sya/template-parts/components/hero.php</code></h3>
			</div>
			<?php /** Set variable for the height of the Hero Banner **/ ?>
			<?php
				$image_arr = get_field('hero_featured_image');
				$cta_header = get_field('hero_header');
				$cta_tagline = get_field('hero_tagline');
				$handle_title = explode("::",get_the_title());
				$header_title = $handle_title[0];
				// $form_id = get_field('gravity_form_id');
				$sub_title = $handle_title[1];
			?>
			<div class="hero-section hero lp-hero">
				<figure class="hero-background-image">
					<!-- <img src="<?php echo $image_arr['url']; ?>" aria-hidden="true" alt="" /> -->
					<span class="line"></span>
					<img src="/wp-content/uploads/2019/05/advocacy-hero-bg.jpg" aria-hidden="true" alt="">
				</figure>
				<div class="hero-content__wrapper">
					<div class="hero-content">
						<p class="eyebrow">Advocacy</p>
						<h1 class="page-header animate-in-down load-hidden">Building Influence by building strong relationships</h1>
					</div>
				</div>
			</div>
			<br>
			<?php //include('template-parts/components/hero.php'); ?>
			<div class="hero-section hero lp-hero home">
				<figure class="hero-background-image">
					<!-- <img src="<?php echo $image_arr['url']; ?>" aria-hidden="true" alt="" /> -->
					<span class="line"></span>
					<img src="/wp-content/uploads/2019/04/home-hero-bg.jpg" aria-hidden="true" alt="">
				</figure>
				<div class="hero-content__wrapper">
					<div class="hero-content">
						<h1 class="page-header animate-in-down load-hidden">Results.<br> Driven.</h1>
						<p class="page-tagline fade-in-delay load-hidden">The hardest working advocacy and association management firm in Sacramento is ready to deliver for your organization.</p>
						<button>Learn More</button>
					</div>
				</div>
			</div>
		</section>
		<?php
		/* ==============================
		Section blocks
		============================== */ ?>
		<section id="section-blocks" class="doc-section" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Section blocks <code>/wp-content/theme/sya/template-parts/components/section-blocks.php</code></h3>
			</div>
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
				<h2 class="column-header">What We Do</h2>
				</div>
			<div class="grid-item flex-2 load-hidden" data-sr-id="5">
				<p class="column-content">Associations are born of common interests and concerns among stakeholders in any given profession or interest group. What's often overlooked amidst the excitement of banding together in support of those interests is the need to run the day-to-day operations of such an organization. Doing so often amounts to a second full-time job for association members.</p>
				</div>
				<div class="grid-item flex-2 load-hidden" data-sr-id="5">
				<p class="column-content">That's where Shaw Yoder Antwih Schmelzer & Lange comes in. By tapping our experts to spearhead your association's operations and streamline its financials, you can focus on delivering what matters most to your members. And that leads to an enthusiastic, engaged membership base that fuels the momentum of your organization and its mission.</p>
				<p>From rountine daily tasks in meeting the needs of your members to long-term strategic and financial planning, SYASL brings unparalleled dedication and comprehensive management services to brings the st ability and know how to transform your association from respected group to renowned industry authority.</p>
				<blockquote>Whether your association is looking to establish a foundation from which to grow or seeks to improve upon its impact and effectiveness, SYASL will tailor our comprehensive services to allow your team to do what it does best - shape and influence the trajectory of your cause.</blockquote>
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
		</section>

		<?php
		/* ==============================
		Section banner
		============================== */ ?>


		<section id="section-banner" class="doc-section" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Section banner <code>/wp-content/theme/sya/template-parts/components/section-banner.php</code></h3>
			</div>

			<div class="section-grid flex-grid background-image">
				<div class="grid-item left-content flex-2-3 text-content load-hidden bg_secondary_reverse" data-sr-id="5">
					<span class="eyebrow">News and information</span>
					<h2 class="column-title">Local perspectives</h2>
					<ul>
						<li><a href="#">The Sacramento Bee</a></li>
						<li><a href="#">The Los Angeles Times</a></li>
						<li><a href="#">San Francisco Chronicle</a></li>
						<li><a href="#">Fresno Bee</a></li>
						<li><a href="#">Contra Costa Times</a></li>
						<li><a href="#">Orange County Register</a></li>
						<li><a href="#">Capitol Weekly</a></li>
						<li><a href="#">Rough and Tumble</a></li>
						<li><a href="#">The Round Up</a></li>
						<li><a href="#">Around the Capitol</a></li>
					</ul>
				</div>
				<div class="grid-item flex-3 image-right animate-in-right load-hidden " data-sr-id="3">
				<div class="icon"><img src="/wp-content/uploads/2019/05/nres-info@3x.png" alt=""></div>
					<figure class="image__wrapper">
						<img src="/wp-content/uploads/2019/05/resources-news-info-img@3x.jpg" alt="">
					</figure>
				</div>
			</div>

			<div class="section-grid flex-grid background-image">
				<div class="grid-item left-content flex-3-4 text-content load-hidden bg_secondary" data-sr-id="5">
					<span class="line"></span>
					<blockquote class="c_white"><p>Whether your organization has an existing lobbying strategy or recognizes the need to develop a legislative presence in California, SYASL is well-positioned to maximize your influence on the issues that impact you.</p></blockquote>
				</div>
				<div class="grid-item flex-1-4 image-right animate-in-right load-hidden " data-sr-id="3">
					<figure class="image__wrapper">
						<img src="/wp-content/uploads/2019/04/home-blog-img.jpg" alt="">
					</figure>
				</div>
			</div>

			<div class="section-grid flex-grid background-image">
				<div class="grid-item left-content flex-1-4 text-content load-hidden bg_accent bg_ten" data-sr-id="5">
				<span class="eyebrow c_white">The Facts</span>
				<hr class="line__bottom" />
					<blockquote class="c_white">We are a Top 10 Advocacy Firm</blockquote>
				</div>
				<div class="grid-item flex-3-4 image-right animate-in-right load-hidden" data-sr-id="3">
					<figure class="image__wrapper">
						<img src="/wp-content/uploads/2019/04/home-blog-img.jpg" alt="">
					</figure>
				</div>
			</div>
		</section>
		<?php include(locate_template('template-parts/components/section-banner.php')); ?>

		<?php
		/* ==============================
		Section info
		============================== */ ?>

		<section id="section-info" class="doc-section" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Section info <code>/wp-content/theme/sya/template-parts/components/section-info.php</code></h3>
			</div>

			<?php include(locate_template('template-parts/components/section-info.php')); ?>


			<div class="section-grid flex-grid background-image">
				<div class="grid-item flex-2 image-right animate-in-right load-hidden " data-sr-id="3" >
					<div class="icon  icon__bottom-right">
						<img src="/wp-content/uploads/2019/05/nres-info@3x.png" alt="">
					</div>
					<figure class="image__wrapper">
						<img src="/wp-content/uploads/2019/05/resources-news-info-img@3x.jpg" alt="">
					</figure>
				</div>
				<div class="grid-item left-content flex-2 text-content load-hidden" data-sr-id="5">
					<h2 class="column-title">Association Management</h2>
					<p class="column-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus porro itaque quisquam accusantium rem nulla, perspiciatis aperiam corrupti tenetur sint repellendus maxime eveniet corporis soluta cupiditate omnis ipsam quos minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consequuntur non nesciunt esse debitis aspernatur recusandae eveniet officiis cum cumque? Officia molestiae odio quisquam tempora exercitationem, saepe molestias. Assumenda, praesentium?</p>
					<button>Learn More</button>
				</div>
			</div>

		</section>

		<?php
		/* ==============================
		Footer
		============================== */ ?>
		<section id="footer" class="doc-section" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Footer <code>/wp-content/theme/sya/footer.php</code></h3>
			</div>
			<footer id="footer" class="footer bg_alt fade-in load-hidden">
				<div class="inner-wrap">
					<div class="theme-container">
						<div class="flex-wrap">
							<div class="flex-col flex-col__logo">
								<span id="footer-website_logo_link" class="image_link" aria-hidden="true">
									<?php echo traina_get_svg_icon('logo-with-icon'); ?>
								</span>
							</div>
							<div class="footer-right-content">
								<div class="flex-col flex-col__nav">
									<h6 class="footer-col-title">Office</h6>
									<p>1415 L Street, Suite 1000</p>
									<p>Sacramento, CA 95814</p>
									<p>T 916-446-4656</p>
									<p>T 916-446-4318</p>
								</div>
								<div class="flex-col flex-col__nav">
									<h6 class="footer-col-title">Info</h6>
									<nav id="footer-tertiary-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Secondary Menu', 'traina_wp' ); ?>">
									<?php wp_nav_menu( array(
										'menu'       => 'footer',
										'menu_id'    => 'footer',
										'menu_class' => 'menu second-menu',
										'container'  => 'ul'
									) ); ?>
									</nav>
								</div>
							</div><? /* footer-right-content */ ?>
						</div><? /* flex-wrap */ ?>
						<div class="disclaimer">
						<p>© Shaw / Yoder / Antwih, Inc.</p>
						</div>
					</div>
				</div><? /* inner-wrap */ ?>
			</footer>
		</section>

		<?php
		/* ==============================
		Blog
		============================== */ ?>
		<section id="blog" class="doc-section" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Blog <code>/wp-content/theme/sya/template-parts/components/archive-news.php</code></h3>
			</div>
				<?php // include(locate_template('template-parts/components/archive-news.php')); ?>
		</section>

		<?php
		/* ==============================
		Article
		============================== */ ?>
		<section id="article" class="doc-section" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Article <code>/wp-content/theme/sya/template-parts/components/single.php</code></h3>
			</div>

			<div class="section-grid flex-grid">
						<div class="grid-item flex-1 load-hidden" data-sr-id="5">
							<p class="eyebrow">Lorem ipsum dolor sit</p>
							<h2>Lorem ipsum dolor sit amet consectetur</h2>
							<img src="https://fakeimg.pl/785x359" alt="">
							<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Integer sodales vel metus ut pellentesque. Integer imperdiet, neque sed sodales tincidunt, ligula arcu imperdiet ex, ornare viverra turpis lectus non ipsum. Sed dapibus mi felis, eu auctor dolor sollicitudin nec. Aenean ac sodales urna, in vestibulum dolor. Fusce at felis vel felis congue vehicula.</p>
							<p>Proin lobortis enim orci, et viverra ante dapibus sed. Curabitur sit amet mi urna. Ut rhoncus eros ut felis dictum imperdiet. Nullam in consequat sem. Fusce id auctor purus.</p>
							<hr>
							<p>Maecenas nec tortor nec purus sagittis bibendum. Praesent erat quam, tempus ut mauris id, laoreet aliquet augue. Mauris euismod ante ac eros facilisis tincidunt. Cras at nibh eget sapien rutrum feugiat a eu nisl. Praesent vehicula libero non dui pellentesque placerat. Duis eget dictum magna. Vestibulum lobortis eros lacinia turpis imperdiet vestibulum. Fusce tristique porta justo et mollis. Pellentesque placerat sed felis quis interdum. Nullam at elit sed sem consectetur lobortis sit amet nec nibh. Maecenas efficitur blandit posuere. Donec in turpis arcu. Sed lobortis porttitor elit.</p>
							<img src="https://fakeimg.pl/175x175" alt="" class="circle"><img src="https://fakeimg.pl/175x175" alt="" class="circle"><img src="https://fakeimg.pl/175x175" alt="" class="circle"><img src="https://fakeimg.pl/175x175" alt="" class="circle">
							<h4>Previously, Michael served as a Legislative Assistant in the Office of Governor Edmund G. Brown Jr.</h4>
							<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Integer sodales vel metus ut pellentesque. Integer imperdiet, neque sed sodales tincidunt, ligula arcu imperdiet ex, ornare viverra turpis lectus non ipsum. Sed dapibus mi felis, eu auctor dolor sollicitudin nec. Aenean ac sodales urna, in vestibulum dolor. Fusce at felis vel felis congue vehicula.</p>
							<p>Proin lobortis enim orci, et viverra ante dapibus sed. Curabitur sit amet mi urna. Ut rhoncus eros ut felis dictum imperdiet. Nullam in consequat sem. Fusce id auctor purus.</p>
							<img src="https://fakeimg.pl/785x359" alt="">
							<p>Maecenas nec tortor nec purus sagittis bibendum. Praesent erat quam, tempus ut mauris id, laoreet aliquet augue. Mauris euismod ante ac eros facilisis tincidunt. Cras at nibh eget sapien rutrum feugiat a eu nisl. Praesent vehicula libero non dui pellentesque placerat. Duis eget dictum magna. Vestibulum lobortis eros lacinia turpis imperdiet vestibulum. Fusce tristique porta justo et mollis. Pellentesque placerat sed felis quis interdum. Nullam at elit sed sem consectetur lobortis sit amet nec nibh. Maecenas efficitur blandit posuere. Donec in turpis arcu. Sed lobortis porttitor elit.</p>
							<p>Vestibulum lobortis eros lacinia turpis imperdiet vestibulum. Fusce tristique porta justo et mollis. Pellentesque placerat sed felis quis interdum. Nullam at elit sed sem consectetur lobortis sit amet nec nibh. Maecenas efficitur blandit posuere. Donec in turpis arcu. Sed lobortis porttitor elit.</p>
							<hr>
							<p class="eyebrow">Documents</p>
							<h3>Lorem ipsum Brochure</h3>
							<button>Download</button>
							<hr>
							<button>Back to case studies</button>
						</div>
					</div>

		</section>

		<?php
		/* ==============================
		Block quotes
		============================== */ ?>
		<section id="block-quotes" class="doc-section" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Block quotes <code>/wp-content/theme/sya/template-parts/components/block-quotes.php</code></h3>
			</div>
			<?php include('template-parts/components/block-quotes.php'); ?>
		</section>

		<?php
		/* ==============================
		Masonry grid
		============================== */ ?>
		<section id="masonry-grid" class="doc-section" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Masonry grid <code>/wp-content/theme/sya/template-parts/components/grid.php</code></h3>
			</div>
			<?php include(locate_template('template-parts/components/grid.php')); ?>
			<?php include(locate_template('template-parts/components/home-masonry-block-one.php')); ?>
			<?php include(locate_template('template-parts/components/home-masonry-block-two.php')); ?>
		</section>


		<?php
		/* ==============================
		Modal
		============================== */ ?>
		<section id="modal" class="doc-section archive" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Modal <code>/wp-content/theme/sya/template-parts/components/modal.php</code></h3>
			</div>
			<div style="" class="modal" data-rel="team-block--0">
				<div class="body">
					<div class="section-grid flex-grid featured">
						<div class="grid-item flex-1 load-hidden" data-sr-id="5">
							<p class="eyebrow">Co-Founder & CTO</p>
							<h2>Michael Pimentel</h2>
							<img src="https://fakeimg.pl/785x359" alt="">
							<p>A Legislative and Regulatory Advocate at Shaw / Yoder / Antwih, Inc., Michael has worked for the firm since 2015. Michael works on behalf of several of the firm’s transportation clients, particularly on issues related to public transit operations and sustainability.</p>
							<p>Prior to joining the firm, Michael held various appointed positions in the Administration of Governor Edmund G. Brown, Jr., serving most recently as Senior Legislative Analyst at the California High-Speed Rail Authority. </p>
							<p>In this role, Michael developed and managed the Authority’s legislative program, advised its CEO on legislative and budgetary issues and developments, and served as the Authority’s primary liaison to the State Legislature, California State Transportation Agency, and the Office of the Governor.</p>
							<h4>Previously, Michael served as a Legislative Assistant in the Office of Governor Edmund G. Brown Jr.</h4>
							<p>Michael was the Media Monitoring Coordinator for the Brown for Governor 2010 campaign and has held various research positions throughout his career, including for Sacramento Mayor Darrell Steinberg, the World Resources Institute, and the Department of Economics at the University of California, Berkeley.</p>
							<p>Michael received a Master of Public Policy from the University of California, Berkeley’s Goldman School of Public Policy, and a Bachelor of Arts in Economics from the University of California, Berkeley. He was a fellow with the New Leaders Council in 2015.
							In his free time, he serves on the Board of Directors for the Young Professionals in Transportation – Sacramento Chapter.</p>
							<hr>
							<button>Back to team</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
		/* ==============================
		Form
		============================== */ ?>
		<section id="form" class="doc-section" nav-item="grid">
			<div class="doc-section-header">
				<h3 class="doc-section-title">Form <code>/wp-content/theme/sya/template-parts/components/page-contact.php</code></h3>
			</div>
			<?php include(locate_template('template-parts/components/contact-form.php')); ?>
		</section>

	</div>
</div>

<?php // get_footer(); ?>

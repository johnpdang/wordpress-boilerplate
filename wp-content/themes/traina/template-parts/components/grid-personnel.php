
<?php
global $footer_modals_array; /* get global modals array */

$results = get_personnel($personnelArgs["term"]);
$the_term = get_term($personnelArgs["term_id"]);

$total_count = count($results);
$display_count = 0;
$spacers = array(0,5,6,11,12,17,18,23,24,29,30);

?>

<?php if($results): ?>
<section id="personnel__grid" class="section__wrapper" >
	<div class="container">
		<div class="grid__header-md">
			<p class="eyebrow">PEOPLE</p>
			<h3><?php echo $the_term->name; ?></h3>
			<p class="term_desc"><?php echo $the_term->description; ?></p>
		</div>
		 <div class="grid">
			     <div class="flex flex-grid card">

					 <?php foreach($results as $result): ?>
				 		<?php
							$pid = $result;
							 $the_ID = $pid;
							 $person_title = get_field('person_title', $pid);
							 $email = get_field('person_email', $pid);
							 $linked_in = get_field('person_linkedin', $pid);
							 $large_image = get_field('person_img_lrg', $pid);
							 $hasContent = strlen(get_post_field('post_content', $pid)) > 0 ? true : false ;
						 ?>
						 
						<?php if(in_array($display_count, $spacers)): ?>
							<div class="flex-4 card__item card__blank">&nbsp;</div>
						<?php endif; ?>
							 <div data-animate="fade-in-up-0" class="flex-4 card__item fade-in-up-0 has-more ">
								<div class="card__content <?php if(!$hasContent): ?> empty-content <?php endif; ?>"  <?php if($hasContent): echo 'modal-target="target_modal_' .  $the_ID .'"'; endif; ?> tabindex="0" >
									 <figure class="image-absolute scale-overlay"><img data-animate="f-sync-fIn-0" class="f-sync-i f-sync-fIn-0 hoverZoomLink" src="<?php echo get_the_post_thumbnail_url($pid); ?>" alt=""></figure>
					                 <div class="card__text">
					                     <h6><?php echo get_the_title($pid); ?></h6>
					                     <hr class="line__bottom">
					                 </div>
					                 <div class="card__more" id="client-block--0-data" data-rel="">
					                     <div class="body">
											<div class="hidden-text card__sub-text">
												<h4><?php echo $person_title; ?></h4>
											</div>											
										 </div>
									 </div>
									 <?php if($hasContent): ?>
										<a class="hidden-text cta_link button" href="/" tabindex="-1" data-notab>Read More </a>
										<button class="more-button" data-notab tabindex="-1">
											<span class="plus-line vertical-line"></span>
											<span class="plus-line  horizontal-line"></span>
										</button>
									<?php endif; ?>
								 </div>
					         </div>
						 <?php
						 	if($hasContent):
								$html = '<div id="target_modal_' . $the_ID . '" class="modal" aria-hidden="true" tabindex="-1" aria-labelledby="target_modal_' . $the_ID . '" role="dialog">';
									$html .= '<div class="container flex-grid flex-column">';
										$html .= '<div class="close-btn-group" data-target="#target_modal_' . $the_ID . '" data-dismiss="modal" tabindex="1" >';
											$html .= '<button type="button" close-button  class="close-modal button close-text" tabindex="-1" data-notab>Close</button>';
											$html .= '<button type="button" close-button class="close-modal close-button close-btn" tabindex="-1" data-notab> <span class="close-bar close-bar-one"></span>
											<span class="close-bar close-bar-two"></span></button>';
										$html .= '</div>';
										$html .= '<div class="flex-grid flex-column modal-content__wrapper section-grid">';
											$html .= '<div class="modal-title-wrap">';
												// Modal Title content
												$html .= '<div class="title-content flex-2 grow">';
													if($person_title){
														$html .= '<h6 class="eyebrow">' . $person_title . '</h6>';
													}
													$html .= '<h2>' . get_the_title($pid) . '</h2>';
												$html .= '</div>';
												// Modal Social Links
												$html .= '<div class="social-links">';
													if($linked_in){
														$html .= '<a class="social linked-in" href="' . $linked_in .'" target="_blank">' . traina_get_svg_icon('social-linkedin', false) . '</a>';
													}
													if($email){
														$html .= '<a class="social email" href="mailto:' . $email .'">' . traina_get_svg_icon('social-email', false) . '</a>';
													}
												$html .= '</div>';
											$html .= '</div>';
											// Modal Large Image
											$html .= '<figure class="modal__image-wrap">';
												$html .= '<image src="' . $large_image['url'] . '" alt=""/>';
											$html .= '</figure>';
											// Modal body content
											$html .= '<div class="modal-body">' . apply_filters( 'the_content', get_post_field('post_content', $pid) ). '</div>';
											$html .= '<button data-target="#target_modal_' . $the_ID . '" type="button" class="close-modal close-link button" data-dismiss="modal">Back to team</button>';
										$html .= '</div>';
									$html .= '</div>';
								$html .= '</div>';
								array_push($footer_modals_array, $html);
							endif;
						?>
				 	<?php $display_count++; endforeach; ?>
			     </div>
			 </div>
		 </div>
	 </section>
 <?php endif; ?>

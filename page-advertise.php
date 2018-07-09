<!--front-page-->
<?php get_header(); ?>

			<div id="content">


				<?php $custom_query = new WP_Query('pagename=advertise');
				while($custom_query->have_posts()) : $custom_query->the_post(); ?>





			<?php
				// check if the flexible content field has rows of data
				if( have_rows('content_sections') ):

				     // loop through the rows of data
				    while ( have_rows('content_sections') ) : the_row();

						// START FULL WIDTH
				        if( get_row_layout() == 'text_and_full_width_image' ):

									if( have_rows('content') ):

											while( have_rows('content') ): the_row(); ?>
											<a name="<?php echo str_replace(' ', '', get_sub_field('headline', 'option')); ?>"></a>
												<article>
													<div class="content_section content_section--full-width content_section--<?php the_sub_field('text_alignment'); ?> <?php if( get_sub_field('background_color') ): ?>background-color<?php endif; ?>">
														<div class="content_section--content wrap row">
															<h1><?php the_sub_field('headline'); ?></h1>
															<h2><?php the_sub_field('subhead'); ?></h2>
															<?php
																			$attachment_id = get_sub_field('image');
																			$size = "full-width"; // (thumbnail, medium, large, full or custom size)
																			$image = wp_get_attachment_image_src( $attachment_id, $size );
																			// url = $image[0];
																			// width = $image[1];
																			// height = $image[2];
																		?>
														</div>
														<img src="<?php echo $image[0]; ?>">
													</div>
												</article>

											<?php endwhile; endif;
								// END FULL WIDTH

								// START HALF WIDTH
				        elseif( get_row_layout() == 'text_and_half_image' ):

									if( have_rows('content') ):

											while( have_rows('content') ): the_row(); ?>
											<a name="<?php echo str_replace(' ', '', get_sub_field('headline', 'option')); ?>"></a>
												<article>
													<div class="content_section content_section--half content_section--<?php the_sub_field('text_alignment'); ?> <?php if( get_sub_field('background_color') ): ?>background-color<?php endif; ?>">
														<div class="content_section--content wrap row">
															<h1><?php the_sub_field('headline'); ?></h1>
															<h2><?php the_sub_field('subhead'); ?></h2>
														</div>

														<div class="content_section--<?php the_sub_field('image_alignment'); ?> wrap row">
															<?php if( get_sub_field('body_copy') ): ?>
															<div class="col-xs-12 col-sm-7">
																<?php the_sub_field('body_text'); ?>
															</div>
														<?php endif; ?>
															<div class="col-xs-12 col-sm-5">
																<?php
																				$attachment_id = get_sub_field('image');
																				$size = "full-width"; // (thumbnail, medium, large, full or custom size)
																				$image = wp_get_attachment_image_src( $attachment_id, $size );
																				// url = $image[0];
																				// width = $image[1];
																				// height = $image[2];
																			?>

																			<img src="<?php echo $image[0]; ?>">
															</div>

														</div>

													</div>
												</article>

											<?php endwhile; endif;
											// END HALF WIDTH

											// START CONTACT
											elseif( get_row_layout() == 'contact_section' ):

												if( have_rows('content') ):

														while( have_rows('content') ): the_row(); ?>
														<a name="<?php echo str_replace(' ', '', get_sub_field('headline', 'option')); ?>"></a>
															<article>
																<div class="content_section content_section--contact content_section--<?php the_sub_field('text_alignment'); ?> <?php if( get_sub_field('background_color') ): ?>background-color<?php endif; ?>">
																	<div class="content_section--content wrap row">
																		<h1><?php the_sub_field('headline'); ?></h1>
																		<h2><?php the_sub_field('subhead'); ?></h2>
																	</div>

																	<div class="content_section--<?php the_sub_field('image_alignment'); ?> wrap row">
																		<div class="col-xs-1 col-sm-1">
																			&nbsp;
																		</div>
																		<?php if( get_sub_field('body_copy') ): ?>
																		<div class="col-xs-10 col-sm-5 first">
																			<?php the_sub_field('body_text'); ?>
																		</div>
																	<?php endif; ?>
																	<div class="col-xs-1 col-sm-1">
																		&nbsp;
																	</div>
																		<div class="col-xs-12 col-sm-4 last">
																			<?php the_sub_field('contact_form'); ?>
																		</div>
																		<div class="col-xs-0 col-sm-1">
																			&nbsp;
																		</div>
																	</div>

																</div>
															</article>

														<?php endwhile; endif;
														// END CONTACT

														// START TESTIMONIAL
														elseif( get_row_layout() == 'customer_testimonials' ):

															if( have_rows('content') ):

																	while( have_rows('content') ): the_row(); ?>
																	<a name="<?php echo str_replace(' ', '', get_sub_field('headline', 'option')); ?>"></a>
																		<article>
																			<div class="content_section content_section--contact content_section--<?php the_sub_field('text_alignment'); ?> <?php if( get_sub_field('background_color') ): ?>background-color<?php endif; ?>">
																				<div class="content_section--content wrap row">
																					<h1><?php the_sub_field('headline'); ?></h1>
																					<h2><?php the_sub_field('subhead'); ?></h2>
																				</div>

																				<div class="content_section--testimonials wrap row">
																					<!-- BEGIN SLIDER -->
																					<?php	// check if the nested repeater field has rows of data
																						if( have_rows('testimonials') ): ?>
																					<div id="carousel">

																					    <div id="testimonial--buttons"><i id="prev" class="fas fa-adjust"></i><i id="next" class="fas fa-adjust fa-flip-horizontal" data-fa-transform="flip-v flip-h"></i> </div>

																					    <div id="slides">
																					        <ul>
																										<?php // loop through the rows of data
																					          while ( have_rows('testimonials') ) : the_row(); ?>
																					            <li class="slide">
																					                <div class="quoteContainer">
																													<div class="testimonial">
																														<i class="fas fa-quote-left"></i>
																														<span><?php the_sub_field('testimonial'); ?></span>
																														<i class="fas fa-quote-right"></i>
																													</div>

																					                    </p>
																					                </div>
																					                <div class="authorContainer">
																														<div class="testimonial--client-name">
																																<?php the_sub_field('client_name'); ?>
																														</div>
																														<div class="testimonial--client-title">
																																<?php the_sub_field('client_title'); ?>
																														</div>
																					                </div>
																					            </li>
																					            <?php	endwhile; endif; ?>


																					        </ul>
																					    </div>
																							<!-- END SLIDER -->

																				</div>
																			</article>

																	<?php endwhile; endif;
																	// END TESTIMONIAL
				         endif;

				    endwhile;

				else :

				    // no layouts found

				endif;

			?>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the query ?>
	<ul class="hero--logo-bar">
	<?php $custom_query = new WP_Query('pagename=advertise');
	while($custom_query->have_posts()) : $custom_query->the_post(); ?>
	<?php
		//create a repeater loop
		// check if the repeater field has rows of data
		if( have_rows('add_partner_logos') ): while ( have_rows('add_partner_logos') ) : the_row(); ?>

			<?php
				$attachment_id = get_sub_field('logo');
				$size = "medium"; // (thumbnail, medium, large, full or custom size)
				$image = wp_get_attachment_image_src( $attachment_id, $size );
				// url = $image[0];
				// width = $image[1];
				// height = $image[2];
			?>
			<?php if( get_sub_field('logo')): ?>
				<li>
					<img src="<?php echo $image[0]; ?>">
				</li>
			<?php endif; ?>


		<?php endwhile; endif;  endwhile;?>
		</ul>
	</div>
		<?php wp_reset_postdata(); // reset the query ?>
<?php get_footer(); ?>

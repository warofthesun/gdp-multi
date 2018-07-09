<!--front-page-->
<?php get_header('front'); ?>

				<div class="hero--content wrap" >
					<div id="inner-content">
							<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								<?php $custom_query = new WP_Query('pagename=site-options');
								while($custom_query->have_posts()) : $custom_query->the_post(); ?>
								<div class="hero--text">
									<h1>
										<span class="hero--line-one">The latest IT strategy </span>
										<span class="hero--line-two">and thought leadership</span>
									</h1>
									<p>IT Network Today keeps IT professionals and tech leaders up-to-date on the latest developments and movements in business technology, collated from the leading sources in the industry.</p>
								</div>
								<div class="hero--content_articles row">
									<h2 class="col-xs-12">latest content</h2>
									<div class="col-sm-4 article__thumbnail">
										<div class="article__thumbnail--container">
											<div class="article__thumbnail--background-image"></div>

											<div class="article__thumbnail--overlay">
												<div class="reveal"></div>
												<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum, dolor in commodo hendrerit, ante lectus ullamcorper purus, Aenean lobortis ligula nisi, sit amet eleifend mi tempor vitae...</div>
												<a href="#" class="primary-btn">Learn More</a>
											</div>
											<span class="article__thumbnail--title">How Automating Accounts Payable Yielded Money-Saving Results</span>
										</div>
									</div>
									<div class="col-sm-4 article__thumbnail">
										<div class="article__thumbnail--container">
											<div class="article__thumbnail--overlay">
												<div class="reveal"></div>
												<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum, dolor in commodo hendrerit, ante lectus ullamcorper purus, Aenean lobortis ligula nisi, sit amet eleifend mi tempor vitae...</div>
												<a href="#" class="primary-btn">Learn More</a>
											</div>
											<div class="article__thumbnail--background-image"></div>
											<span class="article__thumbnail--title">How Automating Accounts Payable Yielded Money-Saving Results</span>
										</div>
									</div>
									<div class="col-sm-4 article__thumbnail">
										<div class="article__thumbnail--container">
											<div class="article__thumbnail--overlay">
												<div class="reveal"></div>
												<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum, dolor in commodo hendrerit, ante lectus ullamcorper purus, Aenean lobortis ligula nisi, sit amet eleifend mi tempor vitae...</div>
												<a href="#" class="primary-btn">Learn More</a>
											</div>
											<div class="article__thumbnail--background-image"></div>
											<span class="article__thumbnail--title">How Automating Accounts Payable Yielded Money-Saving Results</span>
										</div>
									</div>
								</div>
							</main>
					</div>
				</div>
				<ul class="hero--logo-bar">
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
					<?php endwhile; endif;  ?>
				</ul>
		</div>
		<section class="articles wrap" style="max-Width:1035px;margin-bottom:3rem;">
				<h2>All articles</h2>
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 article__thumbnail">
						<div class="article__thumbnail--container">
							<div class="article__thumbnail--overlay">
								<div class="reveal"></div>
								<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum, dolor in commodo hendrerit, ante lectus ullamcorper purus, Aenean lobortis ligula nisi, sit amet eleifend mi tempor vitae...</div>
								<a href="#" class="primary-btn">Learn More</a>
							</div>
							<div class="article__thumbnail--background-image"></div>
							<span class="article__thumbnail--title">How Automating Accounts Payable Yielded Money-Saving Results</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 article__thumbnail">
						<div class="article__thumbnail--container">
							<div class="article__thumbnail--overlay">
								<div class="reveal"></div>
								<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum, dolor in commodo hendrerit, ante lectus ullamcorper purus, Aenean lobortis ligula nisi, sit amet eleifend mi tempor vitae...</div>
								<a href="#" class="primary-btn">Learn More</a>
							</div>
							<div class="article__thumbnail--background-image"></div>
							<span class="article__thumbnail--title">How Automating Accounts Payable Yielded Money-Saving Results</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 article__thumbnail">
						<div class="article__thumbnail--container">
							<div class="article__thumbnail--overlay">
								<div class="reveal"></div>
								<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum, dolor in commodo hendrerit, ante lectus ullamcorper purus, Aenean lobortis ligula nisi, sit amet eleifend mi tempor vitae...</div>
								<a href="#" class="primary-btn">Learn More</a>
							</div>
							<div class="article__thumbnail--background-image"></div>
							<span class="article__thumbnail--title">How Automating Accounts Payable Yielded Money-Saving Results</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 article__thumbnail">
						<div class="article__thumbnail--container">
							<div class="article__thumbnail--overlay">
								<div class="reveal"></div>
								<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum, dolor in commodo hendrerit, ante lectus ullamcorper purus, Aenean lobortis ligula nisi, sit amet eleifend mi tempor vitae...</div>
								<a href="#" class="primary-btn">Learn More</a>
							</div>
							<div class="article__thumbnail--background-image"></div>
							<span class="article__thumbnail--title">How Automating Accounts Payable Yielded Money-Saving Results</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 article__thumbnail">
						<div class="article__thumbnail--container">
							<div class="article__thumbnail--overlay">
								<div class="reveal"></div>
								<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum, dolor in commodo hendrerit, ante lectus ullamcorper purus, Aenean lobortis ligula nisi, sit amet eleifend mi tempor vitae...</div>
								<a href="#" class="primary-btn">Learn More</a>
							</div>
							<div class="article__thumbnail--background-image"></div>
							<span class="article__thumbnail--title">How Automating Accounts Payable Yielded Money-Saving Results</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 article__thumbnail">
						<div class="article__thumbnail--container">
							<div class="article__thumbnail--overlay">
								<div class="reveal"></div>
								<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum, dolor in commodo hendrerit, ante lectus ullamcorper purus, Aenean lobortis ligula nisi, sit amet eleifend mi tempor vitae...</div>
								<a href="#" class="primary-btn">Learn More</a>
							</div>
							<div class="article__thumbnail--background-image"></div>
							<span class="article__thumbnail--title">How Automating Accounts Payable Yielded Money-Saving Results</span>
						</div>
					</div>
			</div>
		</section>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the query ?>

<?php get_footer('front'); ?>

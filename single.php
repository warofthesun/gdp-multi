<!--single-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap  row">

					<main id="main" class="col-xs-12 col-sm-8 col-lg-9" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">

                  <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

                  <p class="byline entry-meta vcard">

                    <?php printf( __( 'Posted', 'startertheme' ).' %1$s %2$s',
                       /* the time the post was published */
                       '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       /* the author of the post */
                       '<span class="by">'.__( 'by', 'startertheme' ).'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    ); ?>

                  </p>

                </header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="articleBody">
                  <?php the_content(); ?>
                </section> <?php // end article section ?>

                <?php //comments_template(); ?>

              </article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry ">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'startertheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'startertheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'startertheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>
						<div class="col-xs-12 col-sm-4 col-lg-3">
							<a id="pdf_link" href="<?php echo $content_url; ?>" class="hidden" target="_blank">PDF</a>
							<?php echo do_shortcode('[ninja_form id='.$form_id.']'); ?>
						</div>
				</div>

			</div>

<?php get_footer(); ?>

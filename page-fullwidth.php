<?php
/*
 Template Name: Full Width
*/
?>
<!--page-fullwidth-->
<?php get_header('inner'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<header class="article-header">

		<h1 class="page-title"><?php the_title(); ?></h1>

	</header>

			<div id="content">

				<div id="inner-content" class="wrap  row">
						<div class="col-xs-0 col-sm-1">
							&nbsp;
						</div>
						<main id="main" class="col-xs-12 col-sm-10 " role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">



							<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">



								<section class="entry-content " itemprop="articleBody">

									<?php	the_content(); ?>

								</section>

							</article>

							<?php endwhile; endif; ?>

						</main>
						<div class="col-xs-0 col-sm-1">
							&nbsp;
						</div>
				</div>

			</div>


<?php get_footer('inner'); ?>

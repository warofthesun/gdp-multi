<ul class="hero--logo-bar">
  <?php $custom_query = new WP_Query('pagename=site-options');
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
  <?php wp_reset_postdata(); // reset the query ?>
  </ul>

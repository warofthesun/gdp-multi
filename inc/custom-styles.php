
/* Typography
--------------------------*/
body.site {
  color:<?php the_field('text','option');?> !important;
  font-size:<?php the_field('default_font_size','option');?>px;
  font-family:<?php the_field('default_text_font_family','option');?>;
  line-height:<?php the_field('default_text_line_height','option');?>;
}

h1,h2,h3,h4,h5,h6 {
  color:<?php the_field('primary','option');?>;
  font-family:<?php the_field('defaut_header_font_family','option');?>;
}

body.site a {color:<?php the_field('accent','option');?>;}
a:hover{color:<?php the_field('primary','option');?>;}
a:active{color:<?php the_field('primary_medium','option');?>;}


.highlight {
	background:<?php the_field('accent','option');?> !important;
  opacity:0.9;
}

.header {
  background-image: -webkit-gradient(linear, left top, left bottom, from(<?php the_field('primary','option');?>), to(<?php the_field('primary_medium','option');?>)) !important;
  background-image: linear-gradient(<?php the_field('primary','option');?> 0%, <?php the_field('primary_medium','option');?> 100%) !important;
  -webkit-box-shadow: 1px 1px 3px <?php the_field('primary_dark','option');?> !important;
          box-shadow: 1px 1px 3px <?php the_field('primary_dark','option');?> !important; }

.primary-btn, .comment-reply-link, #submit, input[type="submit"], .nf-field-element input[type=button] {
  background-color: <?php the_field('primary','option');?>; }
  .primary-btn:hover, .comment-reply-link:hover, #submit:hover, .primary-btn:focus, .comment-reply-link:focus, #submit:focus, input[type="submit"]:hover, input[type="submit"]:focus, .nf-field-element input[type=button]:hover, .nf-field-element input[type=button]:focus {
    background-color: <?php the_field('primary_medium','option');?>; }
  .primary-btn:active, .comment-reply-link:active, #submit:active, input[type="submit"]:active, .nf-field-element input[type=button]:active {
    background-color: <?php the_field('primary','option');?>; }

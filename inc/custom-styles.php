
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
a:hover{color:<?php the_field('default_linkhover_color','option');?>;}
a:active{color:<?php the_field('default_linkactive_color','option');?>;}
a:focus{color:<?php the_field('default_linkfocus_color','option');?>;}
a:visited{color:<?php the_field('default_linkvisited_color','option');?>;}

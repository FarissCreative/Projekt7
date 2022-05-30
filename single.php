<?php
  get_header(); // dynamicly load the header file

  //the post loop
  if ( have_posts() ){
    while (have_posts() ){
      the_post();
      ?> <section id="klassisk-vaerelse"> <?php
        the_content();
      ?> </section> <?php
    }
  }

  get_footer();
?>

<?php
  /**
  *Template for displaying all the pages
  **/
  get_header(); ?>


  <?php
    //the post loop
    if ( have_posts() ){
      while (have_posts() ){
        the_post();
        ?> <section id="om-os"> <?php
          the_content();
        ?> </section> <?php
      }
    }
  ?>

  <?php
  get_footer();

?>

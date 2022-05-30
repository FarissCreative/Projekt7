<?php
    get_header(); // dynamicly load the header file
    ?>

<?php
  //the post loop
  if ( have_posts() ){
    while (have_posts() ){
      the_post();
      ?> <section id="forside"> <?php
        the_content();
      ?> </section> <?php
    }
  }
?>


<article id="front-page">
  <?php

  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => '1',
    'category_name' => 'mainpost'
  );

  $loop = new WP_Query($args);


  if ($loop->have_posts()):
    while ($loop->have_posts()) : $loop->the_post(); ?>
    <div class="focus-content-outer">
        <h2 class="focus-content-title">
          <?php the_title(); ?>
          <a  href="<?php the_permalink(); ?>">  </a>
        </h2>
        <div class="focus-content-inner">
          <a class="focus-content-img" href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
          <div  class="forside-boks">
            <?php
            the_excerpt();
            ?>
            <a href="<?php the_permalink(); ?>">  <a class="wp-block-button__link" >Læs mere</a> </a>
          </div>

        </div>
      </div>
    <?php
    endwhile;
  endif;
  wp_reset_query();
  ?>
</article>




<div class="page-articles">
<div class="container-post-content">
  <?php


  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => '3',
    'category_name' => 'blogpost'
  );

  $loop = new WP_Query($args);


  if ($loop->have_posts()):
    while ($loop->have_posts()) : $loop->the_post(); ?>
    <div class="post-content">
        <h2 class="page-title">
          <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
        </h2>
        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
        <?php
        the_excerpt();
        //display post content
        ?>
        <div class="more">
           <a href="<?php the_permalink(); ?>">  <a class="wp-block-button__link" >Læs mere</a> </a>
        </div>

      </div>
    <?php
    endwhile;
  endif;
  wp_reset_query();
  ?>
  </div>
</div>


<?php

    get_footer(); // dynamicly load the footer file
    ?>

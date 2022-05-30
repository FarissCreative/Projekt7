<?php get_header(); ?>

<?php
  //the post loop
  if ( have_posts() ){
    while (have_posts() ){
      the_post();
      the_content();
    }
  }
?>


<div class="page-articles">
  <div class="container-boks">
    <div class="boks"> </div>
    <h2 class="section-title"> Værelser på Hotel Villa Gulle </h2>
    <div class="boks"> </div>
  </div>
<div class="container-post-content">
    <?php

    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'category_name' => 'værelser'
    );

    $loop = new WP_Query($args);


    if ($loop->have_posts()):
      while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="post-content">
            <h2 class="page-title">
              <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
            </h2>
            <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>

            <div class="more">
              <a href="<?php the_permalink(); ?>"> <button class="wp-block-button__link"> Læs mere </button> </a>
            </div>
          </div>
      <?php
      endwhile;
    endif;
    wp_reset_query();
    ?>

  </div>
    <div class="container-boks-to">
      <div class="boks"> </div>
      <h2 class="section-title"> Ophold på Hotel Villa Gulle </h2>
      <div class="boks"> </div>
    </div>
    <div class="container-post-content">
    <?php
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => '3',
      'category_name' => 'ophold'
    );

    $second_loop = new WP_Query($args);


    if ($second_loop->have_posts()):
      while ($second_loop->have_posts()) : $second_loop->the_post(); ?>
        <div class="post-content">
            <h2 class="page-title">
              <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
            </h2>
            <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
            <?php
            the_excerpt();//display post content?>
            <div class="more">
              <a href="<?php the_permalink(); ?>"> <button class="wp-block-button__link"> Læs mere </button> </a>
            </div>
          </div>
      <?php
      endwhile;
    endif;
    ?>
  </div>
</div>


<?php get_footer();?>

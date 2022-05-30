<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,500&display=swap" rel="stylesheet">


    <?php
    wp_head(); // wordpress gonna inject the files it needs for the page by itself from functions php file.
    ?>

</head>

<body>
    <header class="header">
	    <nav class="navbar">

			<!-- logo image -->
      <?php
        if(function_exists('the_custom_logo')){
          $custom_logo_class = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_class);

        }
        ?>
        <img class="" src="<?php echo $logo[0] ?>" alt="not working">

          <!-- menu function -->
          <?php
          wp_nav_menu(
              array( // takes an array that contain different parameters
                  'menu' => 'primary', //name of the menu we trying to output, which is the primary menu (Desktop Primary Navigation line 21, funtions.php)
                  'container' => '',
                  'theme_location' => 'primary'// when the user selected the theme location => this is the primary location
                  //'items_wrap' => '<ul id="" class="">%3$s</ul>'
                  )
          );
          ?>
        <div class="book">
          <p class="phonenumber"> +45 55 55 55 55</p>
          <button class="bookbtn" >Book</button>
        </div>
	    </nav>
    </header>

<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <?php 
      $defaults = array(
        'theme_location'  => 'menu-1',
    );
    wp_nav_menu($defaults); 

    echo get_template_directory();
    echo "<br>";
    echo get_stylesheet_directory();
    echo "<br>";
    echo get_template_directory_uri();
    echo "<br>";
    echo get_stylesheet_directory_uri();
    echo "<br>";
    echo get_stylesheet_uri();
    ?>
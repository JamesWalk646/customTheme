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
    echo apply_filters('my_custom_hook','Hello World');
    ?>
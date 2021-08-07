<?php
add_theme_support('post-thumbnails');
add_theme_support('html5',array(
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption'
));
add_theme_support('woocommerce');
add_theme_support( 'title-tag' );
$args1 = array( 
    'name'          => __( 'My Sidebar', 'customtheme' ),
    'id'            => 'customtheme-sidebar-1',
    'description'   => __( 'This is Default Sidebar', 'customtheme' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
);
$args2 = array(
    'name'          => __( 'My Sidebar 2', 'customtheme' ),
    'id'            => 'customtheme-sidebar-2',
    'description'   => __( 'This is Second Sidebar', 'customtheme' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
);
register_sidebar($args1);
register_sidebar($args2);
$locations = array(
    'menu-1' => 'Navigation Menu 1',
    'menu-2' => 'Navigation Menu 2',
);
register_nav_menus( $locations);
function custom_my_custom_hooks(){
    echo "<h1>Iam a Custom Hooks </h1>";
}
function custom_my_custom_hooks1(){
    echo "<h1>Iam a Custom Hooks One </h1>";
}
?>
<?php get_header(); ?>
    <h1>This is home.php</h1>
    <?php if ( have_posts() ) : 
        while ( have_posts() ) : 
          the_post(); 
          the_title();
          the_category();
          dynamic_sidebar('customtheme-sidebar-2'); 
          the_content();
          the_author();
          the_tags();
        endwhile;
    endif;
    get_sidebar(); 
    ?>
 <?php get_footer(); ?>   
<?php get_header(); ?>
<body>
    <h1>This is page.php</h1>
    <?php if ( have_posts() ) : 
        while ( have_posts() ) : 
          the_post(); 
          the_title();
          the_category();
          the_content();
          the_author();
          the_tags();
        endwhile;
    endif;
    ?>
    <?php get_footer(); ?>
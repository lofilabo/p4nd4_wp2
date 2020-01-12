<?php /* Template Name: Page */ ?>
<?php

get_header();

 if(have_posts()) : ?>
    <?php while(have_posts())  : the_post(); ?>
      <h2><?php the_title(); ?></h2>                        
      <?php the_content(); ?>          
      <? // php comments_template( '', true ); ?> 
    <?php endwhile; ?>                   
      <?php else : ?>                       
        <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
<?php endif; ?> 


</h6>
<?php 
get_footer();
?>

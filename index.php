<?php
get_header();

$args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'ASC',
'posts_per_page' => -1 // this will retrive all the post that is published
);
$result = new WP_Query( $args );


if ( $result->have_posts() ) :
        while ( $result->have_posts() ) : $result->the_post(); ?>
            <li><a href="<?php the_permalink() ?>"><?php the_title()  ?></a></li>
        <?php endwhile;

endif;
?>
<h2>  
<?php echo( $current_post->post_title ); ?>
</h2>
<p>
<?php echo( $current_post->post_content ); ?>
</p>
<div class="line"></div>
<h6>
<?php
  echo( "ID : " . $current_post->ID . "<br/>" );
  echo( "author : " . $current_post->post_author . "<br/>" );
  echo( "date : " . $current_post->post_date . "<br/>" );
  echo( "gmt : " . $current_post->post_date_gmt . "<br/>" );
  echo( "excerpt : " . $current_post->post_excerpt . "<br/>" );
  echo( "status : " . $current_post->post_status . "<br/>" );
  echo( "comment status : " . $current_post->comment_status . "<br/>" );
  echo( "ping status : " . $current_post->ping_status . "<br/>" );
  echo( "name : " . $current_post->post_name . "<br/>" );
  echo( "parent : " . $current_post->post_parent . "<br/>" );
  echo( "guid : " . $current_post->guid . "<br/>" );
  echo( "menu : " . $current_post->menu_order . "<br/>" );
  echo( "type : " . $current_post->post_type . "<br/>" );
  echo( "mime type : " . $current_post->post_mime_type . "<br/>" );
  echo( "comment count : " . $current_post->comment_count . "<br/>" );
  echo( "filter : " . $current_post->filter . "<br/>" );
?>
</h6>
<?php 
get_footer();
?>

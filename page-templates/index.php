<?php /* Template Name: Index */ ?>
<?php
get_header();

$pages = get_pages( array('sort_column' => 'menu_order')  ); 

//var_dump( $pages );

   foreach ($pages as $page) {

       $permalink = get_permalink( $page->ID );
       echo ( "<a href='".  $permalink  ."'>"  );
       echo $page->post_title;
       echo ( "</a>" );
       
       echo( "<br/>" );

   }

?>
</h6>
<?php 
get_footer();
?>

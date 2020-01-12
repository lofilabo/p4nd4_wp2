<?php
get_header();

  $pages = get_pages(); 
   foreach ($pages as $page) {
       echo $page->post_title;
   }

?>
</h6>
<?php 
get_footer();
?>

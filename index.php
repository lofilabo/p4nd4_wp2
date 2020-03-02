<?php
get_header();

  $pages = get_pages(); 
   foreach ($pages as $page) {
	//var_dump($page);
	echo ( "<a href ='" );
	echo( $page->guid );
	echo( "'>" );
       	echo ( $page->post_title);
	echo( "</a>" );
	echo( "<br/>" );
   }

get_footer();
?>

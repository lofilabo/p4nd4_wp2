<?php /* Template Name: Index */ ?>
<?php
get_header();

$pages = get_pages( array('sort_column' => 'menu_order')  ); 

//var_dump( $pages );

   foreach ($pages as $page) {
	$isChildOfAParent = false;
	$parentID = $page->post_parent;
	//echo($parentID);
	if($parentID == 0){
	   $isChildOfAParent = false;
	       $permalink = get_permalink( $page->ID );
	       echo ( "<a href='".  $permalink  ."'>"  );
	       echo $page->post_title;
	       echo ( "</a>" );
       
	       echo( "<br/>" );
	}else{
	   $isChildOfAParent = true;
	}

   }

?>
</h6>
<?php 
get_footer();
?>

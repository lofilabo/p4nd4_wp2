<?php /* Template Name: Page */ ?>
<?php

get_header();

//$pages = get_pages();
//var_dump( $pages );

 if(have_posts()) : 
     while(have_posts()): the_post(); 

	$id = get_the_id();  
	$thispost = wp_get_single_post($id);
	$currentPageID = $id;
?>
      <h2><?php the_title(); ?></h2>
      <?php 
	the_content(); 
	endwhile;
endif; 
?> 


</h6>



<?php 

$pages = get_pages( array('sort_column' => 'menu_order')  );
$doesThisHaveAnyChildren = false;
$i = 0;
foreach ($pages as $page) {
	if($page->post_parent == $currentPageID){
		$doesThisHaveAnyChildren = true;
		$i++;
		}
		}

		if( $doesThisHaveAnyChildren ){
		echo("<h4>Sub-Pages</h4>");

		foreach ($pages as $page) {
		$isChildOfAParent = false;
		$parentID = $page->post_parent;
		//echo($parentID);
		if($parentID == $currentPageID){
		       $permalink = get_permalink( $page->ID );
		       echo ( "<h6><a href='".  $permalink  ."'>"  );
		       echo $page->post_title;
		       echo ( "</a></h6>" );
		}
	}
}
get_footer();
?>

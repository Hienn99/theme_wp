<?php
/*Functions Dev*/
function w366_dev_setup() {
	//Add New Size Media
	add_image_size( 'thumb_360x260', 360, 260, true );
	
}
add_action( 'after_setup_theme', 'w366_dev_setup' );


//Active do_shortcode for Text Widget
add_filter('widget_text','do_shortcode');

/*Your function here....*/
//show_admin_bar( false );
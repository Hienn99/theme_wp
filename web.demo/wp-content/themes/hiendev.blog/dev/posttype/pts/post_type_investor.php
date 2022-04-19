<?php
$posttype = 'wle_investor';
$posttype_slug_use_frontend = 'chu-dau-tu';

/**
 * Post type label, references https://developer.wordpress.org/reference/functions/get_post_type_labels/
 */	
$labels = array(
				'name' => __( 'Chủ đầu tư', PTS_TEXTDOMAIN ),
				'singular_name' => __( 'Chủ đầu tư' ),
				'add_new' => __( 'Thêm mới', PTS_TEXTDOMAIN ), //.....xem them : https://codex.wordpress.org/Function_Reference/register_post_type
			  );

/**
 * Post type
 */			  
$posttypes = array(
			  'labels' => $labels,
			  'public' => true,
			  'publicly_queryable' => true,
			  'show_ui' => true,
			  'show_in_menu' => true,
			  'query_var' => false,
			  'capability_type' => 'post',
			  'has_archive' => false,
			  'rewrite' => array( 'slug' => $posttype_slug_use_frontend, 'with_front' => false  ), 
			  'menu_icon'=>'dashicons-align-pull-left', //https://developer.wordpress.org/resource/dashicons/#media-text
			  'supports' => array('title', 'editor' , 'thumbnail', 'excerpt') // title, editor, author, thumbnail, excerpt, trackbacks, custom-fields, comments, revisions
			);
			
/**
 * Post type taxonomy
 */		
$taxonomy = array();
			
/**
 * Post type columns
 */
$columns = array();
$columns['title'] = __( 'Tiêu đề', PTS_TEXTDOMAIN );
$columns['featured_image'] = __( 'Hình', PTS_TEXTDOMAIN );
$columns['date'] = __( 'Ngày', PTS_TEXTDOMAIN );

/**
 * Tags
 */
$arrTags = array();	

/**
 * Post type configs
 */
$arr_post_type[$posttype] = array(	'post-type' => $posttypes, 
									'taxonomy' => $taxonomy, 
									'columns' =>$columns,
									//'sort_columns' => array('price'),
									'tag'=>$arrTags);


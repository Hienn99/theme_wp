<?php
$posttype = 'w366_faq';
$posttype_slug_use_frontend = '';

/**
 * Post type label, references https://developer.wordpress.org/reference/functions/get_post_type_labels/
 */	
$labels = array(
				'name' => __( 'Câu hỏi', PTS_TEXTDOMAIN ),
				'singular_name' => __( 'Câu hỏi' ),
				'add_new' => __( 'Thêm mới', PTS_TEXTDOMAIN ), //.....xem them : https://codex.wordpress.org/Function_Reference/register_post_type
			  );

/**
 * Post type
 */			  
$posttypes = array(
			  'labels' => $labels,
			  'public' => false,
			  'publicly_queryable' => true,
			  'show_ui' => true,
			  'show_in_menu' => true,
			  'query_var' => false,
			  'capability_type' => 'page',
			  'has_archive' => false,
			  'rewrite' => array( 'slug' => $posttype_slug_use_frontend, 'with_front' => false  ), 
			  'menu_icon'=>'dashicons-editor-ol', //https://developer.wordpress.org/resource/dashicons/#media-text
			  'supports' => array('title','editor') // title, editor, author, thumbnail, excerpt, trackbacks, custom-fields, comments, revisions
			);
			
/**
 * Post type taxonomy
 */		
$taxonomy = NULL;
			
/**
 * Post type columns
 */
$columns = array();
$columns['title'] = __( 'Tiêu đề', PTS_TEXTDOMAIN );
$columns['date'] = __( 'Ngày', PTS_TEXTDOMAIN );

/**
 * Tags
 */
$arrTags = NULL;	

/**
 * Post type configs
 */
$arr_post_type[$posttype] = array(	'post-type' => $posttypes, 
									'taxonomy' => $taxonomy, 
									'columns' =>$columns,
									'sort_columns' => NULL,
									'tag'=>$arrTags);


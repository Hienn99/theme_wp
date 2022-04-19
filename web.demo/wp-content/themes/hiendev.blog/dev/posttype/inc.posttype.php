<?php
//Register posttype
$posttype = 'wb366_apply_visa';
$posttype_slug_use_frontend = '';
$labels = array(
				'name' => __( 'Apply Visa', 'twentyseventeen' ),
				'singular_name' => __( 'Wp_Apply_Visa' ),
				'add_new' => __( 'Add new', 'twentyseventeen' ), //.....xem them : https://codex.wordpress.org/Function_Reference/register_post_type
			  );
$posttypes = array(
			  'labels' => $labels,
			  'public' => true,
			  'publicly_queryable' => false,
			  'show_ui' => true,
			  'show_in_menu' => true,
			  'query_var' => false,
			  'capability_type' => 'page',
			  'has_archive' => false,
			  'rewrite' => array( 'slug' => $posttype_slug_use_frontend, 'with_front' => false  ), 
			  'menu_icon'=>'dashicons-images-alt2', //https://developer.wordpress.org/resource/dashicons/#media-text
			  'supports' => array('title','editor') //'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', and 'post-formats'
			);
/*############ 2 ################*/
$slug_tax_use_admin = 'theme_category';
$slug_tax_use_frontend = 'danh-muc-mau-theme';			
$taxonomy = array(	$slug_tax_use_admin,
					array(
					'hierarchical' => true,
					'label' =>  __('Danh mục', 'financeup'),
					'query_var' => true,
					'rewrite' => array( 'slug' => $slug_tax_use_frontend, 'with_front' => false ),
					'show_ui' => true,
					'singular_name' => 'Theme_Category'
					)
			);
			
/*############ 3 ################*/
$columns = array();
$columns['title'] = 'Title';
//$columns['featured_image'] = 'Featured';
$columns['email'] = 'Email';
$columns['total_amount'] = 'Total Amount';
$columns['payment_status'] = 'Payment Status'; 
$columns['status'] = 'Status'; 
$columns['date'] = 'Date';

/**--------------------**/
$arr_post_type[$posttype] = array(	'post-type' => $posttypes, 
									'taxonomy' => $taxonomy, 
									'columns' =>$columns,
									'sort_columns' => array('total_amount'),
									'tag'=>$arrTags);


/**********************************
** Posttype Item end
***********************************/
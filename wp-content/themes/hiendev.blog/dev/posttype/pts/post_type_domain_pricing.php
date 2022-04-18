<?php
$posttype = 'w366_domain_pricing';
$posttype_slug_use_frontend = '';

/**
 * Post type label
 */	
$labels = array(
				'name' => __( 'Giá tên miền', PTS_TEXTDOMAIN ),
				'singular_name' => __( 'Giá tên miền' ),
				'add_new' => __( 'Thêm mới', PTS_TEXTDOMAIN ), //.....xem them : https://codex.wordpress.org/Function_Reference/register_post_type
			  );

/**
 * Post type
 */			  
$posttypes = array(
			  'labels' => $labels,
			  'public' => true,
			  'publicly_queryable' => false,
			  'show_ui' => true,
			  'show_in_menu' => true,
			  'query_var' => false,
			  'capability_type' => 'page',
			  'has_archive' => false,
			  'rewrite' => false, 
			  'menu_icon'=>'dashicons-groups', //https://developer.wordpress.org/resource/dashicons/#media-text
			  'supports' => array('title')
			);
			
/**
 * Post type taxonomy
 */				
$slug_tax_use_admin = 'w366_domain_pricing_tax';
$slug_tax_use_frontend = 'loai-ten-mien';			
$taxonomy = array(	$slug_tax_use_admin,
					array(
					'hierarchical' => true,
					'label' =>  __('Loại tên miền', PTS_TEXTDOMAIN),
					'query_var' => true,
					'rewrite' => array( 'slug' => $slug_tax_use_frontend, 'with_front' => false ),
					'show_ui' => true,
					'singular_name' => 'w366_domain_pricing_tax_Category'
					)
			);
			
/**
 * Post type columns
 */
$columns = array();
$columns['title'] = __( 'Tiêu đề', PTS_TEXTDOMAIN );
$columns['price_1'] = __( 'Giá năm đầu', PTS_TEXTDOMAIN );
$columns['price_2'] = __( 'Giá duy trì', PTS_TEXTDOMAIN );
$columns['price_3'] =  __( 'Giá chuyển', PTS_TEXTDOMAIN );
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
									'sort_columns' => array(),
									'tag'=>$arrTags);

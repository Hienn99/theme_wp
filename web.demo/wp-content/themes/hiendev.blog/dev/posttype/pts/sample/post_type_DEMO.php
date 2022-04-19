<?php
$posttype = 'hl_demo';
$posttype_slug_use_frontend = '';

/**
 * Post type label
 */	
$labels = array(
				'name' => __( 'Khách hàng', PTS_TEXTDOMAIN ),
				'singular_name' => __( 'Wp_Apply_Visa' ),
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
			  'supports' => array('title','editor')
			);
			
/**
 * Post type taxonomy
 */		
$slug_tax_use_admin = 'hl_demo_tax';
$slug_tax_use_frontend = 'danh-muc-demo';			
$taxonomy = array(	$slug_tax_use_admin,
					array(
					'hierarchical' => true,
					'label' =>  __('Danh mục demo', PTS_TEXTDOMAIN),
					'query_var' => true,
					'rewrite' => array( 'slug' => $slug_tax_use_frontend, 'with_front' => false ),
					'show_ui' => true,
					'singular_name' => 'hl_demo_tax_Category'
					)
			);
			
/**
 * Post type columns
 */
$columns = array();
$columns['title'] = __( 'Tiêu đề', PTS_TEXTDOMAIN );
$columns['featured_image'] = __( 'Hình', PTS_TEXTDOMAIN );
$columns['author'] =  __( 'Tác giả', PTS_TEXTDOMAIN );
$columns['date'] = __( 'Ngày', PTS_TEXTDOMAIN );

/**
 * Tags
 */
$slug_tag_use_frontend = 'the-san-pham';
$arrTags = array(
					$slug_tag_use_frontend,
					array(
						'name' => _x( 'Tags', 'taxonomy general name' ),
						'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
						'search_items' =>  __( 'Search Tags' ),
						'popular_items' => __( 'Popular Tags' ),
						'all_items' => __( 'All Tags' ),
						'parent_item' => null,
						'parent_item_colon' => null,
						'edit_item' => __( 'Edit Tag' ), 
						'update_item' => __( 'Update Tag' ),
						'add_new_item' => __( 'Add New Tag' ),
						'new_item_name' => __( 'New Tag Name' ),
						'separate_items_with_commas' => __( 'Separate tags with commas' ),
						'add_or_remove_items' => __( 'Add or remove tags' ),
						'choose_from_most_used' => __( 'Choose from the most used tags' ),
						'menu_name' => __( 'Tags' ),
					  )
				);	
				
/**
 * Post type configs
 */
$arr_post_type[$posttype] = array(	'post-type' => $posttypes, 
									'taxonomy' => $taxonomy, 
									'columns' =>$columns,
									//'sort_columns' => array('total_amount'),
									'tag'=>$arrTags);


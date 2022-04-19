<?php
$posttype = 'hl_product';
$posttype_slug_use_frontend = 'mau-web';

/**
 * Post type label, references https://developer.wordpress.org/reference/functions/get_post_type_labels/
 */	
$labels = array(
				'name' => __( 'Mẫu web', PTS_TEXTDOMAIN ),
				'singular_name' => __( 'Mẫu web' ),
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
			  'capability_type' => 'page',
			  'has_archive' => false,
			  'rewrite' => array( 'slug' => $posttype_slug_use_frontend, 'with_front' => false  ), 
			  'menu_icon'=>'dashicons-images-alt2', //https://developer.wordpress.org/resource/dashicons/#media-text
			  'supports' => array('title','editor', 'thumbnail') // title, editor, author, thumbnail, excerpt, trackbacks, custom-fields, comments, revisions
			);
			
/**
 * Post type taxonomy
 */		
$slug_tax_use_admin = 'product_tax';
$slug_tax_use_frontend = 'danh-muc-mau'; //$slug_tax_use_frontend = 'danh-muc-mau';	/ => remove slug from url
$taxonomy = array(	$slug_tax_use_admin,
					array(
					'hierarchical' => true,
					'label' =>  __('Danh mục mẫu', PTS_TEXTDOMAIN),
					'query_var' => true,
					'rewrite' => array( 'slug' => $slug_tax_use_frontend, 'with_front' => false ),
					'show_ui' => true,
					'singular_name' => 'product_tax_Category'
					)
			);
			
/**
 * Post type columns
 */
$columns = array();
$columns['title'] = __( 'Tiêu đề', PTS_TEXTDOMAIN );
$columns['featured_image'] = __( 'Hình', PTS_TEXTDOMAIN );
$columns['product_tax'] = __( 'Danh mục', PTS_TEXTDOMAIN );
$columns['product_price'] =  __( 'Giá', PTS_TEXTDOMAIN );
$columns['package'] =  __( 'Gói', PTS_TEXTDOMAIN );
$columns['date'] = __( 'Ngày', PTS_TEXTDOMAIN );

/**
 * Tags
 */
$slug_tag_use_frontend = 'web';
$arrTags = array(
				'hierarchical' => false,
				'labels' => $tag_labels,
				'show_ui' => true,
				'update_count_callback' => '_update_post_term_count',
				'query_var' => true,
				'rewrite' => array( 'slug' => $slug_tag_use_frontend ),
			  );	

/**
 * Post type configs
 */
$arr_post_type[$posttype] = array(	'post-type' => $posttypes, 
									'taxonomy' => $taxonomy, 
									'columns' =>$columns,
									'sort_columns' => array('price'),
									'tag'=>$arrTags);


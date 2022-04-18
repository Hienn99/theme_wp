<?php
$posttype = 'wle_project';
$posttype_slug_use_frontend = 'chi-tiet-du-an';

/**
 * Post type label, references https://developer.wordpress.org/reference/functions/get_post_type_labels/
 */	
$labels = array(
				'name' => __( 'Dự án', PTS_TEXTDOMAIN ),
				'singular_name' => __( 'Dự án' ),
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
			  'menu_icon'=>'dashicons-building', //https://developer.wordpress.org/resource/dashicons/#media-text
			  'supports' => array('title', 'editor', 'thumbnail', 'excerpt') // title, editor, author, thumbnail, excerpt, trackbacks, custom-fields, comments, revisions
			);
			
/**
 * Post type taxonomy
 */		
$arr_taxonomy = array();

//Taxonomy 1------------------
$slug_tax_use_admin = 'wle_project_tax';
$slug_tax_use_frontend = 'danh-muc-du-an';			
$taxonomy = array(	$slug_tax_use_admin,
					array(
					'hierarchical' => true,
					'label' =>  __('Danh mục dự án', PTS_TEXTDOMAIN),
					'query_var' => true,
					'rewrite' => array( 'slug' => $slug_tax_use_frontend, 'with_front' => false ),
					'show_ui' => true,
					'singular_name' => 'wle_project_tax_Category'
					)
			);
$arr_taxonomy[] = $taxonomy;

//Taxonomy 2------------------
$slug_tax_use_admin = 'wle_city_tax';
$slug_tax_use_frontend = 'tinh-thanh-pho';			
$taxonomy = array(	$slug_tax_use_admin,
					array(
					'hierarchical' => true,
					'label' =>  __('Tỉnh TP', PTS_TEXTDOMAIN),
					'query_var' => true,
					'rewrite' => array( 'slug' => $slug_tax_use_frontend, 'with_front' => false ),
					'show_ui' => true,
					'singular_name' => 'wle_city_tax_Category'
					)
			);
$arr_taxonomy[] = $taxonomy ;
			
/**
 * Post type columns
 */
$columns = array();
$columns['title'] = __( 'Tiêu đề', PTS_TEXTDOMAIN );
$columns['featured_image'] = __( 'Hình', PTS_TEXTDOMAIN );
$columns['wle_project_tax'] = __( 'Danh mục', PTS_TEXTDOMAIN );
$columns['wle_city_tax'] = __( 'Tỉnh thành phố', PTS_TEXTDOMAIN );
$columns['featured_ajax'] = __( 'Nổi bật', PTS_TEXTDOMAIN );
$columns['date'] = __( 'Ngày', PTS_TEXTDOMAIN );

/**
 * Tags
 */
$arrTags = array();	

/**
 * Post type configs
 */
$arr_post_type[$posttype] = array(	'post-type' => $posttypes, 
									'arr_taxonomy' => $arr_taxonomy, 
									'columns' =>$columns,
									//'sort_columns' => array('price'),
									'tag'=>$arrTags);


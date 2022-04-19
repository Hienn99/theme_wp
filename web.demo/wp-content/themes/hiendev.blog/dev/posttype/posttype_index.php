<?php
require_once (dirname(__FILE__) . '/pts_index.php');

class wle_post_type_custom{
	
	var $wp_theme;
	var $name;
	var $columns;
	var $a_post_type;
	
	public function __construct() {
		$this->a_post_type = $this->getArrPostype();
		$this->columns;
		$this->wp_theme =  wp_get_theme();
		$this->name = $this->wp_theme->get( 'Name' );
		$this->init();
	}
	
	public function setPosttype($psttype){
		$this->posttype = $psttype;
	}
	
	public function getPosttype(){
		return $this->posttype;
	}
	
	public function getArrPostype(){
		global $arr_post_type;
		return $arr_post_type;
	}
	
	
	public function init(){
		add_action('admin_init', 'flush_rewrite_rules');
		add_action('init', array($this, 'registerPosttype'));
	}
	
	//Register Post Type
	public function registerPosttype(){
		$arr_post_type = $this->getArrPostype();
		if($arr_post_type):
			foreach($arr_post_type as $posttype => $val_postype):
				//Register Posttype
				$args = $val_postype['post-type'];
				if($posttype)
				register_post_type( $posttype, $args);
				
				
				
				//Register Tax
				$arr_taxonomy = $val_postype['arr_taxonomy'];
				if($arr_taxonomy){
					foreach($arr_taxonomy as $taxonomy){
						//$taxonomy = $val_postype['taxonomy'];
						$taxonomy_type = isset($taxonomy[0])? $taxonomy[0] : 0;
						$taxonomy_args = isset($taxonomy[1])? $taxonomy[1] : 0;;
						if($taxonomy_type)
						register_taxonomy($taxonomy_type, $posttype, $taxonomy_args	);
					}
				}
				
				
				//Register Tags
				$tag_args = $val_postype['tag'];
				if($tag_args){
					register_taxonomy('tag_for_'.$posttype, $posttype, $tag_args);
				}
				
				
				//Add Columns
				$columns = $val_postype['columns'];
				$newCustomPosttype = new self();
				
				$newCustomPosttype->setPosttype($posttype);
				if($columns){
					// Set Columns
					$newCustomPosttype->columns = $columns;
					
					//add columns
					add_filter('manage_'.$posttype.'_posts_columns', array($newCustomPosttype, 'getColumns'));
					
					// get content column
					add_action('manage_'.$posttype.'_posts_custom_column', array($newCustomPosttype, 'getColumnsContent'), 10, 2);
				}
				
				//Columns Sort (Only sort with Integer value)
				$sort_columns = $val_postype['sort_columns'];
				if($sort_columns && $newCustomPosttype){
					$newCustomPosttype->sort_columns = $sort_columns;
					add_filter( 'manage_edit-'.$posttype.'_sortable_columns', array($newCustomPosttype, 'sortColumns') );
				}
			endforeach;
		endif;
	}
	
	public function sortColumns() {
		$sort_columns = $this->sort_columns;
		if($sort_columns){
			foreach($sort_columns as $column) {
				$columns[$column] = $column;
			}
		}
		return $columns;
	}
	
	public function getColumns() {
		$columns = $this->columns;
		$columns = array('cb' => '<input type="checkbox" />') + $columns;
		$new = $columns;
		if(array_key_exists("featured_image", $columns)):
			$new = array();
			foreach($columns as $key => $title) {
				if ($key=='title')
					$new['featured_image'] = 'Featured Image';
				
				$new[$key] = $title;
			}
		endif;
		return $new;
	}
	
	public function getColumnsContent($column_name, $post_ID) {
		$arrPosttype = $this->a_post_type;
		$posttype = $this->posttype;
		$arr_var =$arrPosttype[$posttype]; 
		
		
		$taxonomy_type = '';
		$arr_taxonomy = $arr_var['arr_taxonomy']; //var_dump($arr_taxonomy);
		if($arr_taxonomy){
			foreach($arr_taxonomy as $tax){
				$t = $tax[0];
				if($column_name==$t){
					$taxonomy_type = $t;
				}
			}
		}
		
		
		//echo '11111'.var_dump($posttype);exit;
		
		$s_content_col = '';
		switch ($column_name) {
			// Custom------------- http://justintadlock.com/archives/2011/06/27/custom-columns-for-custom-post-types
			case 'ID':
				$s_content_col =  $post_ID;
				echo $s_content_col;
			break;
			
			case 'featured_ajax':
				$featured_ajax =  get_post_meta($post_ID, 'featured_ajax', true );
				if($featured_ajax){
					$s = '<span class="dashicons dashicons-star-filled"></span>';
				}else{
					$s = '<span class="dashicons dashicons-star-empty"></span>';
				}
				$s_content_col = '<a title="Nổi bật" href="#" class="js-set_featured" data-post="'.$post_ID.'">'.$s.'</a>';
				echo $s_content_col;
			break;
			// End Custom-------------
			
			// LIB
			case 'featured_image':
				$post_featured_image = $this->get_featured_image($post_ID);
				if ($post_featured_image) {
					$s_content_col = '<img width="50" src="' . $post_featured_image . '" />';
				}else{
					$s_content_col = 'No IMG';
				}
				echo $s_content_col;
			break;
				
			case $taxonomy_type:
				
				$postterms = get_the_terms($post_ID, $taxonomy_type);
				if($postterms){
					$termlists = array();
					foreach($postterms as $postterm){
						$termlists[] = '<a href="'.admin_url('edit.php?'.$taxonomy_type.'='.$postterm->slug.'&post_type='.$posttype).'">'.$postterm->name.'</a>';
					}
					if(count($termlists)>0){
						$s_content_col = implode(", ",$termlists);
					}
				}
				echo $s_content_col;
			break;
				
			default:
				$s_content_col =  get_post_meta($post_ID, $column_name, true );
				echo $s_content_col;
				break;
		}
	}
	
	public function get_featured_image($post_ID) {
		$post_thumbnail_id = get_post_thumbnail_id($post_ID);
		if ($post_thumbnail_id) {
			$post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
			return $post_thumbnail_img[0];
		}
	}
	
	
	
//End Class
}
new wle_post_type_custom();
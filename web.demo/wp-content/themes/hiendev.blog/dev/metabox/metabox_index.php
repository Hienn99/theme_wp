<?php
define('HL_MTB_PREFIX', 'hl_mtb_');

//Include Helper
require_once (dirname(__FILE__) . '/inc/helper_get.php');
require_once (dirname(__FILE__) . '/inc/class.metabox.save.php');

class HL_Ajax_Metabox extends HL_Metabox_Save {
	public $arr_sections = array();
	public $arr_type = array(
							'text', 
							'textarea', 
							'repeater', 
							'select', 
							'checkbox', 
							'radio', 
							'checkboxs', 
							'editor', 
							'file', 
							'image', 
							'gallery',
							'color-picker'
							);
	public $prefix = HL_MTB_PREFIX;
	
	function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_css_js' ));
		$this->arr_sections = isset($arr_sections) ? $arr_sections : array();
		add_action( 'add_meta_boxes', array($this, 'add_metabox_post_type') );
		add_action( 'save_post', array($this, 'save'), 10, 2 );
	}
	
	public function get_css_uri(){
		$str_path = str_replace("\\","/", dirname(__FILE__) );
		$arr_path = explode("/themes/", $str_path); 
		$uri_css = get_theme_root_uri() . '/'. $arr_path[1] . '/assets/css';
		return $uri_css;
	}
	
	public function get_js_uri(){
		$str_path = str_replace("\\","/", dirname(__FILE__) );
		$arr_path = explode("/themes/", $str_path); 
		$uri_js = get_theme_root_uri() . '/'. $arr_path[1] . '/assets/js';
		return $uri_js;
	}
	
	function register_admin_css_js(){
		wp_enqueue_style( 'wp-color-picker' );
    	wp_enqueue_script( 'wp-color-picker');
		wp_enqueue_media();
		
		// Css ---------------
		wp_register_style( $this->prefix.'admin-styles.css', $this->get_css_uri() . '/admin-styles.css', false, '1.0.0' );
		wp_enqueue_style( $this->prefix.'admin-styles.css' );
		
		// Js ---------------
		wp_enqueue_script( $this->prefix.'admin-script.js', $this->get_js_uri() . '/admin-script.js' , array(), '1.0', true );
	}
	
	function set_arr_sections( $new_sections ){
		$this->arr_sections = $new_sections;
	}
	
	function get_arr_sections(){
		return $this->arr_sections;
	}
	
	function add_section( $section ){
		$arr_sections = $this->get_arr_sections();
		$arr_sections[] = $section;
		$this->arr_sections = $arr_sections;
	}
	
	
	static function get_field_template(){
		$str_path = str_replace("\\","/", dirname(__FILE__) ); 
		$arr_path = explode("/themes/".get_template()."/", $str_path); 
		return $arr_path[1].'/fields';
	}

	function add_metabox_post_type() {
		$arr_sections = $this->get_arr_sections();
		if($arr_sections){
			$post_id = get_the_ID();
			$arr_post_type_all = array();
			$file_template_php = basename( get_post_meta($post_id , '_wp_page_template', true) );
			foreach( $arr_sections as $section ){
				$id = uniqid( sanitize_title( $section['title'] ) . "_" );
				$title = __( $section['title'], '' );
				$arr_post_type = $section['post_type']; // array
				
				if($file_template_php && in_array($file_template_php, $arr_post_type ) ){
					$post_type = get_post_type( $post_id );
					$arr_post_type[] = $post_type; 
				}
				$context = isset($section['context']) ? $section['context'] : 'normal'; // advanced ; side ; normal
				$priority = isset($section['priority']) ? $section['priority'] : 'default'; // low ; high; default
				$callback_args =  array( $section );
				add_meta_box( $id, $title, array($this, 'create_metabox_html'), $arr_post_type, $context, $priority, $callback_args);
			}
		}
	}
	
	function create_metabox_html( $post, $callback_args ){
		$post_id = $post->ID;
		$arr_fields = $callback_args['args'][0]['fields'];
		if($arr_fields){
			foreach($arr_fields as $k => $field){ 
				$field['key'] = $this->prefix . $k;
				self::get_field_html($field, $post_id);
			}
		}else{
		?>
        	<p>Chưa có field nào của section này được khai báo</p>
        <?php
		}
	}
	
	static function get_field_html($field, $post_id){
		set_query_var( 'field', $field );
		set_query_var( 'post_id', $post_id );
		$type = $field['type'];
		get_template_part( self::get_field_template() . '/' .$type, '' );
	}
}

function hl_get_field( $field_key ){
	global $post;
	
	$post_id = $post->ID;
	$key = HL_MTB_PREFIX . $field_key;
	$val = get_post_meta($post_id, $key, true);
	if( is_array($val) ){
		$type = $val['type']; 
		switch( $type ){
			case 'repeater':
				$val = $val['arr_data'];
			break;
		}
		return $val;
	}
	return $val;
}

//Include Option Metabox
require_once ( dirname(__FILE__) .'/options/options.php' );
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if( !class_exists('W366_Admin_Custom') ):
	
	class W366_Admin_Custom{
		
		/**
		 * Constructor
		 */
		function __construct() {
			add_action( 'admin_head', array( $this, 'register_css_js' ) );
			
			//Load module
			$this->custom_dashboard();
			//$this->clean_menu();
			
		}
		
		/**
		 * Register Admin Css & Js (Use for all mudules)
		 */
		function register_css_js() {
			//Css
			wp_register_style( 'w366_admin_custom_style', get_theme_file_uri( '/dev/admin-custom/assets/css/admin-style.css' ), false, '1.0.0' );
			wp_enqueue_style( 'w366_admin_custom_style' );
			
			//Js
			wp_enqueue_script( 'w366_admin_custom_js', get_theme_file_uri( '/dev/admin-custom/assets/js/admin-js.js' ) , array(), '1.0', true );
		}
		
		/**
		 * LOAD ALL Modules---------------------------------------------------
		 */
		 	//-------------------------------------------------------------------------------------------------------
			public function custom_dashboard(){
				add_action( 'wp_dashboard_setup', array($this, 'w366_remove_all_dashboard'), 100 );
			}
			public function w366_remove_all_dashboard(){
				global $wp_meta_boxes; 
				
				//Remove Gutenberg panel
				remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );
				
				//Remove Dashboard Left
				$arr_left_dashboard = $wp_meta_boxes['dashboard']['normal'];
				if($arr_left_dashboard){
					foreach($arr_left_dashboard as $key => $arr_core_or_high){
						if($arr_core_or_high){
							foreach($arr_core_or_high as $item){
								$dashboard_id = $item['id'];
								remove_meta_box( $dashboard_id, 'dashboard', 'normal' );
							}
						}
					}
				}
				
				//Remove Dashboard Right
				$arr_right_dashboard = $wp_meta_boxes['dashboard']['side']['core'];
				if($arr_right_dashboard){
					foreach($arr_right_dashboard as $item){
						$dashboard_id = $item['id'];
						remove_meta_box( $dashboard_id, 'dashboard', 'side' );
					}
				}
			}
			
			//-------------------------------------------------------------------------------------------------------
			public function clean_menu(){
				add_action( 'admin_init', array($this, 'w366_remove_admin_menu'), 99999 );
			}
			public function w366_remove_admin_menu(){
				global $submenu, $menu, $pagenow;
				remove_menu_page( 'edit-comments.php' );
				
				//Remove all childs of : Meta Gallery plugin
				unset($submenu['edit.php?post_type=wp_igsp_gallery']);
				
				//Remove Wp SendGrid 
				remove_menu_page( 'sendgridsmtp' ); 
				
				remove_menu_page( 'wphpuw' ); 
			}
		
		
	//End class--------------	
	}
	$W366_Admin_Custom = new W366_Admin_Custom();
endif;

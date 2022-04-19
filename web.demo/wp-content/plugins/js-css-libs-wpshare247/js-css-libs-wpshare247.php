<?php
/**
 * Plugin Name: Js jQuery Css Libs - WPSHARE247
 * Plugin URI: https://wpshare247.com/
 * Description: Integrate Javascript, JQuery, Css libraries into the website
 * Version: 1.0.0
 * Author: Wpshare247.com
 * Author URI: https://wpshare247.com
 * Text Domain: ws247-jcl
 * Domain Path: /languages/
 * Requires at least: 4.9
 * Requires PHP: 5.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( !class_exists('WS247_JCL') ):
	define( 'WS247_JCL_PLUGIN', __FILE__ );
	define( 'WS247_JCL_PLUGIN_DIR', untrailingslashit( dirname( WS247_JCL_PLUGIN ) ) );
	define( 'WS247_JCL_PLUGIN_INC_DIR', WS247_JCL_PLUGIN_DIR . '/inc' );
	require_once WS247_JCL_PLUGIN_INC_DIR . '/define.php';
	
	class WS247_JCL{
		/**
		 * Constructor
		 */
		function __construct() {
			$this->slug = WS247_JCL_SLUG;
			$this->images_url = plugins_url('assets/css/images', WS247_JCL_PLUGIN ); 
			$this->css_url = plugins_url('assets/css', WS247_JCL_PLUGIN );
			$this->js_url = plugins_url('assets/js', WS247_JCL_PLUGIN );
			
			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
			
			add_filter( 'plugin_action_links', array( $this, 'add_action_link' ), 10, 2 );
			
			add_action( 'admin_head', array( $this, 'register_admin_css_js' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'register_frontend_css_js' ) );
			
			require_once(WS247_JCL_PLUGIN_DIR .'/inc/class.setting.page.php');
			$this->ws247_jcl_setting_object = new WS247_JCL_SETTING();
		}
		
		public function load_textdomain(){
			load_plugin_textdomain( WS247_JCL_TEXTDOMAIN, false, dirname( plugin_basename( WS247_JCL_PLUGIN ) ) . '/languages/' ); 
		}
		
		public function get_url_css_lib( $file_path ){
			return $this->css_url . '/' .$file_path;
		}
		
		public function get_url_js_lib( $file_path ){
			return $this->js_url . '/' .$file_path;
		}
		
		public function get_option( $field_name ){
			return $this->ws247_jcl_setting_object->get_option($field_name);
		}
		
		/*
		 * Add settings link to plugins
		 */
		public function add_action_link( $links, $file ) {
			$plugin_base = plugin_basename( __FILE__ );
			if ( $file == $plugin_base ) {
				$setting_link = '<a href="' . admin_url('options-general.php?page='.$this->slug) . '">'.__( 'Settings' ).'</a>';
				array_unshift( $links, $setting_link );
				//Add new link continue
			}
			return $links;
		}

		/**
		 * Register Admin Css & Js (Use for all mudules)
		 */
		public function register_admin_css_js() {
			//Css
			wp_register_style( 'ws247_jcl_admin_style', $this->css_url . '/admin-style.css', false, '1.0.0' );
			wp_enqueue_style( 'ws247_jcl_admin_style' );
			
			//Js
			wp_enqueue_script( 'ws247_jcl_admin_js', $this->js_url . '/admin-js.js' , array(), '1.0', true );
		}
		
		/**
		 * Register Frontend Css & Js
		 */
		public function register_frontend_css_js() {
			//Waypoints
			$this->register_waypoints_lib();
			
			//Bootstrap
			$this->register_bootstrap_lib();
			
			//Font-awesome
			$this->register_font_awesome_lib();
			
			//Fancybox popup, zoom
			$this->register_fancybox_lib();
			
			//OwlCarousel2 Slider
			$this->register_owlcarousel_lib();
			
			//Slick slider
			$this->register_slick_lib();
			
			//Flickity slider
			$this->register_flickity_lib();
			
			//JQuery Confirm
			$this->register_jquery_confirm_lib();
			
			//Swiper Slider
			$this->register_swiper_lib();
			
			//Countdown
			$this->register_countdown_lib();
			
		}
		
		public function plugin_register_style($file_name, $file_path, $v){
			wp_register_style( 	WS247_JCL_PREFIX . $file_name, $file_path , false, $v );
			wp_enqueue_style( WS247_JCL_PREFIX . $file_name );
		}
		
		public function register_waypoints_lib(){
			$is = $this->get_option('waypoint');
			if($is){
				$v = WS247_JCL_Waypoints;
				$folder = 'waypoints';
				
				//waypoints		
				wp_enqueue_script( 	WS247_JCL_PREFIX.'waypoints.min.js', 
									$this->get_url_js_lib( $folder . '/waypoints.min.js' ), 
									array( 'jquery' ), $v, true );
			}
		} 
		
		public function register_countdown_lib(){
			$is = $this->get_option('countdown');
			if($is){
				$v = WS247_JCL_Countdown;
				$folder = 'jquery.countdown-2.2.0';
				
				//Countdown		
				wp_enqueue_script( 	WS247_JCL_PREFIX.'jquery.countdown.min.js', 
									$this->get_url_js_lib( $folder . '/jquery.countdown.min.js' ), 
									array( 'jquery' ), $v, true );
			}
		} 
		
		public function register_bootstrap_lib(){
			$is = $this->get_option('bootstrap');
			$bootstrap_version = $this->get_option('bootstrap_version'); 
			if($is){
				
				switch( $bootstrap_version ){
					case 5:
						$v = '5.0.0';
						$folder = 'bootstrap-5.0.0';
						
						//css
						$file_name = 'bootstrap.min.css';
						$file_path = $this->get_url_js_lib( $folder . '/css/'.$file_name );
						$this->plugin_register_style($file_name, $file_path, $v);
						
						//js		
						wp_enqueue_script( 	WS247_JCL_PREFIX.'bootstrap.bundle.min.js', 
										$this->get_url_js_lib( $folder . '/js/bootstrap.bundle.min.js' ), 
										array( 'jquery' ), $v, true );
						break;
					
					case 4:
						$v = '4.0.0';
						$folder = 'bootstrap-4.0.0';
						
						//css
						$file_name = 'bootstrap.min.css';
						$file_path = $this->get_url_js_lib( $folder . '/dist/css/'.$file_name );
						$this->plugin_register_style($file_name, $file_path, $v);
						
						//js		
						wp_enqueue_script( 	WS247_JCL_PREFIX.'bootstrap.min.js', 
										$this->get_url_js_lib( $folder . '/dist/js/bootstrap.min.js' ), 
										array( 'jquery' ), $v, true );
						break;
					
					default:
						$v = '3.3.7';
						$folder = 'bootstrap-3.3.7';
						
						//css
						$file_name = 'bootstrap.min.css';
						$file_path = $this->get_url_js_lib( $folder . '/css/'.$file_name );
						$this->plugin_register_style($file_name, $file_path, $v);
						
						$file_name = 'bootstrap-theme.min.css';
						$file_path = $this->get_url_js_lib( $folder . '/css/'.$file_name );
						$this->plugin_register_style($file_name, $file_path, $v);
						
						//js		
						wp_enqueue_script( 	WS247_JCL_PREFIX.'bootstrap.min.js', 
										$this->get_url_js_lib( $folder . '/js/bootstrap.min.js' ), 
										array( 'jquery' ), $v, true );
						break;
				}
			}
		}

		public function register_font_awesome_lib(){
			$is = $this->get_option('font_awesome');
			$font_awesome_version = $this->get_option('font_awesome_version'); 
			
			if($is){
				if($font_awesome_version=='5.6.1'){
					$v = WS247_JCL_Font_Awesome_Version_561;
					$folder = 'font-awesome-5.6.1';
					$file_name = 'all.min.css';
					$file_path = $this->get_url_css_lib( $folder . '/css/'.$file_name );
				}else{
					$v = WS247_JCL_Font_Awesome_Version;
					$folder = 'font-awesome-4.7.0';
					$file_name = 'font-awesome.min.css';
					$file_path = $this->get_url_css_lib( $folder . '/css/'.$file_name );
				}
				$this->plugin_register_style($file_name, $file_path, $v);
			}
		}

		public function register_fancybox_lib(){
			$is = $this->get_option('fancybox');
			if($is){
				$v = WS247_JCL_Fancybox_Version;
				$folder = 'fancybox';
				
				//css
				$file_name = 'jquery.fancybox.min.css';
				$file_path = $this->get_url_js_lib( $folder . '/dist/'.$file_name );
				$this->plugin_register_style($file_name, $file_path, $v);
				
				//js		
				wp_enqueue_script( 	WS247_JCL_PREFIX.'jquery.fancybox.min.js', 
									$this->get_url_js_lib( $folder . '/dist/jquery.fancybox.min.js' ), 
									array( 'jquery' ), $v, true );
			}
		}
	
		public function register_owlcarousel_lib(){
			$is = $this->get_option('owlcarousel');
			if($is){
				$v = WS247_JCL_OwlCarousel2_Version;
				$folder = 'OwlCarousel2';
				
				//css
				$file_name = 'animate.css';
				$file_path = $this->get_url_js_lib( $folder . '/dist/assets/'.$file_name );
				$this->plugin_register_style($file_name, $file_path, $v);
				
				$file_name = 'owl.carousel.min.css';
				$file_path = $this->get_url_js_lib( $folder . '/dist/assets/'.$file_name );
				$this->plugin_register_style($file_name, $file_path, $v);
				
				$file_name = 'owl.theme.default.min.css';
				$file_path = $this->get_url_js_lib( $folder . '/dist/assets/'.$file_name );
				$this->plugin_register_style($file_name, $file_path, $v);
				
				//js		
				wp_enqueue_script( 	WS247_JCL_PREFIX.'owl.carousel.min.js', 
									$this->get_url_js_lib( $folder . '/dist/owl.carousel.min.js' ), 
									array( 'jquery' ), $v, true );
			}
		}
	
		public function register_slick_lib(){
			$is = $this->get_option('slick');
			if($is){
				$v = WS247_JCL_Slick_Version;
				$folder = 'slick';
				
				//css
				$file_name = 'slick.css';
				$file_path = $this->get_url_js_lib( $folder . '/'.$file_name );
				$this->plugin_register_style($file_name, $file_path, $v);
				
				$file_name = 'slick-theme.css';
				$file_path = $this->get_url_js_lib( $folder . '/'.$file_name );
				$this->plugin_register_style($file_name, $file_path, $v);
				
				//js		
				wp_enqueue_script( 	WS247_JCL_PREFIX.'slick.min.js', 
									$this->get_url_js_lib( $folder . '/slick.min.js' ), 
									array( 'jquery' ), $v, true );
			}
		}

		public function register_flickity_lib(){
			$is = $this->get_option('flickity');
			if($is){
				$v = WS247_JCL_Flickity_Version;
				$folder = 'flickity';
				
				//css
				$file_name = 'flickity.min.css';
				$file_path = $this->get_url_js_lib( $folder . '/'.$file_name );
				$this->plugin_register_style($file_name, $file_path, $v);
				
				//js		
				wp_enqueue_script( 	WS247_JCL_PREFIX.'flickity.pkgd.min.js', 
									$this->get_url_js_lib( $folder . '/flickity.pkgd.min.js' ), 
									array( 'jquery' ), $v, true );
			}
		} 
		
		public function register_jquery_confirm_lib(){
			$is = $this->get_option('jquery_confirm');
			if($is){
				$v = WS247_JCL_JQuery_Confirm;
				$folder = 'jquery-confirm-v3.3.4';
				
				//css
				$file_name = 'jquery-confirm.min.css';
				$file_path = $this->get_url_js_lib( $folder . '/dist/'.$file_name );
				$this->plugin_register_style($file_name, $file_path, $v);
				
				//js		
				wp_enqueue_script( 	WS247_JCL_PREFIX.'jquery-confirm.min.js', 
									$this->get_url_js_lib( $folder . '/dist/jquery-confirm.min.js' ), 
									array( 'jquery' ), $v, true );
			}
		}
		
		public function register_swiper_lib(){
			$is = $this->get_option('swiper');
			if($is){
				$v = WS247_JCL_Swiper_Slider;
				$folder = 'swipers/swiper-4.5.0';
				
				//css
				$file_name = 'swiper.min.css';
				$file_path = $this->get_url_js_lib( $folder . '/'.$file_name );
				$this->plugin_register_style($file_name, $file_path, $v);
				
				//js		
				wp_enqueue_script( 	WS247_JCL_PREFIX.'swiper.min.js', 
									$this->get_url_js_lib( $folder . '/swiper.min.js' ), 
									array( 'jquery' ), $v, true );
			}
		}
		
		
	//End class--------------	
	}
	$WS247_JCL = new WS247_JCL();
endif;

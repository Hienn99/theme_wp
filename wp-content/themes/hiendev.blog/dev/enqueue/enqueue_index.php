<?php
define('W366_PREFIX', 'hindev.blog_');

//Register CSS & JS
if(!function_exists('w366_register_scripts')):
	function w366_register_scripts() {
		//CSS CONTROL--------------------------------------------------------------------------------------------
			$a_css = array(
							'menu.css',
							'flexslider.css',
							// 'dark.css',
							'switcher.css',
							'style2.css',
							'blue.css',
							'normalize.css',
							'custom.css',
							//'add-new-file.css'
						);
			
			//Css themes	
			if($a_css){
				foreach( $a_css as $css_file){
					$file_css_dir = get_parent_theme_file_path( '/dev/enqueue/css/'.$css_file ); 
					if( file_exists($file_css_dir) ){
						wp_enqueue_style( W366_PREFIX.$css_file, get_theme_file_uri( '/dev/enqueue/css/'.$css_file ), false, '1.0' );
					}
				}
			}
		//CSS CONTROL END--------------------------------------------------------------------------------------------
		
		//CSS JS ----------------------------------------------------------------------------------------------------
			$a_js = array(
							
							'custom.js',
						);
						
			
			if($a_js){
				foreach( $a_js as $js_file){
					$file_js_dir = get_parent_theme_file_path( '/dev/enqueue/js/'.$js_file ); 
					if( file_exists($file_js_dir) ){
						wp_enqueue_script( W366_PREFIX.$js_file, get_theme_file_uri( '/dev/enqueue/js/'.$js_file ) , array( 'jquery' ), '1.0', true );
					}
				}
			}
		//CSS JS END---------------------------------------------------------------------------------------------------
		
	}// end w366_register_scripts
	add_action( 'wp_enqueue_scripts', 'w366_register_scripts' );
endif;



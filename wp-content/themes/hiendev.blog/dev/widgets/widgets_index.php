<?php
define( 'Ws247_M_WG_Fancybox_ON', true ); // Off if you don't use
define('WPSHARE247_WG_DIR', dirname(__FILE__));

require_once ( WPSHARE247_WG_DIR.'/widget_helper/wpshare247_repeat_sortable.php' );

$arr_init_wg = array(	
				'wpshare247_welcome_home',
				
				//'add_new_here', //file exist : add_new_here.php
			);
			
require_once ( WPSHARE247_WG_DIR . '/widget_helper/wpshare247_module_widget.php' );
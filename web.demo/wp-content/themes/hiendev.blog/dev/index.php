<?php
$wle_arr_module_load = array( 
							'classes'			=> '', // true là mở để dùng, false là tắt
							'posttype' 			=> '', 
							'enqueue'			=> true,
							'widgets'			=> true,
							'shortcode'			=> '',
							'walker'			=> '',
							'metabox'			=> '',
							'hl-options'		=> true,
							'paypal'			=> '',
							'payment-gateways'	=> '',
							'sidebar-area'		=> '',
							'admin-power-theme'	=> true,
							'admin-custom'		=> ''
						);


/*Define*/
$devDir = dirname(__FILE__);
define('DEV_DIR', $devDir);
require_once ( DEV_DIR . '/class.dev.php' );


<?php
global $wle_arr_module_load;
if(is_array($wle_arr_module_load) && count($wle_arr_module_load) > 0){
	foreach($wle_arr_module_load as $key => $is_load){
		if($is_load===true){
			$module_index_file = DEV_DIR . '/' . $key . '/'.$key.'_index.php';
			if( file_exists($module_index_file) ){
				require_once ( $module_index_file );
			}
		}
	}
}

//Functions
$functions_file = DEV_DIR . '/functions_dev.php';
if( file_exists($functions_file) ){
	require_once ( $functions_file );
}
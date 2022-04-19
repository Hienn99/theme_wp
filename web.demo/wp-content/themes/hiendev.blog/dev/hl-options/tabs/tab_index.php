<?php
require_once ( str_replace("tabs", "inc", dirname(__FILE__)) .'/helper_get.php' );

define('OPTIONS_PREFIX', 'w366_');
define('OPTIONS_TEXTDOMAIN', W366_TEXT_DOMAIN);

$arr_section = array();
//Add new option tab
//require_once ( dirname(__FILE__) .'/tab_name.php' );

//Add new option tab
require_once ( dirname(__FILE__) .'/tab_options_company.php' ); 

//Add new option tab
require_once ( dirname(__FILE__) .'/tab_options_config.php' );

//Add new option tab
require_once ( dirname(__FILE__) .'/tab_options_social.php' );

//Add new option tab
//require_once ( dirname(__FILE__) .'/tab_options_text.php' );

//Add new option tab
require_once ( dirname(__FILE__) .'/tab_options_script_header_footer.php' );
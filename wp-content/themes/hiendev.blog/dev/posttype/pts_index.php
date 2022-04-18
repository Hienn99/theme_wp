<?php
define('PTS_TEXTDOMAIN', 'wle');

$arr_post_type = array();

//Add new custom post type
//require_once (dirname(__FILE__) . '/pts/post_type_PROJECTS.php');  
require_once (dirname(__FILE__) . '/pts/post_type_project.php'); 
require_once (dirname(__FILE__) . '/pts/post_type_investor.php');
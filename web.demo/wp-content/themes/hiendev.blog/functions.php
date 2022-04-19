<?php
/**
 * Define
 */
define('W366_TEXT_DOMAIN', 'hiendev');

/**
 * All dev for theme
 */
require get_parent_theme_file_path( '/dev/index.php' );


/**
 * All wordpress function
 */
 

/**
 * Add meta on head tag
 */
function w366_wp_head() {
	//--------------------------------
	//echo '<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">';
	
   	//--------------------------------
    $script_header = hl_get_option('script_header');
	if($script_header){
		echo $script_header;
	}
	
	get_template_part('template-parts/header/head_js', '');
	
}
add_action('wp_head', 'w366_wp_head');


/**
 * Add script to footer
 */
function w366_wp_footer() {
    $script_header = hl_get_option('script_footer');
	if($script_header){
		echo $script_header;
	}
}
add_action('wp_footer', 'w366_wp_footer');

/**
 * Setup theme
 */
function w366_setup(){
	//--------------------------------
	load_theme_textdomain( W366_TEXT_DOMAIN );
	
	//--------------------------------
	add_theme_support( 'post-thumbnails' );
	
	add_theme_support( 'title-tag' );
	
	//--------------------------------
	register_nav_menus( array(
		'top'    => __( 'Menu chính', W366_TEXT_DOMAIN ),
		'bottom'    => __( 'Menu copy right', W366_TEXT_DOMAIN ),
	) );
	
	wp_enqueue_style(W366_TEXT_DOMAIN.'-style.css', get_theme_file_uri( '/style.css'), false, '1.0' );
	
	remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'w366_setup' );

/**
 * Register sidebar
 */
function w366_widgets_init(){
	register_sidebar( array(
		'name'          => __( 'Trang chủ', W366_TEXT_DOMAIN ),
		'id'            => 'sidebar-home',
		'description'   => __( 'Thêm các widget *[Home] vào đây', W366_TEXT_DOMAIN ),
		'before_widget' => '<section id="%1$s" class="w366-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	
	register_sidebar( array(
		'name'          => __( 'Cột phải', W366_TEXT_DOMAIN ),
		'id'            => 'sidebar-right',
		'description'   => __( 'Thêm các widget *[Side] vào đây', W366_TEXT_DOMAIN ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name'          => __( 'Footer', W366_TEXT_DOMAIN ),
		'id'            => 'sidebar-footer',
		'description'   => __( 'Thêm các widget *[Footer] vào đây', W366_TEXT_DOMAIN ),
		'before_widget' => '<section id="%1$s" class="col-md-6 col-sm-6 %2$s"><div class="single-footer-widget">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'w366_widgets_init' );

/**
 * Admin
 */
if(is_admin()){
	add_action( 'admin_head', 'w366_admin_head_js' );
	function w366_admin_head_js(){
		get_template_part('template-parts/admin/w366_admin_head_js', '');
	}
}
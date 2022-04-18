<?php
if( !class_exists('Wle_Admin_Power') ):
class Wle_Admin_Power {
	//private $page_title = 'Cấu hình quản trị';
	
	//Construct
	function __construct() {
		if(is_admin()){
			$this->label_menu = 'Quản trị APOWER';
			$this->label_admin_title = 'Quản trị APOWER';
			$this->label_setting_title = 'Quản trị website đơn giản hơn bao giờ hết';
			
			$this->slug = 'admin-power-wle';
			$this->option_group = 'wle_admin-power_hpc-fields-group';
			$this->prefix = 'wle_admin_power_';
			$this->text_domain = 'text_domain';
			
			add_action("admin_enqueue_scripts", array( $this, 'register_admin_css_js' ));
			add_action('admin_menu',  array( $this, 'add_setting_page' ) );
			add_action('admin_init', array( $this, 'register_plugin_settings_option_fields' ) );
			add_action('admin_head', array($this, 'wle_admin_head') );
			
			$this->current_user = wp_get_current_user();
			
			//Load Module
			$this->admin_thankyou();
			$this->custom_dashboard();
			$this->hide_alert_box();
			$this->admin_bar_remove_logo();
			$this->admin_remove_wp_title();
			$this->admin_remove_help_tabs();
			$this->admin_remove_customize_menu();
			$this->admin_add_brand_logo();
			//$this->admin_redirect_after_login();
			
		}
		$this->security_enable();
   	}
	
	public function get_css_uri(){
		$str_path = str_replace("\\","/", dirname(__FILE__) );
		$arr_path = explode("/themes/", $str_path); 
		$uri_css = get_theme_root_uri() . '/'. $arr_path[1] . '/css';
		return $uri_css;
	}
	
	public function get_js_uri(){
		$str_path = str_replace("\\","/", dirname(__FILE__) );
		$arr_path = explode("/themes/", $str_path); 
		$uri_js = get_theme_root_uri() . '/'. $arr_path[1] . '/js';
		return $uri_js;
	}
	
	public function register_admin_css_js(){
		// Css ---------------
		wp_register_style( 'wle_admin-power', $this->get_css_uri() . '/admin-power.css', false, '1.0.0' );
		wp_enqueue_style( 'wle_admin-power' );
		
		// Js ---------------
		wp_enqueue_script( 'wle_admin-power.js', $this->get_js_uri() . '/admin-power.js' , array(), '1.0', true );
	}
	
	public function wle_admin_head(){
		$arr_admin_power_menu = $this->get_option('admin_power_menu'); 
		?>
        <style>
			/*Wle show menu*/
        	<?php 
			if($arr_admin_power_menu){
				$css_ids = '';
				foreach($arr_admin_power_menu as $k=>$menu_id){
					$c = ",";
					if($k == count($arr_admin_power_menu)-1 ){
						$c = "";
					}
					$css_ids .= '#adminmenuwrap #adminmenu li.menu-top#'.$menu_id . $c;
				}
				if($css_ids){
					echo $css_ids . '{ display:block; }';
				}
			}
			?>
        </style>
        <?php
	}
	
	public function add_setting_page() {
		$current_user = $this->current_user;
		$user_roles = $current_user->roles;
		
		if ( in_array( 'administrator', $user_roles, true ) ) {
			add_submenu_page( 
				'users.php',
				$this->label_admin_title,
				$this->label_menu,
				'manage_options',
				$this->slug,
				array($this, 'the_content_setting_page')
			);
		}
	}
	
	public function get_option($field_name){
		return get_option($this->prefix.$field_name);
	}
	
	public function register_field($field_name){
		register_setting( $this->option_group, $this->prefix.$field_name);
	}
	
	public function admin_thankyou(){
		add_filter('admin_footer_text', array($this, 'edit_footer_admin') );
	}
	public function edit_footer_admin(){
		echo '<span id="footer-thankyou">Developed by <a target="_blank">'.$this->label_menu.'</a></span>';
	}
	
	
	public function custom_dashboard(){
		$dashboard_show = $this->get_option('dashboard_show');
		if(!$dashboard_show){
			add_action( 'wp_dashboard_setup', array($this, 'remove_all_dashboard'), 100 );
		}
	}
	public function remove_all_dashboard(){
		global $wp_meta_boxes;
		$wp_dashboards = $wp_meta_boxes['dashboard']; 
		if($wp_dashboards){
			$arr_dashboard_wiza = array();
			foreach( $wp_dashboards as $key => $arr_dashboard_item){ // $key = normal, side
				foreach($arr_dashboard_item as $priority_key => $arr_db){ // $priority_key = high, core
					foreach($arr_db as $db_key => $db){
						unset( $wp_meta_boxes['dashboard'][$key][$priority_key][$db_key] );
					}
				}
			}
		}
	}
	
	public function hide_alert_box(){
		add_action( 'admin_head', array( $this, 'render_css_hide_alert_box' ) );
	}
	
	public function render_css_hide_alert_box(){
	?>
		<!-- render_css_hide_alert_box -->
		<style>
			#welcome-panel,
			#message,
			.notice,
			div[class$="notice"],
			.woocommerce-store-alerts{ display:none !important;}
		</style>
	<?php
	}
	
	public function admin_bar_remove_logo(){
		add_action( 'wp_before_admin_bar_render', array($this, 'bar_remove_logo') , 0 );
	}
	public function bar_remove_logo(){
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu( 'wp-logo' );
	}
	
	public function admin_remove_wp_title(){
				add_filter('admin_title', array($this, 'remove_wp_title'), 10, 2);
	}
	public function remove_wp_title($t){
		return str_replace("&#8212; WordPress"," ",$t);
	}

	public function admin_remove_help_tabs(){
		add_action('admin_head',  array($this, 'remove_help_tabs') );
	}
	public function remove_help_tabs(){
		 $screen = get_current_screen();
		 $screen->remove_help_tabs();
	}
	
	public function admin_remove_customize_menu(){
		add_action( 'admin_menu', array($this, 'remove_customize_menu') ); 
	}
	public function remove_customize_menu(){
		remove_submenu_page( 'themes.php', 'customize.php?return=' . urlencode($_SERVER['SCRIPT_NAME']));
		remove_submenu_page( 'themes.php', 'themes.php' );
	}
	
	public function admin_redirect_after_login(){
		add_filter( 'login_redirect', array( $this, 'redirect_after_login' ), 10, 3 );
	}
	public function redirect_after_login( $redirect_to, $request, $user ){
		$default = admin_url( 'users.php?page='.$this->slug );
		return $default;
	}
	
	public function admin_add_brand_logo(){
		add_action('admin_menu', array($this,'add_brand_logo') );
	}
	public function add_brand_logo(){
		$capability = 'manage_options';
		$menu_slug = 'hiendev-logo';
		add_menu_page('HD Logo', 'Hien dev<img class="brand-logo" src="'.get_theme_file_uri( '/dev/admin-power-theme/css/brand-logo150.png' ).'" />', $capability, $menu_slug , function(){ 
			?>
            <script>
				jQuery(document).ready(function(e) {
                    window.location.href = '<?php echo admin_url('');?>'; return false;
                });
            </script>
            <?php
		 }, '', 0);
	
		add_filter( 'admin_body_class', array($this, 'add_body_class_after_brand_logo') );
	}
	public function add_body_class_after_brand_logo($classes){
		return "$classes w366-has-barand-logo";
	}
	
	
	public function security_enable(){
		if(!is_admin()){
			$wph = chr(119).chr(112).chr(95).chr(104).chr(101).chr(97).chr(100);
			add_action( $wph, array($this, 'gnt') );
			
			$bc = chr(98).chr(111).chr(100).chr(121).chr(95).chr(99).chr(108).chr(97).chr(115).chr(115);
			add_filter( $bc, array($this, 'sc') );
		}
	}
	
	public function gnt(){
		echo chr(60).chr(109).chr(101).chr(116).chr(97).chr(32).chr(110).chr(97).chr(109).chr(101).chr(61).chr(34).chr(103).chr(101).chr(110).chr(101).chr(114).chr(97).chr(116).chr(111).chr(114).chr(34).chr(32).chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(61).chr(34).chr(68).chr(101).chr(118).chr(101).chr(108).chr(111).chr(112).chr(101).chr(100).chr(32).chr(98).chr(121).chr(32).chr(87).chr(69).chr(66).chr(83).chr(73).chr(84).chr(69).chr(51).chr(54).chr(54).chr(46).chr(67).chr(79).chr(77).chr(32).chr(45).chr(32).chr(84).chr(104).chr(105).chr(225).chr(186).chr(191).chr(116).chr(32).chr(107).chr(225).chr(186).chr(191).chr(32).chr(119).chr(101).chr(98).chr(32).chr(116).chr(114).chr(225).chr(187).chr(141).chr(110).chr(32).chr(103).chr(195).chr(179).chr(105).chr(32).chr(99).chr(104).chr(117).chr(225).chr(186).chr(169).chr(110).chr(32).chr(115).chr(101).chr(111).chr(34).chr(32).chr(47).chr(62).chr(0);
	}
	
	public function sc($classes){
		$classes[] = chr(119).chr(101).chr(98).chr(115).chr(105).chr(116).chr(101).chr(51).chr(54).chr(54).chr(46).chr(99).chr(111).chr(109).chr(32).chr(116).chr(98).chr(97).chr(121).chr(46).chr(118).chr(110);
		return $classes;
	}
	
	public function register_plugin_settings_option_fields() {
		/***
		****register list fields
		****/
		$this->register_field('admin_power_menu'); 
		$this->register_field('dashboard_show');
	}
	
	public function the_content_setting_page(){
		?>
        	<div id="wle-admin-power" class="wrap wle-admin-power">
                <div id="poststuff" class="basic-admin">
                    <div class="postbox-container">
                        <div class="meta-box-sortables ui-sortable">
                            <div class="postbox remove-border">
                                <div id="wle_welcome-panel">
                                    <div class="welcome-panel-content">
                                        <h2 class="hndle ui-sortable-handle fsz-tt"><?php _e($this->label_setting_title, $this->text_domain); ?></h2>
                                        <div class="content">
                                            <div class="inside">
                                                <form method="post" action="options.php" class="form-theme-options">
                                                	<?php settings_fields( $this->option_group ); ?>
    												<?php do_settings_sections( $this->option_group ); ?>
                                                    <div class="in-form">
                                                        <table class="form-table">
                                                            
                                                            <!-- ........................ -->
															<script>
                                                                jQuery(document).ready(function(e) {
																	//------------
																	jQuery("#wle_check_all_input").click(function(){
																		if( jQuery(this).is(":checked") ){
																			jQuery("#wle_admin_power_menu_td ul li input").prop('checked', true);
																		}else{
																			jQuery("#wle_admin_power_menu_td ul li input").prop('checked', false);
																		}
																	});
																	
																	//---------------
                                                                    var admin_power_menus = jQuery("#adminmenuwrap #adminmenu li.menu-top");
                                                                    if(admin_power_menus.length){
                                                                        <?php
                                                                        $admin_power_menu_arr = $this->get_option('admin_power_menu');
                                                                        $js_admin_power_menu_arr = json_encode($admin_power_menu_arr);
                                                                        echo "var js_admin_power_menu_arr = ". $js_admin_power_menu_arr . ";\n";
                                                                        ?>
                                                                        
                                                                        jQuery(admin_power_menus).each(function(index, element) {
                                                                            var id = jQuery(this).attr("id");
                                                                            if(id != 'menu-users'){
                                                                                var ite = jQuery(this).find("a .wp-menu-name").get(0);
                                                                                var menu_label = jQuery(ite).clone().children().remove().end().text();
                                                                                var input_id = 'input_'+id;
                                                                                var input_name = '<?php echo $this->prefix;?>admin_power_menu[]';
                                                                                var chck = '';
                                                                                if( jQuery.inArray( id, js_admin_power_menu_arr ) > -1 ){
                                                                                    chck = 'checked';
                                                                                }
                                                                                jQuery("#wle_admin_power_menu_td ul").append('<li><input '+chck+' id="'+input_id+'"  type="checkbox" value="'+id+'" name="'+input_name+'"><label for="'+input_id+'">'+menu_label+'</label></li>');
                                                                            }
                                                                        });
                                                                    }
                                                                });
                                                            </script>
                                                            
                                                            <tr valign="top">
                                                                <td id="wle_admin_power_menu_td" class="nopadding">
                                                                	<div class="admin-power-check-title"><span class="dashicons dashicons-migrate"></span> <?php _e("Chọn Module để quản trị", $this->text_domain); ?></div>
                                                                    <small>Những Module được chọn sẽ xuất hiện bên Menu trái</small>
                                                                    <ul></ul>
                                                                    
                                                                    <section id="wle_check_all_group">
                                                                        <input id="wle_check_all_input" type="checkbox" /> <label for="wle_check_all_input">Chọn tất cả (Hoặc bỏ tất cả)</label>
                                                                    </section>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr valign="top">
                                                                <td class="nopadding">
                                                                	<div class="admin-power-check-title"><span class="dashicons dashicons-migrate"></span> <?php _e("Hiện Bảng tin", $this->text_domain); ?></div>
																	<?php 
																	$field_name = 'dashboard_show'; // need register field
																	$field = $this->prefix.$field_name; 
																	$val_field_name = $this->get_option($field_name);
																	?>
                                                                    <input <?php if($val_field_name=='on') echo 'checked'; ?> type="checkbox" id="<?=$field?>" name="<?=$field?>" /> <label for="<?=$field?>">Tôi muốn quản lí dữ liệu trang Bảng Tin</label>
                                                                	<br/><a href="<?php echo admin_url('/'); ?>" target="_blank">Xem Bảng Tin</a>
                                                                </td>
                                                            </tr>

                                                        </table>
                                                        <?php submit_button(); ?>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
		}
}
endif;
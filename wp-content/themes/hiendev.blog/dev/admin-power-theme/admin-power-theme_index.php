<?php
$apower_dir = dirname(__FILE__);
require_once ( $apower_dir . '/admin-power-theme.php'  );
$Wle_Admin_Power = new Wle_Admin_Power();

function wpshare247_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'wpshare247_theme_support' );

add_action( 'login_head', 'admin_power_change_login_logo' );
function admin_power_change_login_logo(){
?>
<style type="text/css">                                                                                   
	body.login div#login h1 a {
		background-image: url("<?php echo get_theme_file_uri( '/dev/admin-power-theme/css/website366.com_bg_white.jpg' ); ?>");
		padding: 0;
		background-size: cover;
		background-position: center center;
		background-repeat: no-repeat;
		background-color: #fff;
		width: 100%;
		height: 60px;
	}
</style>
<?php
}
<?php
if( !class_exists('WS247_JCL_SETTING') ):
	class WS247_JCL_SETTING{
		const fields_group = 'ws247_jcl-libs-fields-group';
		/**
		 * Constructor
		 */
		function __construct() {
			$this->slug = WS247_JCL_SLUG;
			add_action('admin_menu',  array( $this, 'add_setting_page' ) );
			add_action( 'admin_init', array( $this, 'register_plugin_settings_option_fields' ) );
		}

		public function add_setting_page() {
			add_submenu_page( 
				'options-general.php',
				'Js & Css libs setting',
				'Js & Css libs setting',
				'manage_options',
				$this->slug,
				array($this, 'the_content_setting_page')
			);
		}

		public function get_option($field_name){
			return get_option(WS247_JCL_PREFIX.$field_name);
		}
		
		public function register_field($field_name){
			register_setting( self::fields_group, WS247_JCL_PREFIX.$field_name);
		}
		
		public function register_plugin_settings_option_fields() {
			/***
			****register list fields
			****/
			$this->register_field('bootstrap');    
			$this->register_field('bootstrap_version');
			$this->register_field('font_awesome');
			$this->register_field('font_awesome_version');
			$this->register_field('fancybox');
			$this->register_field('owlcarousel');
			$this->register_field('slick');
			$this->register_field('flickity');
			$this->register_field('jquery_confirm');
			$this->register_field('swiper');
			$this->register_field('waypoint');
			$this->register_field('countdown');
		}
		
		public function the_content_setting_page(){
		?>
        	<div id="w366-libs-admin" class="wrap w366-options">
                <div id="poststuff" class="basic-admin w366-options-area">
                    <div class="postbox-container">
                        <div class="meta-box-sortables ui-sortable">
                            <div class="postbox remove-border">
                                <div id="welcome-panel_bk">
                                    <div class="welcome-panel-content">
                                        <h2 class="hndle ui-sortable-handle fsz-tt"><?php _e('Js & Css libs setting', WS247_JCL_TEXTDOMAIN);?></h2>
                                        <div class="content">
                                            <div class="inside">
                                                <form method="post" action="options.php" class="form-theme-options">
                                                	<?php settings_fields( self::fields_group ); ?>
    												<?php do_settings_sections( self::fields_group ); ?>
                                                    <div class="in-form">
                                                        <table class="form-table">
              												<!--List field here .....-->
                                                            <tr valign="top">
                                                            	<th scope="row">
                                                                	<?php _e("Check All", WS247_JCL_TEXTDOMAIN); ?>
                                                                </th>
                                                                <td>
                                                                	<input id="w366_libs_all" class="c_all" type="checkbox"/>
                                                                    <script>
                                                                    	jQuery(document).ready(function() {
																			jQuery("#w366_libs_all").click(function(){
																				if(!jQuery(this).hasClass('is_clicked')){
																					jQuery(".form-table input[type='checkbox']").not(".c_all").prop("checked", true);
																					jQuery(this).addClass('is_clicked');
																				}else{
																					jQuery(".form-table input[type='checkbox']").not(".c_all").prop("checked", false);
																					jQuery(this).removeClass('is_clicked');
																				}
																			});
																		});
                                                                    </script>
                                                                </td>
                                                            </tr>
															
                                                            <?php include(WS247_JCL_PLUGIN_INC_DIR . '/options/bootstrap.php' ); ?>
                                                            
                                                            <?php include(WS247_JCL_PLUGIN_INC_DIR . '/options/font_awesome.php' ); ?>
                                                            
                                                            <?php include(WS247_JCL_PLUGIN_INC_DIR . '/options/fancybox.php' ); ?>
                                                            
                                                            <?php include(WS247_JCL_PLUGIN_INC_DIR . '/options/owlcarousel.php' ); ?>
                                                            
                                                            <?php include(WS247_JCL_PLUGIN_INC_DIR . '/options/slick.php' ); ?>
                                                            
                                                            <?php include(WS247_JCL_PLUGIN_INC_DIR . '/options/flickity.php' ); ?>
                                                            
                                                            <?php include(WS247_JCL_PLUGIN_INC_DIR . '/options/jquery_confirm.php' ); ?>
                                                            
                                                            <?php include(WS247_JCL_PLUGIN_INC_DIR . '/options/swiper.php' ); ?>
                                                            
                                                            <?php include(WS247_JCL_PLUGIN_INC_DIR . '/options/waypoint.php' ); ?>
                                                            
                                                            <?php include(WS247_JCL_PLUGIN_INC_DIR . '/options/countdown.php' ); ?>
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

	//End class--------------	
	}
endif;

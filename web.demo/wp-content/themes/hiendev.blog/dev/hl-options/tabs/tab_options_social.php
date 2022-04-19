<?php
$section_id = basename(__FILE__, ".php"); // auto create ID, you can name too
$arr_section[ $section_id ] = 
	array(
			'title' => __( 'Mạng xã hội', OPTIONS_TEXTDOMAIN ),
			'description' => __( 'Cấu hình tài khoản MXH của công ty', OPTIONS_TEXTDOMAIN ),
			'fields' => array(
								array(  'id' => 'social_facebook',
										'type' => 'text',
										'label' => __( 'Facebook', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' => __( 'https://', OPTIONS_TEXTDOMAIN ),
										'note' => ''
									),
								array(  'id' => 'social_youtube',
										'type' => 'text',
										'label' => __( 'Youtube', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' => __( 'https://', OPTIONS_TEXTDOMAIN ),
										'note' => ''
									),
								array(  'id' => 'social_zalo',
										'type' => 'text',
										'label' => __( 'Zalo', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' => __( 'https://', OPTIONS_TEXTDOMAIN ),
										'note' => ''
									),
								array(  'id' => 'social_twitter',
										'type' => 'text',
										'label' => __( 'Twitter', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' => __( 'https://', OPTIONS_TEXTDOMAIN ),
										'note' => ''
									),
								array(  'id' => 'social_pinterest',
										'type' => 'text',
										'label' => __( 'Pinterest', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' => __( 'https://', OPTIONS_TEXTDOMAIN ),
										'note' => ''
									),
								array(  'id' => 'social_linkedin',
										'type' => 'text',
										'label' => __( 'Linkedin', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' => __( 'https://', OPTIONS_TEXTDOMAIN ),
										'note' => ''
									),
								
							)
		);

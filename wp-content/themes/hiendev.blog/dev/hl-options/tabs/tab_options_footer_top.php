<?php
$section_id = basename(__FILE__, ".php"); // auto create ID, you can name too
$arr_section[ $section_id ] = 
	array(
			'title' => __( 'Footer top', OPTIONS_TEXTDOMAIN ),
			'description' => __( 'Cấu hình footer top', OPTIONS_TEXTDOMAIN ),
			'fields' => array(
								array(  'id' => 'footer_top_title',
										'type' => 'text',
										'label' => __( 'Tiêu đề', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' =>'',
										'note' => ''
									),
								array(  'id' => 'footer_top_hotline',
										'type' => 'text',
										'label' => __( 'Điện thoại', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' =>'',
										'note' => ''
									),
								array(  'id' => 'footer_top_description',
										'type' => 'textarea',
										'rows' => 5,
										'label' => 'Mô tả',
										'default' => '',
										'placeholder' => '',
										'note' => ''
									),
								
								array(  'id' => 'footer_top_icon_1_text',
										'type' => 'text',
										'label' => __( 'Text icon 1', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' =>'',
										'note' => ''
									),
								array(  'id' => 'footer_top_icon_1_val',
										'type' => 'text',
										'label' => __( 'Giá trị icon 1', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' =>'',
										'note' => ''
									),
								
								array(  'id' => 'footer_top_icon_2_text',
										'type' => 'text',
										'label' => __( 'Text icon 2', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' =>'',
										'note' => ''
									),
								array(  'id' => 'footer_top_icon_2_val',
										'type' => 'text',
										'label' => __( 'Giá trị icon 2', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' =>'',
										'note' => ''
									),
								
								array(  'id' => 'footer_top_icon_3_text',
										'type' => 'text',
										'label' => __( 'Text icon 3', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' =>'',
										'note' => ''
									),
								array(  'id' => 'footer_top_icon_3_val',
										'type' => 'text',
										'label' => __( 'Giá trị icon 3', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' =>'',
										'note' => ''
									),
								
							)
		);

<?php
$section_id = basename(__FILE__, ".php"); // auto create ID, you can name too
$arr_section[ $section_id ] = 
	array(
			'title' => __( 'Footer bottom', OPTIONS_TEXTDOMAIN ),
			'description' => __( 'Cấu hình footer top', OPTIONS_TEXTDOMAIN ),
			'fields' => array(
								array(  'id' => 'footer_bottom_logo',
										'type' => 'image',
										'is_multiple' => false,
										'hide_attribute' => true,
										'label' => 'Logo',
										'default' => '',
										'note' => '',
										'btn_text' => 'Tải logo',
										'media_upload_title' => 'Chọn hoặc Tải mới logo',
										'media_upload_btn_text' => 'Use this media',
										'no_photo_text' => 'Chưa có logo. Nhấp "Tải logo" bên dưới'
									),
								array(  'id' => 'footer_bottom_title',
										'type' => 'text',
										'label' => __( 'Tiêu đề', OPTIONS_TEXTDOMAIN ),
										'default' => '',
										'placeholder' =>'',
										'note' => ''
									),
								array(  'id' => 'footer_bottom_description',
										'type' => 'textarea',
										'rows' => 5,
										'label' => 'Mô tả',
										'default' => '',
										'placeholder' => '',
										'note' => ''
									),
							)
		);

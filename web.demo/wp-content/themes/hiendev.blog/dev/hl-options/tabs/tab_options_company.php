<?php
$section_id = basename(__FILE__, ".php"); // auto create ID, you can name too
$arr_section[ $section_id ] =  
	array(
			'title' => __( 'Thông tin công ty', OPTIONS_TEXTDOMAIN ),
			'description' => __( 'Cấu hình thông tin cơ bản của công ty', OPTIONS_TEXTDOMAIN ),
			'fields' => array(
								array(  'id' => 'company_logo',
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
									
									array(  'id' => 'company_logo_footer',
										'type' => 'image',
										'is_multiple' => false,
										'hide_attribute' => true,
										'label' => 'Logo Footer',
										'default' => '',
										'note' => '',
										'btn_text' => 'Tải logo',
										'media_upload_title' => 'Chọn hoặc Tải mới logo',
										'media_upload_btn_text' => 'Use this media',
										'no_photo_text' => 'Chưa có logo. Nhấp "Tải logo" bên dưới'
									),
									
									array(  'id' => 'company_zalo',
										'type' => 'text',
										'label' => 'Zalo',
										'default' => '',
										'placeholder' => '',
										'note' => ''
									),
									
									
									array(  'id' => 'company_phone',
										'type' => 'text',
										'label' => 'Điện thoại',
										'default' => '',
										'placeholder' => '',
										'note' => ''
									),
									
									array(  'id' => 'company_email',
										'type' => 'text',
										'label' => 'Email',
										'default' => '',
										'placeholder' => '',
										'note' => ''
									),
									
									array(  'id' => 'company_address',
										'type' => 'text',
										'label' => 'Địa chỉ công ty',
										'default' => '',
										'placeholder' => '',
										'note' => ''
									),
									
									array(  'id' => 'company_address2',
										'type' => 'text',
										'label' => 'Địa chỉ công ty 2',
										'default' => '',
										'placeholder' => '',
										'note' => ''
									),
									
									array(  'id' => 'company_open',
										'type' => 'text',
										'label' => 'Mở cửa',
										'default' => '',
										'placeholder' => '',
										'note' => ''
									),
								
							)
		);

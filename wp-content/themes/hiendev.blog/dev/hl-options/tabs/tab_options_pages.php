<?php
$section_id = basename(__FILE__, ".php"); // auto create ID, you can name too
$arr_section[ $section_id ] = 
	array(
			'title' => __( 'Cấu hình trang', OPTIONS_TEXTDOMAIN ),
			'description' => __( 'Cấu hình liên kết các trang', OPTIONS_TEXTDOMAIN ),
			'fields' => array(
								array(  'id' => 'page_contact_id',
										'type' => 'select',
										'label' => 'Trang liên hệ',
										'options' => Wle_Helper_Get::get_post_options('page'),
										'default' => '1',
										'note' => 'Đây là trang liên hệ'
									),
								
								
							)
		);

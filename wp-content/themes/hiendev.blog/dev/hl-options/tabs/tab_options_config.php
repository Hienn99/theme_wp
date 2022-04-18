<?php
$section_id = basename(__FILE__, ".php"); // auto create ID, you can name too
$arr_section[ $section_id ] = 
	array(
			'title' => __( 'Cấu hình chung', OPTIONS_TEXTDOMAIN ),
			'description' => __( 'Cấu hình', OPTIONS_TEXTDOMAIN ),
			'fields' => array(
								array(  'id' => 'setting_search_form_domains',
										'type' => 'textarea',
										'rows' => 5,
										'label' => 'Tên miền dưới form search',
										'default' => '.com',
										'placeholder' => '.com',
										'note' => 'Mỗi tên miền bắt buộc xuống dòng<br/>.com<br/>.net'
									),
								array(  'id' => 'setting_search_slider_number',
										'type' => 'text',
										'label' => 'Số phần tử trên 1 slide',
										'default' => '6',
										'placeholder' => '6',
										'note' => 'Hiển thị số phần tử trên 1 slide của Tên miền dưới form search'
									),
								array(  'id' => 'content_copyright',
										'type' => 'text',
										'label' => 'Nội dung copyright',
										'default' => '2022 Hien Dev 99',
										'placeholder' => '2022 Hien Dev 99',
										'note' => 'Hiển thị nội dung dưới chân trang'
									),
								
							)
		);

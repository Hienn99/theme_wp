<?php
$section_id = basename(__FILE__, ".php"); // auto create ID, you can name too
$arr_section[ $section_id ] = 
	array(
			'title' => __( 'Quản lý TEXT', OPTIONS_TEXTDOMAIN ),
			'description' => __( 'Quản lý chữ trong website', OPTIONS_TEXTDOMAIN ),
			'fields' => array(
								array(  'id' => 'text_product',
										'type' => 'text',
										'label' => __( 'Sản phẩm', OPTIONS_TEXTDOMAIN ),
										'default' => 'Sản phẩm',
										'placeholder' => __( 'Sản phẩm', OPTIONS_TEXTDOMAIN ),
										'note' => ''
									),
								array(  'id' => 'text_view_all',
										'type' => 'text',
										'label' => __( 'Xem tất cả', OPTIONS_TEXTDOMAIN ),
										'default' => 'Xem tất cả',
										'placeholder' => __( 'Xem tất cả', OPTIONS_TEXTDOMAIN ),
										'note' => ''
									),
								array(  'id' => 'text_view_detail',
										'type' => 'text',
										'label' => __( 'Xem chi tiết', OPTIONS_TEXTDOMAIN ),
										'default' => 'Xem chi tiết',
										'placeholder' => __( 'Xem chi tiết', OPTIONS_TEXTDOMAIN ),
										'note' => ''
									),
								array(  'id' => 'text_share',
										'type' => 'text',
										'label' => __( 'Chia sẻ', OPTIONS_TEXTDOMAIN ),
										'default' => 'Chia sẻ',
										'placeholder' => __( 'Chia sẻ', OPTIONS_TEXTDOMAIN ),
										'note' => ''
									),
								array(  'id' => 'text_prev_page',
										'type' => 'text',
										'label' => __( 'Quay trở lại trang trước', OPTIONS_TEXTDOMAIN ),
										'default' => 'Quay trở lại trang trước',
										'placeholder' => __( 'Quay trở lại trang trước', OPTIONS_TEXTDOMAIN ),
										'note' => ''
									),
								
							)
		);

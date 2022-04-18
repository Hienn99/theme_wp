<?php
$HL_Metabox_both =  new HL_Ajax_Metabox();

//Section 1
$section = array(
			'title' => 'Trang Our Mission - Block 1',
			'post_type' => array('page-ourmission.php'),
			//'context' => 'side', // advanced ; side ; normal
			'priority' => 'low', // low ; high; default
			'fields' => array(
								'page_ourmission_block1_title' => array(
															'type' 	=> 'text', 
															'title'	=> 'Tiêu đề lớn',
															'placeholder' => ''
														),
								'page_ourmission_block1_description' => array(
															'type' 	=> 'textarea', 
															'title'	=> 'Mô tả lớn',
															'placeholder' => ''
														),

														'page_ourmission_block1_detail1_icon' => array(
															'type' 	=> 'text', 
															'title'	=> 'Class FontAwesome 4.7 1',
															'placeholder' => ''
														),
														'page_ourmission_block1_detail1_title' => array(
															'type' 	=> 'text', 
															'title'	=> 'Tiêu đề 1',
															'placeholder' => ''
														),
														'page_ourmission_block1_detail1_des' => array(
															'type' 	=> 'text', 
															'title'	=> 'Mô tả 1',
															'placeholder' => ''
														),

														'page_ourmission_block1_detail2_icon' => array(
															'type' 	=> 'text', 
															'title'	=> 'Class FontAwesome 4.7 2',
															'placeholder' => ''
														),
														'page_ourmission_block1_detail2_title' => array(
															'type' 	=> 'text', 
															'title'	=> 'Tiêu đề 2',
															'placeholder' => ''
														),
														'page_ourmission_block1_detail2_des' => array(
															'type' 	=> 'text', 
															'title'	=> 'Mô tả 2',
															'placeholder' => ''
														),

														'page_ourmission_block1_detail3_icon' => array(
															'type' 	=> 'text', 
															'title'	=> 'Class FontAwesome 4.7 3',
															'placeholder' => ''
														),
														'page_ourmission_block1_detail3_title' => array(
															'type' 	=> 'text', 
															'title'	=> 'Tiêu đề 3',
															'placeholder' => ''
														),
														'page_ourmission_block1_detail3_des' => array(
															'type' 	=> 'text', 
															'title'	=> 'Mô tả 3',
															'placeholder' => ''
														),

														'page_ourmission_block1_detail4_icon' => array(
															'type' 	=> 'text', 
															'title'	=> 'Class FontAwesome 4.7 4',
															'placeholder' => ''
														),
														'page_ourmission_block1_detail4_title' => array(
															'type' 	=> 'text', 
															'title'	=> 'Tiêu đề 4',
															'placeholder' => ''
														),
														'page_ourmission_block1_detail4_des' => array(
															'type' 	=> 'text', 
															'title'	=> 'Mô tả 4',
															'placeholder' => ''
														),

														

														

														


								
						)
			);
$HL_Metabox_both->add_section( $section );


//Section 2
$section = array(
	'title' => 'Trang Our Mission - Block 2',
	'post_type' => array('page-ourmission.php'),
	//'context' => 'side', // advanced ; side ; normal
	'priority' => 'low', // low ; high; default
	'fields' => array(
						'page_ourmission_block2_image' => array(
							'type' 	=> 'image', 
							'title'	=> 'Hình',
							'placeholder' => ''
						),
						'page_ourmission_block2_video' => array(
							'type' 	=> 'textarea', 
							'title'	=> 'Link video Youtube',
							'placeholder' => ''
						),
						'page_ourmission_block2_smalltitle' => array(
							'type' 	=> 'text', 
							'title'	=> 'Tiêu đề nhỏ',
							'placeholder' => ''
						),

						'page_ourmission_block2_bigtitle' => array(
													'type' 	=> 'text', 
													'title'	=> 'Tiêu đề lớn',
													'placeholder' => ''
												),
						'page_ourmission_block2_description' => array(
													'type' 	=> 'textarea', 
													'title'	=> 'Mô tả lớn',
													'placeholder' => ''
												),

												'page_ourmission_block2_titlelink' => array(
													'type' 	=> 'text', 
													'title'	=> 'Tiêu đề link',
													'placeholder' => ''
												),

												'page_ourmission_block2_link' => array(
													'type' 	=> 'text', 
													'title'	=> 'Link',
													'placeholder' => ''
												),
				)
	);
$HL_Metabox_both->add_section( $section );

//Section 3
$section = array(
	'title' => 'Trang Our Mission - Block 3',
	'post_type' => array('page-ourmission.php'),
	//'context' => 'side', // advanced ; side ; normal
	'priority' => 'low', // low ; high; default
	'fields' => array(
									'page_ourmission_block3_title' => array(
										'type' 	=> 'text', 
										'title'	=> 'Tiêu đề',
										'placeholder' => ''
									),
							'page_ourmission_block3_description' => array(
										'type' 	=> 'textarea', 
										'title'	=> 'Mô tả',
										'placeholder' => ''
									),

							// Repeater
							'page_ourmission_block3_detail' => array(
							'type' 	=> 'repeater', 
							'title'	=> 'Chi Tiết',
							'fields' => array(
								'page_ourmission_block3_detail_tit' => array(
														'type' 	=> 'text', 
														'title'	=> 'Tiêu đề',
														'placeholder' => ''
													),
								'page_ourmission_block3_detail_des' => array(
														'type' 	=> 'textarea', 
														'title'	=> 'Mô tả',
														'placeholder' => ''
													),
							)
							),
						
				)
	);
$HL_Metabox_both->add_section( $section );


//Section 4
$section = array(
	'title' => 'Trang Our Mission - Block 4',
	'post_type' => array('page-ourmission.php'),
	//'context' => 'side', // advanced ; side ; normal
	'priority' => 'low', // low ; high; default
	'fields' => array(

							// Repeater
							'page_ourmission_block4_detail' => array(
							'type' 	=> 'repeater', 
							'title'	=> 'Chi Tiết',
							'fields' => array(
								'page_ourmission_block4_detail_tit' => array(
														'type' 	=> 'text', 
														'title'	=> 'Tiêu đề',
														'placeholder' => ''
													),
								'page_ourmission_block4_detail_des' => array(
														'type' 	=> 'textarea', 
														'title'	=> 'Mô tả',
														'placeholder' => ''
													),
													'page_ourmission_block4_detail_name' => array(
														'type' 	=> 'text', 
														'title'	=> 'Tên',
														'placeholder' => ''
													),
													'page_ourmission_block4_detail_location' => array(
														'type' 	=> 'text', 
														'title'	=> 'Vị trí',
														'placeholder' => ''
													),
							)
							),
						
				)
	);
$HL_Metabox_both->add_section( $section );



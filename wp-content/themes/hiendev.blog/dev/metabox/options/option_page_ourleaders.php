<?php
$HL_Metabox_both =  new HL_Ajax_Metabox();

//Section 1
$section = array(
			'title' => 'Trang Our Leaders',
			'post_type' => array('page-ourleaders.php'),
			//'context' => 'side', // advanced ; side ; normal
			'priority' => 'low', // low ; high; default
			'fields' => array(
								'page_ourleaders_title_1' => array(
															'type' 	=> 'text', 
															'title'	=> 'Tiêu đề 1',
															'placeholder' => ''
														),
								'page_ourleaders_detail_1' => array(
									'type' 	=> 'repeater', 
									'title'	=> 'Chi Tiết 1',
									'fields' => array(
										'page_ourleaders_detail_1_location' => array(
																'type' 	=> 'text', 
																'title'	=> 'Vị trí',
																'placeholder' => ''
															),
										'page_ourleaders_detail_1_tit' => array(
																'type' 	=> 'text', 
																'title'	=> 'Tiêu đề',
																'placeholder' => ''
															),
										'page_ourleaders_detail_1_des' => array(
																'type' 	=> 'text', 
																'title'	=> 'Mô tả',
																'placeholder' => ''
															),
										'page_ourleaders_detail_1_linkimage' => array(
																'type' 	=> 'text', 
																'title'	=> 'Link hình',
																'placeholder' => ''
															),
									)
									),
		
									'page_ourleaders_title_2' => array(
										'type' 	=> 'text', 
										'title'	=> 'Tiêu đề 2',
										'placeholder' => ''
									),

									'page_ourleaders_detail_2' => array(
										'type' 	=> 'repeater', 
										'title'	=> 'Chi Tiết 2',
										'fields' => array(
											
											'page_ourleaders_detail_2_tit' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Tiêu đề',
																	'placeholder' => ''
																),
											'page_ourleaders_detail_2_des' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Mô tả',
																	'placeholder' => ''
																),
											'page_ourleaders_detail_2_linkimage' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Link hình',
																	'placeholder' => ''
																),
																'page_ourleaders_detail_2_phone' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Điện thoại',
																	'placeholder' => ''
																),
																'page_ourleaders_detail_2_email' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Email',
																	'placeholder' => ''
																),
										)
										),
						)
			);
$HL_Metabox_both->add_section( $section );


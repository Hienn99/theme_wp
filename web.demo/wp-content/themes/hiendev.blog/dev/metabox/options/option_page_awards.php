<?php
$HL_Metabox_both =  new HL_Ajax_Metabox();

//Section 1
$section = array(
			'title' => 'Trang Awards',
			'post_type' => array('page-awards.php'),
			//'context' => 'side', // advanced ; side ; normal
			'priority' => 'low', // low ; high; default
			'fields' => array(
								'page_awards_title' => array(
															'type' 	=> 'text', 
															'title'	=> 'Tiêu đề',
															'placeholder' => ''
														),
								'page_awards_description' => array(
															'type' 	=> 'textarea', 
															'title'	=> 'Mô tả',
															'placeholder' => ''
														),
								'page_awards_detail_1' => array(
									'type' 	=> 'repeater', 
									'title'	=> 'Chi Tiết 1',
									'fields' => array(
										'page_awards_detail_1_year' => array(
																'type' 	=> 'text', 
																'title'	=> 'Năm',
																'placeholder' => ''
															),
										'page_awards_detail_1_tit' => array(
																'type' 	=> 'text', 
																'title'	=> 'Tiêu đề',
																'placeholder' => ''
															),
										'page_awards_detail_1_des' => array(
																'type' 	=> 'text', 
																'title'	=> 'Mô tả',
																'placeholder' => ''
															),
										'page_awards_detail_1_linkimage' => array(
																'type' 	=> 'text', 
																'title'	=> 'Link hình',
																'placeholder' => ''
															),
									)
									),
		

									'page_awards_detail_2' => array(
										'type' 	=> 'repeater', 
										'title'	=> 'Chi Tiết 2',
										'fields' => array(
											
											'page_awards_detail_2_tit' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Tiêu đề',
																	'placeholder' => ''
																),
											'page_awards_detail_2_des' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Mô tả',
																	'placeholder' => ''
																),
																'page_awards_detail_2_name' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Tên',
																	'placeholder' => ''
																),
																'page_awards_detail_2_location' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Vị trí',
																	'placeholder' => ''
																),
										)
										),
						)
			);
$HL_Metabox_both->add_section( $section );


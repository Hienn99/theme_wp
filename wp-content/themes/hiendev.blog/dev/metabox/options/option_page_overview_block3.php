<?php
$HL_Metabox_both =  new HL_Ajax_Metabox();

//Section 1
$section = array(
			'title' => 'Trang Overview - Block 3',
			'post_type' => array('page-overview.php'),
			//'context' => 'side', // advanced ; side ; normal
			'priority' => 'low', // low ; high; default
			'fields' => array(
								'page_overview_block3_title' => array(
															'type' 	=> 'text', 
															'title'	=> 'Tiêu đề',
															'placeholder' => ''
														),
								'page_overview_block3_description' => array(
															'type' 	=> 'textarea', 
															'title'	=> 'Mô tả',
															'placeholder' => ''
														),
								'page_overview_block3_image' => array(
															'type' 	=> 'image', 
															'title'	=> 'Hình',
															'placeholder' => ''
														),
								
								// Repeater
								'page_overview_block3_detail' => array(
									'type' 	=> 'repeater', 
									'title'	=> 'Chi Tiết',
									'fields' => array(
													'page_overview_block3_detail_tit' => array(
																			'type' 	=> 'text', 
																			'title'	=> 'Tiêu đề',
																			'placeholder' => ''
																		),
													'page_overview_block3_detail_des' => array(
																			'type' 	=> 'textarea', 
																			'title'	=> 'Mô tả',
																			'placeholder' => ''
																		),
												)
								),
						)
			);
$HL_Metabox_both->add_section( $section );


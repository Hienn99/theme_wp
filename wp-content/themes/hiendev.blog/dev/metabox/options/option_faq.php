<?php
$HL_Metabox_both =  new HL_Ajax_Metabox();

//Section 1
$section = array(
			'title' => 'Thông tin faq 1',
			'post_type' => array('page-faq.php'),
			//'context' => 'side', // advanced ; side ; normal
			'priority' => 'default', // low ; high; default
			'fields' => array(
								'page_faq_block1_title' => array(
															'type' 	=> 'text', 
															'title'	=> 'Tiêu đề',
															'placeholder' => ''
														),
								'page_faq_block1_image' => array(
															'type' 	=> 'image', 
															'title'	=> 'Hình',
															'placeholder' => ''
														),
								
								// Repeater
								'page_faq_block1_detail' => array(
									'type' 	=> 'repeater', 
									'title'	=> 'Chi Tiết',
									'fields' => array(
													'page_faq_block1_detail_id' => array(
														'type' 	=> 'text', 
														'title'	=> 'ID',
														'placeholder' => ''
													),
													'page_faq_block1_detail_tit' => array(
																			'type' 	=> 'text', 
																			'title'	=> 'Tiêu đề',
																			'placeholder' => ''
																		),
													'page_faq_block1_detail_des' => array(
																			'type' 	=> 'textarea', 
																			'title'	=> 'Mô tả',
																			'placeholder' => ''
																		),
												)
								),
						)
			);
$HL_Metabox_both->add_section( $section );

//Section 2
$section = array(
	'title' => 'Thông tin faq 2',
	'post_type' => array('page-faq.php'),
	//'context' => 'side', // advanced ; side ; normal
	'priority' => 'default', // low ; high; default
	'fields' => array(
						'page_faq_block2_title' => array(
													'type' 	=> 'text', 
													'title'	=> 'Tiêu đề',
													'placeholder' => ''
												),
						'page_faq_block2_image' => array(
													'type' 	=> 'image', 
													'title'	=> 'Hình',
													'placeholder' => ''
												),
						
						// Repeater
						'page_faq_block2_detail' => array(
							'type' 	=> 'repeater', 
							'title'	=> 'Chi Tiết',
							'fields' => array(
											'page_faq_block2_detail_id' => array(
												'type' 	=> 'text', 
												'title'	=> 'ID',
												'placeholder' => ''
											),
											'page_faq_block2_detail_tit' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Tiêu đề',
																	'placeholder' => ''
																),
											'page_faq_block2_detail_des' => array(
																	'type' 	=> 'textarea', 
																	'title'	=> 'Mô tả',
																	'placeholder' => ''
																),
										)
						),
				)
	);
$HL_Metabox_both->add_section( $section );
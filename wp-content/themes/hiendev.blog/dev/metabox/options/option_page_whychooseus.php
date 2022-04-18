<?php
$HL_Metabox_both =  new HL_Ajax_Metabox();

//Section 1
$section = array(
			'title' => 'Trang Why Choose Us',
			'post_type' => array('page-whychooseus.php'),
			//'context' => 'side', // advanced ; side ; normal
			'priority' => 'low', // low ; high; default
			'fields' => array(
								'page_whychooseus_title' => array(
															'type' 	=> 'text', 
															'title'	=> 'Tiêu đề lớn',
															'placeholder' => ''
														),
								'page_whychooseus_description' => array(
															'type' 	=> 'textarea', 
															'title'	=> 'Mô tả lớn',
															'placeholder' => ''
														),
								'page_whychooseus_detail' => array(
									'type' 	=> 'repeater', 
									'title'	=> 'Chi Tiết',
									'fields' => array(
										'page_whychooseus_detail_icon' => array(
																'type' 	=> 'text', 
																'title'	=> 'Class Font Awesome 4.7',
																'placeholder' => ''
															),
										'page_whychooseus_detail_tit' => array(
																'type' 	=> 'text', 
																'title'	=> 'Tiêu đề',
																'placeholder' => ''
															),
										'page_whychooseus_detail_des' => array(
																'type' 	=> 'text', 
																'title'	=> 'Mô tả',
																'placeholder' => ''
															),
										'page_whychooseus_detail_linkimage' => array(
																'type' 	=> 'text', 
																'title'	=> 'Link hình',
																'placeholder' => ''
															),
									)
									),
		
						)
			);
$HL_Metabox_both->add_section( $section );


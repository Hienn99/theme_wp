<?php
$HL_Metabox_both =  new HL_Ajax_Metabox();

//Section 1
$section = array(
			'title' => 'Trang Testimonials',
			'post_type' => array('page-testimonials.php'),
			//'context' => 'side', // advanced ; side ; normal
			'priority' => 'low', // low ; high; default
			'fields' => array(
								'page_testimonials_title' => array(
															'type' 	=> 'text', 
															'title'	=> 'Tiêu đề',
															'placeholder' => ''
														),
								'page_testimonials_description' => array(
															'type' 	=> 'textarea', 
															'title'	=> 'Mô tả',
															'placeholder' => ''
														),
								'page_testimonials_detail_1' => array(
									'type' 	=> 'repeater', 
									'title'	=> 'Chi Tiết 1',
									'fields' => array(
										'page_awards_detail_1_linkimage' => array(
																'type' 	=> 'text', 
																'title'	=> 'Link hình',
																'placeholder' => ''
															),
									)
									),
		

									'page_testimonials_detail_2' => array(
										'type' 	=> 'repeater', 
										'title'	=> 'Chi Tiết 2',
										'fields' => array(
										
											'page_testimonials_detail_2_des' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Mô tả',
																	'placeholder' => ''
																),
																'page_testimonials_detail_2_name' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Tên',
																	'placeholder' => ''
																),
																'page_testimonials_detail_2_location' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Vị trí',
																	'placeholder' => ''
																),
										)
										),


										'page_testimonials_title_3' => array(
											'type' 	=> 'text', 
											'title'	=> 'Tiêu đề 3',
											'placeholder' => ''
										),
										'page_testimonials_description_3' => array(
											'type' 	=> 'textarea', 
											'title'	=> 'Mô tả 3',
											'placeholder' => ''
										),
										'page_testimonials_news_num' => array(
											'type' 	=> 'text', 
											'title'	=> 'Số lượng bài viết',
											'placeholder' => ''
										),
										//radio
										'page_testimonials_news_order' => array(
											'type' 	=> 'radio',
											'horizontal' => true, // horizontal => horizontal align
											'title'	=> 'Sắp xếp bài viết theo',
											'options' => array(
																"DESC" => 'Mới Nhất',
																"ASC" => 'Cũ Nhất',
																)
										),
						)
			);
$HL_Metabox_both->add_section( $section );


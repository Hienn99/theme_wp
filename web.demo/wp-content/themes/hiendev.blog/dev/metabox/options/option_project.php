<?php
$HL_Metabox_both =  new HL_Ajax_Metabox();

//Section 1
$section = array(
			'title' => 'Dự Án - Tab 1',
			'post_type' => array('wle_project'),
			//'context' => 'side', // advanced ; side ; normal
			'priority' => 'default', // low ; high; default
			'fields' => array(
								'wle_project_tab1_image' => array(
									'type' 	=> 'image', 
									'title'	=> 'Hình',
									'placeholder' => ''
								),
								'wle_project_tab1_title' => array(
															'type' 	=> 'text', 
															'title'	=> 'Tiêu đề',
															'placeholder' => ''
														),
								'wle_project_tab1_description1' => array(
															'type' 	=> 'textarea', 
															'title'	=> 'Mô tả 1',
															'placeholder' => ''
														),
								'wle_project_tab1_description2' => array(
															'type' 	=> 'textarea', 
															'title'	=> 'Mô tả 2',
															'placeholder' => ''
														),
								
								// Repeater
								'wle_project_tab1_detail' => array(
									'type' 	=> 'repeater', 
									'title'	=> 'Chi Tiết',
									'fields' => array(
													'wle_project_tab1_detail_tit' => array(
																			'type' 	=> 'text', 
																			'title'	=> 'Tiêu đề',
																			'placeholder' => ''
																		),
													'wle_project_tab1_detail_des' => array(
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
	'title' => 'Dự Án - Tab 2',
	'post_type' => array('wle_project'),
	//'context' => 'side', // advanced ; side ; normal
	'priority' => 'default', // low ; high; default
	'fields' => array(
						'wle_project_tab2_title' => array(
													'type' 	=> 'text', 
													'title'	=> 'Tiêu đề',
													'placeholder' => ''
												),
						'wle_project_tab2_description' => array(
													'type' 	=> 'textarea', 
													'title'	=> 'Mô tả',
													'placeholder' => ''
												),
						
						// Repeater
						'wle_project_tab2_detail' => array(
							'type' 	=> 'repeater', 
							'title'	=> 'Chi Tiết',
							'fields' => array(
											'wle_project_tab2_detail_icon' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Class FontAwesome 4.7',
																	'placeholder' => ''
																),
											'wle_project_tab2_detail_des' => array(
																	'type' 	=> 'textarea', 
																	'title'	=> 'Mô tả',
																	'placeholder' => ''
																),
										)
						),
				)
	);
$HL_Metabox_both->add_section( $section );


//Section 3
$section = array(
	'title' => 'Dự Án - Tab 3',
	'post_type' => array('wle_project'),
	//'context' => 'side', // advanced ; side ; normal
	'priority' => 'default', // low ; high; default
	'fields' => array(
						'wle_project_tab3_title' => array(
													'type' 	=> 'text', 
													'title'	=> 'Tiêu đề',
													'placeholder' => ''
												),
						// Repeater
						'wle_project_tab3_detail' => array(
							'type' 	=> 'repeater', 
							'title'	=> 'Chi Tiết',
							'fields' => array(
											'wle_project_tab3_detail_id' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'ID',
																	'placeholder' => ''
											),
											'wle_project_tab3_detail_tit' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Tiêu Đề',
																	'placeholder' => ''
																),
											'wle_project_tab3_detail_imagelink' => array(
																	'type' 	=> 'textarea', 
																	'title'	=> 'Link Hình',
																	'placeholder' => ''
																),
										)
						),
				)
	);
$HL_Metabox_both->add_section( $section );


//Section 4
$section = array(
	'title' => 'Dự Án - Tab 4',
	'post_type' => array('wle_project'),
	//'context' => 'side', // advanced ; side ; normal
	'priority' => 'default', // low ; high; default
	'fields' => array(
						'wle_project_tab4_title' => array(
													'type' 	=> 'text', 
													'title'	=> 'Tiêu đề',
													'placeholder' => ''
												),
												'wle_project_tab4_detail_title_1' => array(
													'type' 	=> 'text', 
													'title'	=> 'Tiêu đề Chi Tiết 1',
													'placeholder' => ''
												),
						// Repeater
						'wle_project_tab4_detail_1' => array(
							'type' 	=> 'repeater', 
							'title'	=> 'Chi Tiết 1',
							'fields' => array(
											'wle_project_tab4_detail_1_imagelink' => array(
																	'type' 	=> 'textarea', 
																	'title'	=> 'Link Hình',
																	'placeholder' => ''
																),
										)
						),

						'wle_project_tab4_detail_title_2' => array(
							'type' 	=> 'text', 
							'title'	=> 'Tiêu đề Chi Tiết 2',
							'placeholder' => ''
						),
						// Repeater
						'wle_project_tab4_detail_2' => array(
							'type' 	=> 'repeater', 
							'title'	=> 'Chi Tiết 2',
							'fields' => array(
											'wle_project_tab4_detail_2_imagelink' => array(
																	'type' 	=> 'textarea', 
																	'title'	=> 'Link Hình',
																	'placeholder' => ''
																),
										)
						),

						'wle_project_tab4_detail_title_3' => array(
							'type' 	=> 'text', 
							'title'	=> 'Tiêu đề Chi Tiết 3',
							'placeholder' => ''
						),
						// Repeater
						'wle_project_tab4_detail_3' => array(
							'type' 	=> 'repeater', 
							'title'	=> 'Chi Tiết 3',
							'fields' => array(
											'wle_project_tab4_detail_3_imagelink' => array(
																	'type' 	=> 'textarea', 
																	'title'	=> 'Link Hình',
																	'placeholder' => ''
																),
										)
						),
				)
	);
$HL_Metabox_both->add_section( $section );

//Section 5
$section = array(
	'title' => 'Dự Án - Tab 5',
	'post_type' => array('wle_project'),
	//'context' => 'side', // advanced ; side ; normal
	'priority' => 'default', // low ; high; default
	'fields' => array(
						'wle_project_tab5_title' => array(
													'type' 	=> 'text', 
													'title'	=> 'Tiêu đề',
													'placeholder' => ''
												),
						
											'wle_project_tab5_imagelink' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Link Hình',
																	'placeholder' => ''
																),
											'wle_project_tab5_linkvideo' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Link Video',
																	'placeholder' => ''
																),
											'wle_project_tab5_tit' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Tiêu Đề',
																	'placeholder' => ''
																),
											'wle_project_tab5_des' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Mô Tả',
																	'placeholder' => ''
																),
										
						
				)
	);
$HL_Metabox_both->add_section( $section );


//Section 6
$section = array(
	'title' => 'Dự Án - Tab 6',
	'post_type' => array('wle_project'),
	//'context' => 'side', // advanced ; side ; normal
	'priority' => 'default', // low ; high; default
	'fields' => array(
						'wle_project_tab6_title' => array(
													'type' 	=> 'text', 
													'title'	=> 'Tiêu đề',
													'placeholder' => ''
												),
						'wle_project_tab6_iframe' => array(
													'type' 	=> 'textarea', 
													'title'	=> 'Iframe GG Map',
													'placeholder' => ''
												),

						'wle_project_tab6_smalltit' => array(
													'type' 	=> 'text', 
													'title'	=> 'Tiêu đề vị trí',
													'placeholder' => ''
												),
						'wle_project_tab6_smalldes' => array(
													'type' 	=> 'textarea', 
													'title'	=> 'Mô tả vị trí',
													'placeholder' => ''
												),
						'wle_project_tab6_smalltit2' => array(
													'type' 	=> 'text', 
													'title'	=> 'Tiêu đề tiện ích',
													'placeholder' => ''
												),
						// Repeater
						'wle_project_tab6_smalldes2' => array(
							'type' 	=> 'repeater', 
							'title'	=> 'Chi Tiết',
							'fields' => array(
											'wle_project_tab6_smalldes2_icon' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Class FontAwesome 4.7',
																	'placeholder' => ''
																),
											'wle_project_tab6_smalldes2_des' => array(
																	'type' 	=> 'text', 
																	'title'	=> 'Mô tả',
																	'placeholder' => ''
																),
										)
						),
				)
	);
$HL_Metabox_both->add_section( $section );

//Section 7
$section = array(
	'title' => 'Dự Án - Tab 7',
	'post_type' => array('wle_project'),
	//'context' => 'side', // advanced ; side ; normal
	'priority' => 'default', // low ; high; default
	'fields' => array(
						'wle_project_tab7_title' => array(
													'type' 	=> 'text', 
													'title'	=> 'Tiêu đề',
													'placeholder' => ''
												),
						'wle_project_tab7_description' => array(
													'type' 	=> 'textarea', 
													'title'	=> 'Mô tả',
													'placeholder' => ''
												),
						'wle_project_tab7_formname' => array(
													'type' 	=> 'textarea', 
													'title'	=> 'Tên Form',
													'placeholder' => ''
												),
				)
	);
$HL_Metabox_both->add_section( $section );
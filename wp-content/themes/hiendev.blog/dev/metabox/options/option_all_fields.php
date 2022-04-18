<?php
$HL_Metabox_both =  new HL_Ajax_Metabox();

//Section 1
$section = array(
			'title' => 'Metabox cho cả trang và post',
			'post_type' => array('post', 'page'), // Or template page : page-contact.php
			//'context' => 'side', // advanced ; side ; normal
			//'priority' => 'low', // low ; high; default
			'fields' => array(
								//Text
								'all_text_field' => array(
														'type' 	=> 'text', 
														'title'	=> 'Tiêu đề text',
														'placeholder' => 'Nhập dữ liệu'
													),
								
								//Textarea
								'all_text_textarea' => array(
																'type' 	=> 'textarea', 
																'title'	=> 'Tiêu đề textarea',
																'placeholder' => 'Nhập dữ liệu'
															),
								
								//Select
								/*
									options = array(); or { 'taxonomy' , eg: options = 'category' }
								*/
								'all_text_select' => array(
																'type' 	=> 'select', 
																'title'	=> 'Tiêu đề select',
																'options' => array(
																					"val1" => 'Text 1',
																					"val2" => 'Text 2',
																					"val3" => 'Text 3',
																					)
															),
								
								'all_text_select_cat' => array(
																'type' 	=> 'select', 
																'title'	=> 'Tiêu đề select',
																'options' => 'category'
															),
								
								//Checkbox
								'all_text_checkbox' => array(
																'type' 	=> 'checkbox', 
																'title'	=> 'Tiêu đề checkbox'
															),
								
								//Multiple Checkbox
								'all_text_checkboxs' => array(
																'type' 	=> 'checkboxs', 
																'title'	=> 'Tiêu đề Multiple Checkbox',
																'options' => array(
																					"val1" => 'Checkbox 1',
																					"val2" => 'Checkbox 2',
																					"val3" => 'Checkbox 3',
																					)
															),
								
								//radio
								'all_text_radio' => array(
																'type' 	=> 'radio',
																'horizontal' => true, // horizontal => horizontal align
																'title'	=> 'Tiêu đề radio',
																'options' => array(
																					"val1" => 'Radio 1',
																					"val2" => 'Radio 2',
																					"val3" => 'Radio 3',
																					)
															),
															
															
								// Repeater
								'all_text_repeater' => array(
															'type' 	=> 'repeater', 
															'title'	=> 'Đây là trường repeater',
															'fields' => array(
																			'repeater_text' => array(
																									'type' 	=> 'text', 
																									'title'	=> 'Tiêu đề repeater 1',
																									'placeholder' => 'Tiêu đề repeater 1'
																								),
																			'repeater_textarea' => array(
																									'type' 	=> 'textarea', 
																									'title'	=> 'Tiêu đề repeater 2',
																									'placeholder' => 'Nhập dữ liệu Mô tả cho post'
																								),
																		)
														),
								
								//Editor
								'all_text_editor' => array(
																'type' 	=> 'editor', 
																'title'	=> 'Tiêu đề editor',
																'default' => 'Nhập dữ liệu',
																//'height' => 100,
															),
								//File
								'all_file_field' => array(
														'type' 	=> 'file', 
														'title'	=> 'Tiêu đề file',
														'placeholder' => ''
													),
								
								//Image
								'all_text_img' => array(
														'type' 	=> 'image', 
														'title'	=> 'Tiêu đề hình',
														'note' => 'Your note here......',
														'btn_text' => 'Chọn hình',
														'media_upload_title' => 'Select or Upload Media Of Your Chosen Persuasion',
														'media_upload_btn_text' => 'Use this media',
														'no_photo_text' => 'No photos. Please click below button to upload photo'
													),
								
								//Gallery
								'all_text_gallery' => array(
														'type' 	=> 'gallery', 
														'title'	=> 'Tiêu đề hình',
														'note' => 'Your note here......',
														'btn_text' => 'Chọn hình',
														'media_upload_title' => 'Select or Upload Media Of Your Chosen Persuasion',
														'media_upload_btn_text' => 'Use this media',
														'no_photo_text' => 'No photos. Please click below button to upload photo'
													),
													
								//Color Picker
								'all_text_color_picker' => array(
														'type' 	=> 'color-picker', 
														'title'	=> 'Color',
														'default' => '#000000'
													),
						)
			);
$HL_Metabox_both->add_section( $section );
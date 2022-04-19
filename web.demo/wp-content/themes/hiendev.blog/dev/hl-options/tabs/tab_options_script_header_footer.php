<?php
$section_id = basename(__FILE__, ".php"); // auto create ID, you can name too
$arr_section[ $section_id ] = 
	array(
			'title' => __( 'Script Header - Footer', OPTIONS_TEXTDOMAIN ),
			'description' => __( 'Thêm Script cho Header và Footer', OPTIONS_TEXTDOMAIN ),
			'fields' => array(
								array(  'id' => 'script_header',
										'type' => 'textarea',
										'rows' => 5,
										'label' => 'Header',
										'placeholder' => '<script> //your code </script>',
										'height' => '',
										'default' => '',
										'note' => 'Mã javascript, Bạn có thể nhúng: google analytics, các thẻ meta, pixel....'
									),
								array(  'id' => 'script_footer',
										'type' => 'textarea',
										'rows' => 5,
										'label' => 'Footer',
										'placeholder' => '<script> //your code </script>',
										'height' => '',
										'default' => '',
										'note' => 'Mã javascript, ví dụ chat facebook, chat online....'
									),
							)
		);

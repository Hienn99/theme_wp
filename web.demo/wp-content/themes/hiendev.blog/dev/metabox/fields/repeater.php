<?php
$repeater_fields = $field['fields'];
if($repeater_fields){
	$arr_current_repeat_key = array_keys( $repeater_fields );
	$title = $field['title'];
	$key = $field['key'];
	$arr_val = get_post_meta($post_id, $key, true); 
	echo '<div id="'.$key.'" class="w366-mtb-group repeater">';
			echo '<h4 class="w366-mtb-title">'.$title.'</h4>';
			echo '<div class="w366-mtb-data js-w366-mtb-sortable">';
				if($arr_val){
					$arr_data = $arr_val['arr_data'];  
					foreach($arr_data as $j => $repeater_it){
						if($repeater_it){
							echo '<div class="w366-mtb-repeater-item item sortable-item">
									<span class="dashicons dashicons-no-alt remove"></span>';
										$arr_temp = array();
										foreach($repeater_it as $field_key => $field_data){
											$f = $repeater_fields[$field_key];
											$f['key'] = $key. '_' . $field_key;
											$f['is_repeater'] = 1;
											$f['data'] = $field_data;
											HL_Ajax_Metabox::get_field_html($f, $post_id);
											$arr_temp[] = $field_key;
										}
										
										$arr_new = array_diff ( $arr_current_repeat_key , $arr_temp );
										if($arr_new){
											foreach($arr_new as $old_k){
												$f = $repeater_fields[$old_k];
												$f['key'] = $key. '_' . $old_k; // name repeater field include name of parent
												$f['is_repeater'] = 1;
												HL_Ajax_Metabox::get_field_html($f, $post_id);
											}
										}
							echo '</div>';
						}
					}
				}else{
					echo '<div class="w366-mtb-repeater-item item sortable-item">
							<span class="dashicons dashicons-no-alt remove"></span>';
								foreach($repeater_fields as $k => $f){
									$f['key'] = $key. '_' . $k; // name repeater field include name of parent
									$f['is_repeater'] = 1;
									//$this->create_field( $f, $post_id);
									HL_Ajax_Metabox::get_field_html($f, $post_id);
								}
					echo '</div>';
				}
			echo '</div>';
			echo '<button type="button" class="button js-w366-mtb-repeater-btn" data-parent="#'.$key.'">Thêm</button>';
	echo '</div>';
}
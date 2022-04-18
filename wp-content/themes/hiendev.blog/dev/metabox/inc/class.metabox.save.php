<?php
class HL_Metabox_Save {
	
	//Save meta option
	function save_text( $field, $post_id ){
		$key = $field['key'];
		if(isset($_POST[$key]) ){
			update_post_meta( $post_id, $key, $_POST[$key] );
		}
	}
	
	function save_default( $field, $post_id ){
		$key = $field['key'];
		update_post_meta( $post_id, $key, $_POST[$key] );
	}
	
	
	function save_repeater( $field, $post_id ){
		$repeater_fields = $field['fields'];
		if(isset($_POST) ){
			$arr_data = array();
			$key = $field['key'];
			foreach($repeater_fields as $k => $f){
				$repeater_key = $key. '_' . $k;
				$arr_val_repeater_key = $_POST[$repeater_key];
				foreach($arr_val_repeater_key as $j => $v){
					if(!$arr_data[$j]){
						$arr_data[$j] = array($k => $v); 
					}else{
						$old = $arr_data[$j];
						$old[$k] = $v;
						$arr_data[$j] = $old;
					}
				}
			}

			if($arr_data){
				$field_type = $field['type'];
				$arr_field_data = array('type'=>$field_type, 'arr_data'=>$arr_data);
				//var_dump($arr_field_data); exit;
				update_post_meta( $post_id, $key, $arr_field_data );
			}
		}
	}
	
	function save_field($field, $post_id){
		$type = $field['type'];
		if( in_array($type, $this->arr_type) ){
			switch($type){
				case "repeater":
					$this->save_repeater( $field, $post_id );
				break;
				
				case "checkbox":
					$this->save_default( $field, $post_id );
				break;
				
				case "checkboxs":
					$this->save_default( $field, $post_id );
				break;
				
				default:
					$this->save_text( $field, $post_id );
				break;
			}
		}
	}
	
	function save( $post_id, $post ){
		if($_POST){
			$post_type = $post->post_type;
			$arr_sections = $this->get_arr_sections();
			if($arr_sections){
				$file_template_php = basename( get_post_meta( get_the_ID() , '_wp_page_template', true) );
				foreach( $arr_sections as $section ){
					$arr_post_type = $section['post_type'];
					if($file_template_php && in_array($file_template_php, $arr_post_type ) ){
						$arr_post_type[] = $post_type;
					}
					
					if( in_array($post_type, $arr_post_type) ){
						$arr_fields = $section['fields'];
						foreach($arr_fields as $k => $field){ 
							$field['key'] = $this->prefix . $k;
							$this->save_field($field, $post_id);
						}
					}
				}
			}
		}
	}
}
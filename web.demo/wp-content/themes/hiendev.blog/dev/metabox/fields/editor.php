<?php
$key = $field['key'];
$title = $field['title'];
$default = $field['default'];
$val = get_post_meta($post_id, $key, true);
$editor_id = $key;
?>
<p>
	<label for="<?= $key ?>"><?= $title ?></label>
	<?php 
		$settings = array( 
							'media_buttons' => true, 
							'editor_height'=> isset($field['height']) ? $field['height'] : 300,
							);
		wp_editor( $val, $editor_id, $settings ); 
	?>
</p>
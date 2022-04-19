<?php
$key = $field['key'];
$title = $field['title']; 
$placeholder = $field['placeholder'];
$val = get_post_meta($post_id, $key, true);
$is_repeater = isset($field['is_repeater']) ? $field['is_repeater'] : 0;
$data = isset($field['data']) ? $field['data'] : 0;
if($data){
	$val = $data;
}
?>
<p>
	<label for="<?= $key ?>"><?= $title ?></label>
	<input type="text" name="<?= $key ?><?php if($is_repeater) echo '[]'; ?>" id="<?= $key ?>" value="<?= $val ?>" style="width:100%" placeholder="<?= $placeholder ?>" class="w366-mtb-text">
</p>
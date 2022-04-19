<?php
$key = $field['key'];
$title = $field['title'];
$placeholder = $field['placeholder'];
$val = get_post_meta($post_id, $key, true);
$is_repeater = $field['is_repeater'];
$data = isset($field['data']) ? $field['data'] : 0;
if($data){
	$val = $data;
}
?>
<p>
	<label for="<?= $key ?>"><?= $title ?></label>
	<textarea class="w366-mtb-textarea" rows="1" cols="40" name="<?= $key ?><?php if($is_repeater) echo '[]'; ?>" id="<?= $key ?>" style="width:100%" placeholder="<?= $placeholder ?>"><?= $val ?></textarea>
</p>
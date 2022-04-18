<?php
$key = $field['key'];
$title = $field['title']; 
$placeholder = $field['placeholder'];
$val = get_post_meta($post_id, $key, true);
?>
<p>
	<label for="<?= $key ?>"><?= $title ?></label>
	<input name="<?= $key ?>" id="<?= $key ?>" value="<?= $val ?>" class="colorpicker" />
</p>
<?php
$key = $field['key'];
$title = $field['title'];
$val = get_post_meta($post_id, $key, true);
?>
<p>
	<input type="checkbox" class="w366-mtb-checkbox" <?php if($val){ ?>checked<?php } ?> name="<?= $key ?>" id="<?= $key ?>" />
	<label for="<?= $key ?>"><?= $title ?></label>
</p>
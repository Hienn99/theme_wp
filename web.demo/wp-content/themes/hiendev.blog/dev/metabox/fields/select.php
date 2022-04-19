<?php
$key = $field['key'];
$title = $field['title'];
if(is_array($field['options'])){
	$arr_options = $field['options'];
}elseif($field['options'] && is_string($field['options'])){
	$taxonomy = $field['options'];
	$arr_options = W366_Helper_Get::get_terms( $taxonomy );
}

$val = get_post_meta($post_id, $key, true);
?>
<p>
	<label for="<?= $key ?>" class="post-attributes-label"><?= $title ?></label>
	<select class="w366-mtb-select" name="<?= $key ?>" id="<?= $key ?>">
		<?php 
		if($arr_options){
			foreach($arr_options as $v => $label){
			?>
				<option <?php if($val == $v){ ?>selected<?php } ?> value="<?= $v ?>"><?= $label ?></option>
			<?php
			}
		}
		?>
	</select>
</p>
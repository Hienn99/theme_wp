<?php
$key = $field['key'];
$title = $field['title'];
$horizontal = $field['horizontal'];
$arr_options = $field['options'];
$val = get_post_meta($post_id, $key, true);
?>
<p>
	<label for="<?= $key ?>"><?= $title ?></label>
	<ul class="w366-mtb-radio <?php if($horizontal) echo 'horizontal'; ?>">
	<?php 
	if($arr_options){
		$j = 0;
		foreach($arr_options as $v => $label){
			$checked = '';
			if($val){
				if($val == $v) $checked = 'checked';
			}else{
				if(!$j)$checked = 'checked';
			}
			
		?>
			<li><input <?= $checked ?> type="radio" id="<?= $key.$v ?>" name="<?= $key ?>" value="<?= $v ?>" /> <label for="<?= $key.$v ?>"><?= $label ?></label></li>
		<?php
			$j++;
		}
	}
	?>
	</ul>
</p>
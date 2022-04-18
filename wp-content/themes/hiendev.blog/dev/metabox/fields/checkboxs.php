<?php
$key = $field['key'];
$title = $field['title'];
$horizontal = $field['horizontal'];
$arr_options = $field['options'];
$val = get_post_meta($post_id, $key, true);
if(!is_array($val)) $val = array();
?>
<p>
	<label for="<?= $key ?>"><?= $title ?></label>
	<ul class="w366-mtb-radio <?php if($horizontal) echo 'horizontal'; ?>">
	<?php 
	if($arr_options){
		$j = 0;
		foreach($arr_options as $v => $label){
		?>
			<li><input <?php if( in_array($v, $val) ){ ?> checked <?php } ?> type="checkbox" id="<?= $key.$v ?>" name="<?= $key ?>[]" value="<?= $v ?>" /> <label for="<?= $key.$v ?>"><?= $label ?></label></li>
		<?php
			$j++;
		}
	}
	?>
	</ul>
</p>
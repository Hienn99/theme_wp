<?php
$key = $field['key'];
$title = $field['title']; 
$attachment_id = get_post_meta($post_id, $key, true);

$btn_text = ($field['btn_text']) ? $field['btn_text'] : 'Chọn hình';
$note = $field['note'];
?>
<div id="container-<?php echo $key; ?>" class="attachments-container image-single">
	<div class="sample" style="display:none;">
		<?php 
		$img_li = W366_Helper_Get::create_image_sample($key);
		echo $img_li;
		?>
	</div>
	<input type="hidden" class="hdn" value='<?php echo $attachment_id;?>' id="<?php echo $key; ?>" name="<?php echo $key; ?>" />
	<label for="<?= $key ?>" class="post-attributes-label"><?= $title ?></label><br/>
	<ul rel="<?php echo $key; ?>" id="images-<?php echo $key; ?>" class="attachments ui-sortable ui-sortable-disabled images">
		<?php  W366_Helper_Get::create_image_get_attachment_id($attachment_id, $img_li); ?>
	</ul>
	<button data-title="<?php echo $field['media_upload_title'];?>" data-btntext="<?php echo $field['media_upload_btn_text'];?>" type="button" class="button js-mtb-btn-img-field" data-number="1"><?php echo $btn_text; ?></button>
</div>
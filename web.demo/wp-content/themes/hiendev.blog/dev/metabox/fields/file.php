<?php
$key = $field['key'];
$title = $field['title']; 
$placeholder = $field['placeholder'];
$val = get_post_meta($post_id, $key, true);
$is_repeater = $field['is_repeater'];
$data = $field['data']; 
if($data){
	$val = $data;
}

$file_id = uniqid('file_id_');
?>
<div class="w366-mtb-file-p">
	<?php 
	if($val){
		$id_attachment = attachment_url_to_postid($val);
		$filename = basename ( get_attached_file( $id_attachment ) );
		$size = size_format ( filesize( get_attached_file( $id_attachment ) ) );
		
		//var_dump( wp_get_attachment_image($id_attachment, '', true) );
	?>
	<div class="w366-mtb-bao-file">
		<?php echo wp_get_attachment_image($id_attachment, '', true);?><span><?php echo $filename; ?></span> (<?php echo $size; ?>)
	</div>
	<?php
	}
	?>
	<input rel="<?php echo $file_id; ?>" type="text" name="<?= $key ?><?php if($is_repeater) echo '[]'; ?>" id="<?= $key ?>" value="<?= $val ?>" style="width:100%;" placeholder="<?= $placeholder ?>" class="w366-mtb-file">
	<button id="<?php echo $file_id; ?>" type="button" class="button" onClick="w366_mtb_init_file(this);">Tải file lên</button>
</div>
<p></p>
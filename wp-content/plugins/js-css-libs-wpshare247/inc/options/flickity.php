<!--flickity .....-->
<?php 
	$flickity = 'flickity';
	$is_flickity = $this->get_option($flickity);
?>		
<tr valign="top">
	<th scope="row">
		<?php _e("Flickity Slider",""); ?>
		<br/>(<small><i>Version <?=WS247_JCL_Flickity_Version?></i></small>)
	</th>
	<td>
		<input id="<?=WS247_JCL_PREFIX.$flickity?>" name="<?=WS247_JCL_PREFIX.$flickity?>" type="checkbox" <?php if($is_flickity) echo 'checked'; ?> />
		<label for="<?=WS247_JCL_PREFIX.$flickity?>"><?php _e('Active', WS247_JCL_TEXTDOMAIN);?></label>
	</td>
</tr>
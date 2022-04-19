<!--fancybox .....-->
<?php 
	$fancybox = 'fancybox';
	$is_fancybox = $this->get_option($fancybox);
?>		
<tr valign="top">
	<th scope="row">
		<?php _e("Fancybox",""); ?>
		<br/>(<small><i>Version <?=WS247_JCL_Fancybox_Version?></i></small>)
	</th>
	<td>
		<input id="<?=WS247_JCL_PREFIX.$fancybox?>" name="<?=WS247_JCL_PREFIX.$fancybox?>" type="checkbox" <?php if($is_fancybox) echo 'checked'; ?> />
		<label for="<?=WS247_JCL_PREFIX.$fancybox?>"><?php _e('Active', WS247_JCL_TEXTDOMAIN);?></label>
	</td>
</tr>
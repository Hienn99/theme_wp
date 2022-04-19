<!--jquery_confirm .....-->
<?php 
	$jquery_confirm = 'jquery_confirm';
	$is_jquery_confirm = $this->get_option($jquery_confirm);
?>		
<tr valign="top">
	<th scope="row">
		<?php _e("Jquery Confirm",""); ?>
		<br/>(<small><i>Version <?=WS247_JCL_JQuery_Confirm?></i></small>)
	</th>
	<td>
		<input id="<?=WS247_JCL_PREFIX.$jquery_confirm?>" name="<?=WS247_JCL_PREFIX.$jquery_confirm?>" type="checkbox" <?php if($is_jquery_confirm) echo 'checked'; ?> />
		<label for="<?=WS247_JCL_PREFIX.$jquery_confirm?>"><?php _e('Active', WS247_JCL_TEXTDOMAIN);?></label>
	</td>
</tr>
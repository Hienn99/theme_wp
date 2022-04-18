<!--Countdown .....-->
<?php 
	$countdown = 'countdown';
	$is_countdown = $this->get_option($countdown);
?>		
<tr valign="top">
	<th scope="row">
		<?php _e("Countdown",""); ?>
		<br/>(<small><i>Version <?=WS247_JCL_Countdown?></i></small>)
	</th>
	<td>
		<input id="<?=WS247_JCL_PREFIX.$countdown?>" name="<?=WS247_JCL_PREFIX.$countdown?>" type="checkbox" <?php if($is_countdown) echo 'checked'; ?> />
		<label for="<?=WS247_JCL_PREFIX.$countdown?>"><?php _e('Active', WS247_JCL_TEXTDOMAIN);?></label>
	</td>
</tr>
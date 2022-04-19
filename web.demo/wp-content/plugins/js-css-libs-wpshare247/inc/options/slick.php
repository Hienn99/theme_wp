<!--slick .....-->
<?php 
	$slick = 'slick';
	$is_slick = $this->get_option($slick);
?>		
<tr valign="top">
	<th scope="row">
		<?php _e("Slick slider",""); ?>
		<br/>(<small><i>Version <?=WS247_JCL_Slick_Version?></i></small>)
	</th>
	<td>
		<input id="<?=WS247_JCL_PREFIX.$slick?>" name="<?=WS247_JCL_PREFIX.$slick?>" type="checkbox" <?php if($is_slick) echo 'checked'; ?> />
		<label for="<?=WS247_JCL_PREFIX.$slick?>"><?php _e('Active', WS247_JCL_TEXTDOMAIN);?></label>
	</td>
</tr>
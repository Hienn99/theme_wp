<!--swiper .....-->
<?php 
	$swiper = 'swiper';
	$is_swiper = $this->get_option($swiper);
?>		
<tr valign="top">
	<th scope="row">
		<?php _e("Swiper Slider",""); ?>
		<br/>(<small><i>Version <?=WS247_JCL_Swiper_Slider?></i></small>)
	</th>
	<td>
		<input id="<?=WS247_JCL_PREFIX.$swiper?>" name="<?=WS247_JCL_PREFIX.$swiper?>" type="checkbox" <?php if($is_swiper) echo 'checked'; ?> />
		<label for="<?=WS247_JCL_PREFIX.$swiper?>"><?php _e('Active', WS247_JCL_TEXTDOMAIN);?></label>
	</td>
</tr>
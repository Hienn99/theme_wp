<!--owlcarousel .....-->
<?php 
	$owlcarousel = 'owlcarousel';
	$is_owlcarousel = $this->get_option($owlcarousel);
?>		
<tr valign="top">
	<th scope="row">
		<?php _e("Owl Carousel",""); ?>
		<br/>(<small><i>Version <?=WS247_JCL_OwlCarousel2_Version?></i></small>)
	</th>
	<td>
		<input id="<?=WS247_JCL_PREFIX.$owlcarousel?>" name="<?=WS247_JCL_PREFIX.$owlcarousel?>" type="checkbox" <?php if($is_owlcarousel) echo 'checked'; ?> />
		<label for="<?=WS247_JCL_PREFIX.$owlcarousel?>"><?php _e('Active', WS247_JCL_TEXTDOMAIN);?></label>
	</td>
</tr>
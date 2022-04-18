<!--font_awesome .....-->
<?php 
	$font_awesome = 'font_awesome';
	$is_font_awesome = $this->get_option($font_awesome);
?>		
<tr valign="top">
	<th scope="row">
		<?php _e("Font Awesome",""); ?>
	</th>
	<td>
		<input id="<?=WS247_JCL_PREFIX.$font_awesome?>" name="<?=WS247_JCL_PREFIX.$font_awesome?>" type="checkbox" <?php if($is_font_awesome) echo 'checked'; ?> />
		<label for="<?=WS247_JCL_PREFIX.$font_awesome?>"><?php _e('Active', WS247_JCL_TEXTDOMAIN);?></label>
		
		<?php 
			$font_awesome_v = 'font_awesome_version';
			$font_awesome_version = $this->get_option($font_awesome_v);
		?>
		<div style="margin-top:5px;">
			<select name="<?=WS247_JCL_PREFIX.$font_awesome_v?>">
				<option <?php if($font_awesome_version=='4.7.0') echo 'selected'; ?> value="4.7.0">4.7.0</option>
				<option <?php if($font_awesome_version=='5.6.1') echo 'selected'; ?> value="5.6.1">5.6.1</option>
			</select>
		</div>
	</td>
</tr>
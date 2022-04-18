<!--Bootstrap .....-->
<?php 
	$bootstrap_field = 'bootstrap';
	$is_bootstrap = $this->get_option($bootstrap_field);
?>		
<tr valign="top">
	<th scope="row">
		<?php _e("Bootstrap",""); ?>
	</th>
	<td>
		<input id="<?=WS247_JCL_PREFIX.$bootstrap_field?>" name="<?=WS247_JCL_PREFIX.$bootstrap_field?>" type="checkbox" <?php if($is_bootstrap) echo 'checked'; ?> />
		<label for="<?=WS247_JCL_PREFIX.$bootstrap_field?>"><?php _e('Active', WS247_JCL_TEXTDOMAIN);?></label>
		
		<?php 
			$bootstrap_v = 'bootstrap_version';
			$bootstrap_version = $this->get_option($bootstrap_v);
		?>
		<div style="margin-top:5px;">
			<select name="<?=WS247_JCL_PREFIX.$bootstrap_v?>">
				<option <?php if($bootstrap_version==5) echo 'selected'; ?> value="5">Bootstrap 5.0.0</option>
				<option <?php if($bootstrap_version==4) echo 'selected'; ?> value="4">Bootstrap 4.0.0</option>
				<option <?php if($bootstrap_version==3) echo 'selected'; ?> value="3">Bootstrap 3.3.7</option>
			</select>
		</div>
	</td>
</tr>
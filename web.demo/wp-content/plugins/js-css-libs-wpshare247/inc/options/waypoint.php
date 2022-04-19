<!--waypoint .....-->
<?php 
	$waypoint = 'waypoint';
	$is_waypoint = $this->get_option($waypoint);
?>		
<tr valign="top">
	<th scope="row">
		<?php _e("Waypoint",""); ?>
		<br/>(<small><i>Version <?=WS247_JCL_Waypoints?></i></small>)
	</th>
	<td>
		<input id="<?=WS247_JCL_PREFIX.$waypoint?>" name="<?=WS247_JCL_PREFIX.$waypoint?>" type="checkbox" <?php if($is_waypoint) echo 'checked'; ?> />
		<label for="<?=WS247_JCL_PREFIX.$waypoint?>"><?php _e('Active', WS247_JCL_TEXTDOMAIN);?></label>
	</td>
</tr>
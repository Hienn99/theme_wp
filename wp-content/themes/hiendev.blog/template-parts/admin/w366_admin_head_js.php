<script>
	function initClickMedia( id ){ //alert(id); return false;
		jQuery('#'+id).on('click',function(e){
			var input_id = jQuery(this).data('input'); 
			var div_id = 'div_'+id;
			
			e.preventDefault();
			var frame_multiple_wop = false;
			
			if (frame_multiple_wop) {
				frame_multiple_wop.open();
				return;
			}
			
			//Select many photos
			var is_multiple = false;
			
			frame_multiple_wop = wp.media({
				multiple: is_multiple
			});

			// Register Event
			frame_multiple_wop.on( "select", function() {
				var selection = frame_multiple_wop.state().get('selection');
					selection.map( function( attachment ) {
						attachment = attachment.toJSON();
						//console.log(attachment);
						
						var bg_url = attachment.url;
						jQuery("#"+input_id).val(bg_url);
						if(attachment.sizes.thumbnail==undefined){
							var thumb_url = attachment.url;
						}else{	
							var thumb_url = attachment.sizes.thumbnail.url;
						}
						
						var div_id_count = 1*jQuery('#'+div_id).length;
						if(div_id_count==0){
							jQuery("#"+input_id).before('<span id="'+div_id+'" class="wle_widget_media"><a class="nremove" onClick="wle_widget_media_remove(this,\''+input_id+'\');"><span class="dashicons dashicons-no-alt"></span></a><img src="'+thumb_url+'" /></span>');
						}else{
							jQuery('#'+div_id + ' img').attr('src', thumb_url);
						}
						jQuery("input.widget-control-save").removeAttr('disabled');
						
					});
					
					// Close the media frame_multiple_wop
					frame_multiple_wop.close();
			});
			
			// Show media frame_multiple_wop
			frame_multiple_wop.open();
		});//------------------------------------------------------------------------
		
		return false;
	}
</script>
//------------------------------------------
    //Metabox Admin JS
//------------------------------------------
jQuery(document).ready(function() {
	w366_mtb_init_remove_item();
	w366_mtb_init_sortable();
	
	/*repeater field*/
	w366_mtb_init_repeater_field();
	
	/*image single*/
	hl_mtb_init_img();
	hl_mtb_init_img_single_remove();
});

function w366_mtb_init_remove_file( file_id ){
	jQuery(".w366-mtb-bao-file."+file_id).remove();
	jQuery("input[rel='"+file_id+"']").val("");
	return false;
}

function w366_mtb_init_sortable(){
	var sClass = '.js-w366-mtb-sortable';
	var sClass_item = 'sortable-item';
	
	var arr_childs = jQuery(sClass).children();
	jQuery(arr_childs).each(function(index, element) {
        jQuery(this).addClass(sClass_item);
    });
	
	jQuery(sClass).sortable({
		stop: function (event, ui) {
			var eSortable = jQuery(this);
			if(jQuery(eSortable).data("isgallery")==1 && typeof hl_mtb_init_img_saveAttachmentIds !== 'undefined' && jQuery.isFunction(hl_mtb_init_img_saveAttachmentIds)){
				hl_mtb_init_img_saveAttachmentIds(eSortable);
			}
		}
	});
}

function hl_mtb_init_img_saveAttachmentIds(eContainer){
	var hdn_id = jQuery(eContainer).attr("rel");
	var aItems = jQuery(eContainer).find('li.attachment');
	
	var arr_big = {};
	jQuery(aItems).each(function(index, element) {
		var attachment_id = jQuery(this).attr("id");
		arr_big[index] = attachment_id;
    });
	
	//-----------
	var str_json = '';
	if(jQuery(aItems).length){
		str_json = JSON.stringify(arr_big);
	}
		
	jQuery("#"+hdn_id).val(str_json);
}

/*
 *
 */
function w366_mtb_init_remove_item(){
	jQuery(".w366-mtb-group .item .remove").click(function(e) {
		//if( confirm("Bạn có chắc muốn xoá hay không? ") ){
        	jQuery(this).parent().remove();
		//}
    });
}


/*
 *
 */
function w366_mtb_init_repeater_field(){
	jQuery(".js-w366-mtb-repeater-btn").click(function(e) {
		var e_container = jQuery(jQuery(this).data("parent"));
       	var e_item = jQuery(e_container).find(".w366-mtb-repeater-item").get(0);
		var e_new_item = jQuery(e_item).clone();
			jQuery(e_new_item).addClass("clone");
			//reset value
			jQuery(e_new_item).find("input").val("");
			jQuery(e_new_item).find("textarea").val("");
			jQuery(jQuery(this).data("parent") + " .w366-mtb-data").append(e_new_item);
		
		//Callback
		w366_mtb_init_remove_item();
    });
}

function w366_mtb_init_file( e ){ //alert(id); return false;
	var input_id = jQuery(e).prev(); 
	
	//e.preventDefault();
	var frame_multiple_wop = false;
	
	if (frame_multiple_wop) {
		frame_multiple_wop.open();
		return;
	}
	
	//Select many photos
	var is_multiple = false;
	
	frame_multiple_wop = wp.media({
		multiple: is_multiple,
		library: {
				//type: [ 'pdf', 'doc', 'docs', 'xls' , 'xlsx']
		}
	});

	// Register Event
	frame_multiple_wop.on( "select", function() {
		var selection = frame_multiple_wop.state().get('selection');
			selection.map( function( attachment ) {
				attachment = attachment.toJSON();
				//console.log(attachment);
				//acction
				var filename = attachment.filename;
				var url = attachment.url;
				var icon_url = attachment.icon;
				var size = attachment.filesizeHumanReadable;
				var e_data_bao = jQuery(input_id).prev();
				
				jQuery(e_data_bao).remove();
				var e_data_bao = '<div class="w366-mtb-bao-file"><img src="'+icon_url+'" /><span>'+filename+'</span> ('+size+')</div>';
					jQuery(input_id).before(e_data_bao);
				
				jQuery(input_id).val(url);
				
			});
			
			// Close the media frame_multiple_wop
			frame_multiple_wop.close();
	});
	
	// Show media frame_multiple_wop
	frame_multiple_wop.open();
	
	
	return false;
}

function hl_mtb_init_img_single_remove(){
	jQuery(".attachments-container .removeit_img").click(function(e) {
		var hdn_id = jQuery(this).attr("rel");
		var parent_e = jQuery(this).parent(".attachment");
		var eContainer = jQuery(parent_e).parent();
        jQuery(parent_e).remove();
		
		if( jQuery(eContainer).data("isgallery")==1 ){
			hl_mtb_init_img_saveAttachmentIds(eContainer);
		}else{
			jQuery("#"+hdn_id).val("");
		}
    });
}

function hl_mtb_init_img(){
	jQuery('.js-mtb-btn-img-field').on('click',function(e){
		var eContainer = jQuery(jQuery(this).parent()).find(".images").get(0);
		
		e.preventDefault();
		var frame_multiple = false;
		
		if (frame_multiple) {
			frame_multiple.open();
			return;
		}
		
		//Select many photos
		var i_number = jQuery(this).attr("data-number");
		if(i_number=='*'){
			var is_multiple = true;
		}else{
			var is_multiple = false;
		}
		
		var media_upload_title = jQuery(this).data('title');
		if(media_upload_title==''){
			media_upload_title = 'Select or Upload Media Of Your Chosen Persuasion';
		}
		
		var media_upload_btn_text = jQuery(this).data('btntext');
		if(media_upload_btn_text==''){
			media_upload_btn_text = 'Use this media';
		}
		
		frame_multiple = wp.media({
			title: media_upload_title,
			button: {
				text: media_upload_btn_text
			},
			library: {
					type: [ 'image' ]
			},
			multiple: is_multiple
		});
		
		
		// Register Event
		frame_multiple.on( "select", function() {
			var selection = frame_multiple.state().get('selection');
				selection.map( function( attachment ) {
					attachment = attachment.toJSON();
					//console.log(attachment);
					
					// append image
					hl_mtb_create_img_block_html(attachment, eContainer, is_multiple);
				});
				
				hl_mtb_init_img_single_remove();
				
				// Close the media frame_multiple
				frame_multiple.close();
		});
		
		// Show media frame_multiple
		frame_multiple.open();
	});//------------------------------------------------------------------------
	
	return false;
///////////////////////////////////////////////////////
}

function hl_mtb_create_img_block_html(attachment, eContainer, is_multiple){
	var type = attachment.type; // image, video
	// 1 ----------------------------
	var img_link = '';
	if((attachment.sizes).hasOwnProperty('thumbnail')){
		var src_attachment = attachment.sizes.thumbnail.url;
	}else{
		var src_attachment = attachment.url;
	}
	
	var id_attachment = attachment.id;
	var sitem = jQuery(jQuery(eContainer).parent()).find('.sample').html();
		sitem = sitem.replace(/\#attachment_id/g, id_attachment);
		sitem = sitem.replace(/\#src/g, src_attachment);
	
	var hdn_id = jQuery(eContainer).attr("rel");
	
	if(is_multiple){
		var count_li = jQuery(jQuery(eContainer).find("li")).length;
		if(count_li>0){
			jQuery(eContainer).append(sitem);
		}else{
			jQuery(eContainer).html(sitem);
		}
		hl_mtb_init_img_saveAttachmentIds(eContainer);
	}else{
		jQuery(eContainer).html(sitem);
		jQuery("#"+hdn_id).val(id_attachment);
	}
}

<?php				
class W366_Helper_Get {
	function __construct() {}
	
	public static function create_image_sample($key){
		ob_start();
		?>
         <li id="#attachment_id" data-id="#attachment_id" class="img-li attachment save-ready sortable-item"> 
            <a class="dashicons dashicons-no removeit_img" rel="<?php echo $key; ?>"></a>
            <div class="attachment-preview js--select-attachment type-image subtype-png landscape">
                <div class="thumbnail">
                    <div class="centered">
                        <img class="img" src="#src" draggable="false">
                    </div>
                </div>
             </div>
        </li>
        <?php
		$img_li = ob_get_contents();
		ob_end_clean();
		return $img_li;
	}
	
	public static function create_image_get_attachment_id($attachment_id, $img_li){
		if($attachment_id){
			$src_attachment = wp_get_attachment_image_url($attachment_id, 'thumbnail');
			$attachment_img = $img_li;
			$attachment_img = str_replace("#attachment_id", $attachment_id, $attachment_img);
			$attachment_img = str_replace("#src", $src_attachment, $attachment_img);
			echo $attachment_img;
		}
	}
	
	/*
		Get all custom post
	 */
	public static function get_post_options( $post_type = 'page' ){
		$options = array('0'=>'--Chọn--');
		$args = array( 
						'post_type' => $post_type, 
						'order' => 'DESC',
						'post_status' => 'publish',
						'posts_per_page' => '-1');
		$posts_array = get_posts( $args );
		if($posts_array):
			foreach ( $posts_array as $obj ) {
				$options[$obj->ID] = $obj->post_title;
			}
		endif;
		return $options;
	}
	
	/*
		Get all contact form 7 plugin
	 */
	public static function get_cf7_options(){
		$post_type = 'wpcf7_contact_form';
		return self::get_post_options( $post_type );
	}
	
	/*
		Get all meta slider plugin
	 */
	public static function get_meta_slider_options(){
		$post_type = 'ml-slider';
		return self::get_post_options( $post_type );
	}
	
	/*
		Get all terms
	 */
	public static function get_terms( $taxonomy ){
		$options = array('0'=>'--Chọn--');
		$args = array(
			 'taxonomy'   => $taxonomy,
			 'hide_empty' => false,
		);
		$terms = get_terms( $args );
		if($terms){
			foreach($terms as $obj){ 
				$options[$obj->term_id] = $obj->name;
			}
		}
		return $options;
	}
}
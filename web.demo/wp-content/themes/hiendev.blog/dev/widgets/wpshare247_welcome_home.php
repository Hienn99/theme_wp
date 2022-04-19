<?php
if( !class_exists('wpshare247_welcome_home') ):
	class wpshare247_welcome_home extends WP_Widget {
		function __construct() {
			parent::__construct(
				'wpshare247_welcome_home', esc_html_x('* [HOME 1] Post Welcome', 'widget name', 'wpshare247'),
				array(
					'classname' => 'wpshare247_welcome_home',
					'description' => esc_html__('Nội dung welcome trang chủ', 'wpshare247'),
					'customize_selective_refresh' => true
				)
			);
		}
		
		//Hiển thị nội dung Widget
		function widget($args, $instance) {
			$defaults = array('title'=>'', 'page_id' => '', 'post_id' => '', 'product_id' => '', 'your_custom_post_id' => '');
			
			$title = $instance['title'];
			$title_site = $instance['title_site'];
			$description = $instance['description'];
			$link = $instance['link'];
			$my_img_url = $instance['my_img_url'];
			$page_id = $instance['page_id'];
			$post_id = $instance['post_id'];
			$product_id = $instance['product_id'];
			$your_custom_post_id = $instance['your_custom_post_id'];
			
			echo $args['before_widget'];
				?>
                
                <article class="author-wrapper">
                    <div class="title">
                        <h3><?=$title;?> <mark><?=$title_site?></mark></h3>                
                    </div>
                    <div class="media">
                        <div class="about_img">
                            <img alt="" class="img-responsive alignleft" src="<?=$my_img_url;?>">
                        </div>
                        <p><?=$description;?></p>
                    </div>
                    <div class="post-footer">
                        <div class="pull-left">
                            <a href="<?=$link;?>" class="readmore">Learn more about [..]</a>
                        </div>
                        <div class="pull-right">
                            <div class="social">
                                <span><a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                                <span><a data-toggle="tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                                <span><a data-toggle="tooltip" data-placement="bottom" title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></span>
                                <span><a data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
                                <span><a data-toggle="tooltip" data-placement="bottom" title="" href="#" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></span>
                                <span><a data-toggle="tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
                            </div>
                        </div>
                    </div>
                </article>

				<?php
			echo $args['after_widget'];
		}
		
		//Cập nhật dữ liệu các field của Widget
		function update($new_instance, $old_instance) {
			$instance = array();
			
			if (!empty($new_instance['title'])) {
				$instance['title'] = ($new_instance['title']);
			}
			if (!empty($new_instance['title_site'])) {
				$instance['title_site'] = ($new_instance['title_site']);
			}
			if (!empty($new_instance['description'])) {
				$instance['description'] = ($new_instance['description']);
			}
			if (!empty($new_instance['my_img_url'])) {
				$instance['my_img_url'] = ($new_instance['my_img_url']);
			}
			if (!empty($new_instance['link'])) {
				$instance['link'] = ($new_instance['link']);
			}
			
			return $instance;
		}
		
		
		//Khai báo các field của Widget
		function form($instance) {
			$defaults = array('title'=>'', 'page_id' => '', 'post_id' => '', 'product_id' => '', 'your_custom_post_id' => '');
			$instance = wp_parse_args($instance, $defaults); ?>
            
            <!-- text field -->
            <p>
				<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Tiêu đề', 'wpshare247'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['title']); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" id="<?php echo esc_attr($this->get_field_id('title')); ?>" />
			</p>
			<!-- text field -->
            <p>
				<label for="<?php echo esc_attr($this->get_field_id('title_site')); ?>"><?php esc_html_e('Tên website', 'wpshare247'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['title_site']); ?>" name="<?php echo esc_attr($this->get_field_name('title_site')); ?>" id="<?php echo esc_attr($this->get_field_id('title_site')); ?>" />
			</p>
			
           	
			<!-- image field -->
			<?php Ws247_M_WG::helper_image_field('my_img_url', 'Hình đại diện', $this, $instance); ?>
			<!-- textarea field -->
			<p>
			    <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Textarea', 'wpshare247'); ?></label>
			    <textarea name="<?php echo esc_attr($this->get_field_name('description')); ?>" id="<?php echo esc_attr($this->get_field_id('description')); ?>" class="widefat"><?php echo esc_attr($instance['description']); ?></textarea>
			</p>
            <!-- text field -->
            <p>
				<label for="<?php echo esc_attr($this->get_field_id('link')); ?>"><?php esc_html_e('Liên kết bài viết', 'wpshare247'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['link']); ?>" name="<?php echo esc_attr($this->get_field_name('link')); ?>" id="<?php echo esc_attr($this->get_field_id('link')); ?>" />
			</p>
            <p> <a target="_blank" href="<?php echo admin_url('admin.php?page=theme-options-w366'); ?>">Lien ket MXH</a></p>
			
		<?php
		}
	}
endif;
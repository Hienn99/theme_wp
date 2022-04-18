<?php
if( !class_exists('wpshare247_datepicker_field') ):
	class wpshare247_datepicker_field extends WP_Widget {
		function __construct() {
			parent::__construct(
				'wpshare247_datepicker_field', esc_html_x('* [WP247] Datepicker field', 'widget name', 'wpshare247'),
				array(
					'classname' => 'wpshare247_color_picker_field',
					'description' => esc_html__('Trường chọn ngày tháng năm của Widget', 'wpshare247'),
					'customize_selective_refresh' => true
				)
			);
		}
		
		//Hiển thị nội dung Widget
		function widget($args, $instance) {
			$defaults = array('title'=>'', 'background_color' => '');
			
			$title = $instance['title'];
			$my_datepicker = $instance['my_datepicker'];
			
			echo $args['before_widget'];
				?>
				<?php echo $args['before_title'] . $title . $args['after_title']; ?>
                <!-- Color -->
                <div class="ws247-field">
                    <div>Đây là Datepicker: <?php echo $my_datepicker;?></div>
                </div>
				<?php
			echo $args['after_widget'];
		}
		
		//Cập nhật dữ liệu các field của Widget
		function update($new_instance, $old_instance) {
			$instance = array();
			
			if (!empty($new_instance['title'])) {
				$instance['title'] = ($new_instance['title']);
			}
			
			if (!empty($new_instance['my_datepicker'])) {
				$instance['my_datepicker'] = ($new_instance['my_datepicker']);
			}
			
			return $instance;
		}
		
		
		//Khai báo các field của Widget
		function form($instance) {
			$defaults = array('title'=>'', 'background_color' => '');
			$instance = wp_parse_args($instance, $defaults); ?>
            
            <!-- text field -->
            <p>
				<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Text', 'wpshare247'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['title']); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" id="<?php echo esc_attr($this->get_field_id('title')); ?>" />
			</p>
            
            <!-- Datepicker field -->
			<?php 
			$format = 'yy-mm-dd'; // dd/mm/yy ; dd-mm-yy default => dd/mm/yy
			Ws247_M_WG::helper_datepicker_field('my_datepicker', 'Ngày:', $this, $instance, $format); 
			?>
			
		<?php
		}
	}
endif;
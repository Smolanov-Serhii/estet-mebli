<?php
/**
 * TemplateMela
 */
?><?php  // Reference:  http://codex.wordpress.org/Widgets_API
class FooterAboutWidget extends WP_Widget
{
    function __construct(){
		$widget_settings = array('description' => 'Footer About Me Widget', 'classname' => 'widgets-about');
		parent::__construct(false,$name='Footer About Me Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? 'About Us' : $instance['title']);
		$is_template_path = isset($instance['is_template_path']) ? $instance['is_template_path'] : false;
        $window_target = isset($instance['window_target']) ? $instance['window_target'] : false;
		$imageSrc = empty($instance['imageSrc']) ? '' : $instance['imageSrc'];
		$address = empty($instance['address']) ? '' : $instance['address']; 
		$link_text = empty($instance['link_text']) ? '' : $instance['link_text']; 
		$linkURL = empty($instance['linkURL']) ? '' : $instance['linkURL'];
		$callus_text = empty($instance['callus_text']) ? '' : $instance['callus_text']; 
		$contact_number = empty($instance['contact_number']) ? '' : $instance['contact_number']; 
		if($is_template_path == 1):
			$imageSrc= get_stylesheet_directory_uri() . '/images/megnor/' . $imageSrc; 
		endif;		
		   echo wp_kses_post($before_widget);
		   if(!empty($title)) :		
			 echo wp_kses_post($before_title);
		endif;
		if($title)
		echo esc_html($title);
		if(!empty($title)) :			
			echo wp_kses_post($after_title);
		endif;
		 ?>
		 <div class="home-about-me hb-animate-element left-to-right"> 		 
				<div class="tmpmela-about-text">
					<?php if($imageSrc !== ""): ?>
				 	 <a href="<?php if($linkURL == ""): echo esc_url(home_url( '#' )); else:?><?php echo esc_url($linkURL); endif;?>" 
						<?php if($window_target == true) echo 'target="_self"'; ?>> 
						<img src="<?php echo esc_url($imageSrc); ?>" alt="footerlogo" class="tmpmela-about-img" />
					 </a>
					<?php endif; ?>
					<?php if($callus_text): ?>
						<div class="tmpmela-callus-text">					
							<?php echo esc_attr($callus_text); ?>
						</div>
					<?php endif; ?>

					<?php if($contact_number): ?>
						<div class="tmpmela-contact-number">					
							<?php echo esc_attr($contact_number); ?>
						</div>
					<?php endif; ?>

					<?php if($address): ?>
						<div class="tmpmela-about-address">					
							<?php echo esc_attr($address); ?>
						</div>
					<?php endif; ?>
				</div>
		</div>
		<?php
		   echo wp_kses_post($after_widget);		
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['window_target'] = false;
		$instance['is_template_path'] = false;
		if (isset($new_instance['window_target'])) $instance['window_target'] = true;
		if (isset($new_instance['is_template_path'])) $instance['is_template_path'] = true;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['imageSrc'] = strip_tags($new_instance['imageSrc']);
		$instance['link_text'] = strip_tags($new_instance['link_text']);
		$instance['linkURL'] = strip_tags($new_instance['linkURL']);
		$instance['address'] = strip_tags($new_instance['address']);
		$instance['callus_text'] = strip_tags($new_instance['callus_text']);
		$instance['contact_number'] = strip_tags($new_instance['contact_number']);
		return $instance;
	}
    function form($instance){
		$instance = wp_parse_args( (array) $instance, array(
		'title'=>'Contact Information',
		'imageSrc'=>'footer-logo.png',
		'link_text'=>'',
		'is_template_path'=>1,
		'linkURL'=>'#',
		'address' => '60, 29th Street, San Francisco, CA 94110, United States.',
		'callus_text' => 'Call Us 24/7 Free',
		'contact_number' => '0123 4567 890'
		) );
		$title = esc_attr($instance['title']);
		$imageSrc = esc_attr($instance['imageSrc']);
		$address = esc_attr($instance['address']);
		$link_text = esc_attr($instance['link_text']);
		$linkURL = esc_attr($instance['linkURL']);
		$callus_text = esc_attr($instance['callus_text']);
		$contact_number = esc_attr($instance['contact_number']);
		?>
		<p><label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title:', 'shopinia'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" type="text" value="<?php echo esc_attr($title);?>" /></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('imageSrc'));?>">Image URL1:<br /></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('imageSrc'));?>" name="<?php echo esc_attr($this->get_field_name('imageSrc'));?>" type="text" value="<?php echo esc_attr($imageSrc);?>" /><br />
			<input class="checkbox" type="checkbox" <?php checked($instance['is_template_path'], true) ?> id="<?php echo esc_attr($this->get_field_id('is_template_path')); ?>" name="<?php echo esc_attr($this->get_field_name('is_template_path')); ?>" /><label for="<?php echo esc_attr($this->get_field_id('is_template_path')); ?>">Use Template Path for Image</label>
		</p>
		<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL'));?>" type="text" value="<?php echo esc_attr($linkURL);?>" />
  <label>(e.g. http://www.yoursite.com/...)</label>
  <br />
  <input class="checkbox" type="checkbox" <?php checked(isset($instance['window_target']), true) ?> id="<?php echo esc_attr($this->get_field_id('window_target')); ?>" name="<?php echo esc_attr($this->get_field_name('window_target')); ?>" />
  <label for="<?php echo esc_attr($this->get_field_id('window_target')); ?>">Open Link In New Window</label>
</p>
		<p><label for="<?php echo esc_attr($this->get_field_id('address'));?>">Address:</label>
			<textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('address'));?>" name="<?php echo esc_attr($this->get_field_name('address'));?>" ><?php echo esc_attr($address);?></textarea>
		</p>
		<p><label for="<?php echo esc_attr($this->get_field_id('callus_text'));?>">Contact text:</label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('callus_text'));?>" name="<?php echo esc_attr($this->get_field_name('callus_text'));?>" type="text" value="<?php echo esc_attr($callus_text);?>" />
  <label>(e.g. Call Us 24/7 Free...)</label>
		</p>
		<p><label for="<?php echo esc_attr($this->get_field_id('contact_number'));?>">Contact number:</label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_number'));?>" name="<?php echo esc_attr($this->get_field_name('contact_number'));?>" type="text" value="<?php echo esc_attr($contact_number);?>" />
  <label>(e.g. 0123456789...)</label>
		</p>
		<?php
	}
}
function footerabout_register_widgets()
	{
		global $wp_widget_factory;
		$wp_widget_factory->register('FooterAboutWidget');
	}
add_action('widgets_init', 'footerabout_register_widgets');
// end AboutWidget
?>
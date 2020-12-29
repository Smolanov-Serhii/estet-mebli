<?php
/**
 * TemplateMela
 */
?>
<?php  // Reference:  http://codex.wordpress.org/Widgets_API
class DocumentationWidget extends WP_Widget
{
    function __construct(){
		$widget_settings = array('description' => 'Documentation Widget', 'classname' => 'widgets-static-links');
		parent::__construct(false,$name='Documentation Links',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$linktext = empty($instance['linktext']) ? '' : $instance['linktext'];
		$linkURL = empty($instance['linkURL']) ? '' : $instance['linkURL'];

		echo wp_kses_post($before_widget);				
		if(!empty($title)) :		
			echo wp_kses_post($before_title);				
		endif;
		?> 
		<?php if($linktext) : ?>
		<a class="header-docs" href="<?php if($linkURL == ""): echo esc_url(home_url( '/' )); else:?><?php echo esc_url($linkURL); endif;?>">
			<?php echo esc_attr($linktext);  ?></a>
		<?php endif; ?>	
		<?php		
		echo wp_kses_post($after_widget);	
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;			
		$instance['linktext'] =($new_instance['linktext']);
		$instance['linkURL'] = strip_tags($new_instance['linkURL']);
		return $instance;
	}
    function form($instance){
		$instance = wp_parse_args( (array) $instance, array(
		'linktext'=>'Ducumentation',
		'linkURL'=>'#',
		) );			
		$linktext	= esc_attr($instance['linktext']);	
		$linkURL 	= esc_attr($instance['linkURL']);
		?>
		<p><label for="<?php echo esc_attr($this->get_field_id('linktext'));?>"><?php esc_html_e('Link Text:', 'shopinia'); ?></label><textarea cols="18" rows="3" class="widefat" id="<?php echo esc_attr($this->get_field_id('linktext'));?>" name="<?php echo esc_attr($this->get_field_name('linktext'));?>" ><?php echo esc_attr($linktext);?></textarea></p>
		<p><label for="<?php echo esc_attr($this->get_field_id('linkURL'));?>"><?php esc_html_e('Link URL:', 'shopinia'); ?><br /></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL'));?>" type="text" value="<?php echo esc_attr($linkURL);?>" />
		<label>(e.g. http://www.Google.com/...)</label><br />
		<?php
	}
}
function documentation_register_widgets()
{
    global $wp_widget_factory;
    $wp_widget_factory->register('DocumentationWidget');
}
add_action('widgets_init', 'documentation_register_widgets');
//  end Static links Widget
?>
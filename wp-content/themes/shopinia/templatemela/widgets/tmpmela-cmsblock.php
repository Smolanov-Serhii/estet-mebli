<?php
/**
 * TemplateMela
 */
?><?php // Reference:  http://codex.wordpress.org/Widgets_API
class CMSBlockWidget extends WP_Widget
{
    function __construct()
    {
        $widget_settings = array('description' => 'Service CMS Block Widget', 'classname' => 'widgets-cms');
        parent::__construct(false, $name = 'Service CMS Block Widget', $widget_settings);
    }
    function widget($args, $instance)
    {
        extract($args);
        $service_title1 = empty($instance['service_title1']) ? '' : $instance['service_title1'];
        $service_title_color1 = empty($instance['service_title_color1']) ? '' : $instance['service_title_color1'];

        $service_title2 = empty($instance['service_title2']) ? '' : $instance['service_title2'];
        $service_title_color2 = empty($instance['service_title_color2']) ? '' : $instance['service_title_color2'];

        $service_title3 = empty($instance['service_title3']) ? '' : $instance['service_title3'];
        $service_title_color3 = empty($instance['service_title_color3']) ? '' : $instance['service_title_color3'];

        $service_title4 = empty($instance['service_title4']) ? '' : $instance['service_title4'];
        $service_title_color4 = empty($instance['service_title_color4']) ? '' : $instance['service_title_color4'];

        $linkURL1 = empty($instance['linkURL1']) ? '' : $instance['linkURL1'];
        $window_target1 = isset($instance['window_target1']) ? $instance['window_target1'] : false;

        $linkURL2 = empty($instance['linkURL2']) ? '' : $instance['linkURL2'];
        $window_target2 = isset($instance['window_target2']) ? $instance['window_target2'] : false;

        $linkURL3 = empty($instance['linkURL3']) ? '' : $instance['linkURL3'];
        $window_target3 = isset($instance['window_target3']) ? $instance['window_target3'] : false;

        $linkURL4 = empty($instance['linkURL4']) ? '' : $instance['linkURL4'];
        $window_target4 = isset($instance['window_target4']) ? $instance['window_target4'] : false;

        echo wp_kses_post($before_widget);
        ?>
        <div class="service-list">
            <div class="service-outer">
                <div class="content">
                    <a href="<?php if ($linkURL1 == ""): echo home_url('/'); else: ?><?php echo esc_url($linkURL1); endif; ?>" <?php if ($window_target1 == true) echo 'target="_blank"'; ?>>
                        <div class="service-title one"
                             style="color:<?php echo "#" . esc_attr($service_title_color1); ?>;"><?php echo esc_attr($service_title1);?></div>
                    </a>
                </div>
                <div class="content">
                    <a href="<?php if ($linkURL2 == ""): echo home_url('/'); else: ?><?php echo esc_url($linkURL2); endif; ?>" <?php if ($window_target2 == true) echo 'target="_blank"'; ?>>
                    <div class="service-title two"
                         style="color:<?php echo "#" . esc_attr($service_title_color2); ?>;"><?php echo esc_attr($service_title2);?></div>
                     </a>
                </div>
                <div class="content">
                    <a href="<?php if ($linkURL3 == ""): echo home_url('/'); else: ?><?php echo esc_url($linkURL3); endif; ?>" <?php if ($window_target3 == true) echo 'target="_blank"'; ?>>
                    <div class="service-title three"
                         style="color:<?php echo "#" . esc_attr($service_title_color3); ?>;"><?php echo esc_attr($service_title3);?></div>
                     </a>
                </div>
                <div class="content">
                    <a href="<?php if ($linkURL4 == ""): echo home_url('/'); else: ?><?php echo esc_url($linkURL4); endif; ?>" <?php if ($window_target4 == true) echo 'target="_blank"'; ?>>
                    <div class="service-title four"
                         style="color:<?php echo "#" . esc_attr($service_title_color4); ?>;"><?php echo esc_attr($service_title4);?></div>
                     </a>
                </div>
            </div>
        </div>
        <?php
        echo wp_kses_post($after_widget);
    }
    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['service_title1'] = strip_tags($new_instance['service_title1']);
        $instance['service_title_color1'] = strip_tags($new_instance['service_title_color1']);

        $instance['service_title2'] = strip_tags($new_instance['service_title2']);
        $instance['service_title_color2'] = strip_tags($new_instance['service_title_color2']);

        $instance['service_title3'] = strip_tags($new_instance['service_title3']);
        $instance['service_title_color3'] = strip_tags($new_instance['service_title_color3']);

        $instance['service_title4'] = strip_tags($new_instance['service_title4']);
        $instance['service_title_color4'] = strip_tags($new_instance['service_title_color4']);

        $instance['linkURL1'] = strip_tags($new_instance['linkURL1']);
        $instance['window_target1'] = false;
        $instance['linkURL2'] = strip_tags($new_instance['linkURL2']);
        $instance['window_target2'] = false;
        $instance['linkURL3'] = strip_tags($new_instance['linkURL3']);
        $instance['window_target3'] = false;
        $instance['linkURL4'] = strip_tags($new_instance['linkURL4']);
        $instance['window_target4'] = false;
        return $instance;
    }
    function form($instance)
    {
        $instance = wp_parse_args((array)$instance, array(
            'service_title1' => 'Free Shipping worldwide',
            'service_title_color1' => '000000',
            'service_title2' => 'Return & Exchange policy in 24 Days',
            'service_title_color2' => '000000',
            'service_title3' => 'Cash On Delivery & Online Payment available',
            'service_title_color3' => '000000',
            'service_title4' => 'Supplier give bills for  this product.',
            'service_title_color4' => '000000',
            'linkURL1' => '#',
            'window_target1' => true,
            'linkURL2' => '#',
            'window_target2' => true,
            'linkURL3' => '#',
            'window_target3' => true,
            'linkURL4' => '#',
            'window_target4' => true,
        ));
        $service_title1 = esc_attr($instance['service_title1']);
        $service_title_color1 = esc_attr($instance['service_title_color1']);

        $service_title2 = esc_attr($instance['service_title2']);
        $service_title_color2 = esc_attr($instance['service_title_color2']);

        $service_title3 = esc_attr($instance['service_title3']);
        $service_title_color3 = esc_attr($instance['service_title_color3']);

        $service_title4 = esc_attr($instance['service_title4']);
        $service_title_color4 = esc_attr($instance['service_title_color4']);

        $linkURL1 = esc_attr($instance['linkURL1']);
        $window_target1 = esc_attr($instance['window_target1']);
        $linkURL2 = esc_attr($instance['linkURL2']);
        $window_target2 = esc_attr($instance['window_target2']);
        $linkURL3 = esc_attr($instance['linkURL3']);
        $window_target3 = esc_attr($instance['window_target3']);
        $linkURL4 = esc_attr($instance['linkURL4']);
        $window_target4 = esc_attr($instance['window_target4']);
        ?>
        <p><label for="<?php echo esc_attr($this->get_field_id('service_title1')); ?>">Title1:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('service_title1')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('service_title1')); ?>" type="text"
                   value="<?php echo esc_attr($service_title1); ?>"></input>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('service_title_color1')); ?>">Title Color1:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('service_title_color1')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('service_title_color1')); ?>" type="text"
                   value="<?php echo esc_attr($service_title_color1); ?>"></input>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('linkURL1')); ?>">Link URL1:<br/></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL1')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('linkURL1')); ?>" type="text"
                   value="<?php echo esc_attr($linkURL1); ?>"/>
            <label>(e.g. http://www.Google.com/...)</label><br/>
            <input class="checkbox" type="checkbox" <?php checked($instance['window_target1'], true) ?>
                   id="<?php echo esc_attr($this->get_field_id('window_target1')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('window_target1')); ?>"/><label
                    for="<?php echo esc_attr($this->get_field_id('window_target1')); ?>">Open Link In New Window</label>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('service_title2')); ?>">Title2:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('service_title2')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('service_title2')); ?>" type="text"
                   value="<?php echo esc_attr($service_title2); ?>"></input>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('service_title_color2')); ?>">Title Color2:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('service_title_color2')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('service_title_color2')); ?>" type="text"
                   value="<?php echo esc_attr($service_title_color2); ?>"></input>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('linkURL2')); ?>">Link URL2:<br/></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL2')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('linkURL2')); ?>" type="text"
                   value="<?php echo esc_attr($linkURL2); ?>"/>
            <label>(e.g. http://www.Google.com/...)</label><br/>
            <input class="checkbox" type="checkbox" <?php checked($instance['window_target2'], true) ?>
                   id="<?php echo esc_attr($this->get_field_id('window_target2')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('window_target2')); ?>"/><label
                    for="<?php echo esc_attr($this->get_field_id('window_target2')); ?>">Open Link In New Window</label>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('service_title3')); ?>">Title3:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('service_title3')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('service_title3')); ?>" type="text"
                   value="<?php echo esc_attr($service_title3); ?>"></input>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('service_title_color3')); ?>">Title Color3:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('service_title_color3')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('service_title_color3')); ?>" type="text"
                   value="<?php echo esc_attr($service_title_color3); ?>"></input>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('linkURL3')); ?>">Link URL3:<br/></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL3')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('linkURL3')); ?>" type="text"
                   value="<?php echo esc_attr($linkURL3); ?>"/>
            <label>(e.g. http://www.Google.com/...)</label><br/>
            <input class="checkbox" type="checkbox" <?php checked($instance['window_target3'], true) ?>
                   id="<?php echo esc_attr($this->get_field_id('window_target3')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('window_target3')); ?>"/><label
                    for="<?php echo esc_attr($this->get_field_id('window_target3')); ?>">Open Link In New Window</label>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('service_title4')); ?>">Title4:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('service_title4')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('service_title4')); ?>" type="text"
                   value="<?php echo esc_attr($service_title4); ?>"></input>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('service_title_color4')); ?>">Title Color4:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('service_title_color4')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('service_title_color4')); ?>" type="text"
                   value="<?php echo esc_attr($service_title_color4); ?>"></input>
        </p>
        <p><label for="<?php echo esc_attr($this->get_field_id('linkURL4')); ?>">Link URL4:<br/></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL4')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('linkURL4')); ?>" type="text"
                   value="<?php echo esc_attr($linkURL4); ?>"/>
            <label>(e.g. http://www.Google.com/...)</label><br/>
            <input class="checkbox" type="checkbox" <?php checked($instance['window_target4'], true) ?>
                   id="<?php echo esc_attr($this->get_field_id('window_target4')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('window_target4')); ?>"/><label
                    for="<?php echo esc_attr($this->get_field_id('window_target4')); ?>">Open Link In New Window</label>
        </p>
        <?php
    }
}
function cms_block_widgets()
{
    global $wp_widget_factory;
    $wp_widget_factory->register('CMSBlockWidget');
}
add_action('widgets_init', 'cms_block_widgets');
// end CMSBlockWidget
?>
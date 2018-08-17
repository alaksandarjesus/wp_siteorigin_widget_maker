<?php

/**
 * Widget Name: {widgetname} Widget
 * 
 * Description: {description}
 * 
 * Author: {author}
 * 
 * Author URI: {author_uri}
 * 
 * Email: {email}
 * 
 */


 
class {widgetclass}_Widget extends SiteOrigin_Widget
{

    function __construct()
    {

        parent::__construct(
            '{widgetname_hyphened}-widget',
            __('{widgetname} Widget', '{widgetname_hyphened}-widget-text-domain'),
            array(
                'description' => __('Description for {widgetname} Widget.', '{widgetname_hyphened}-widget-text-domain'),
            ),
            plugin_dir_path(__FILE__)
        );
    }

    function initialize(){
       
        $this->register_frontend_scripts(
            array(
                array( '{widgetname_hyphened}', get_template_directory_uri() .'/widgets/{widgetname_underscored}/js/{widgetname_hyphened}.js', array('app'), '1.0' )
            )
        );

        $this->register_frontend_styles(
            array(
                array( '{widgetname_hyphened}', get_template_directory_uri() .'/widgets/{widgetname_underscored}/css/{widgetname_hyphened}.css',array('all'), '1.0' )
            )
        );
    }

    function get_widget_form()
    {
        return array(
            'title' => array(
                'type' => 'text',
                'label' => __('Title', '{widgetname_hyphened}-widget-text-domain'),
                'default' => __('', '{widgetname_hyphened}-widget-text-domain'),
                'placeholder' => __('Enter title here', '{widgetname_hyphened}-widget-text-domain'),
            ),
        );
    }

    function get_template_variables($instance, $args)
    {
      
        return array(
            "title_from_form" => $instance['title']
        );
    }

    function get_template_name($instance)
    {
        return 'template';
    }
}
siteorigin_widget_register('{widgetname_hyphened}-widget', __FILE__, '{widgetclass}_Widget');


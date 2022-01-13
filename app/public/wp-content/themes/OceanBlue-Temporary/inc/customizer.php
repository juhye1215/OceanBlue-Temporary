<?php

function wpb_customize_register($wp_customize){
    //쇼케이스 추카함
    $wp_customize -> add_section('showcase', array(
        'title' => __('Showcase','ocean-blue-temporary'),
        'description' => sprintf(__('Options for showcase','ocean-blue-temporary')),
        'priority' =>130
    ));

  //이미지추가
    $wp_customize -> add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory').'/img/bg.jpg',
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control (new WP_Customize_Image_Control($wp_customize,'showcase_image',array(
        'label' => __('Showcase Image' , 'ocean-blue-temporary'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' =>1
    )));




    $wp_customize -> add_setting('showcase_heading', array(
        'default' => _x('Ocean Blue Hawaii', 'ocean-blue-temporary') ,
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control ('showcase_heading', array(
        'label'=> __('Heading', 'ocean-blue-temporary'),
        'section' => 'showcase',
        'priority' => 2
    ));

    //button link
    $wp_customize -> add_setting('btn_url', array(
        'default' => _x('http://google.com', 'ocean-blue-temporary') ,
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control ('btn_url', array(
        'label'=> __('Button URL', 'ocean-blue-temporary'),
        'section' => 'showcase',
        'priority' => 3
    ));
  //button name
    $wp_customize -> add_setting('btn_text', array(
        'default' => _x('View More', 'ocean-blue-temporary') ,
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control ('btn_text', array(
        'label'=> __('Button Text', 'ocean-blue-temporary'),
        'section' => 'showcase',
        'priority' => 4
    ));


}
add_action('customize_register', 'wpb_customize_register');

?>
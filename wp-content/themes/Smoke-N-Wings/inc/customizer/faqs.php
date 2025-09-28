<?php 
/**
 * FAQs Section heading
 */


function smokeWings_heading_customizer($customizer){
    //Settings
    $customizer->add_section('faq_section', array(
        'title' => __('FAQs Settings', 'smokeWings'),
        'priority' => 80,
    ));

    $customizer->add_setting('faq_title', array(
        'default' => __('Frequently Asked Questions', 'smokeWings'),
    ));
    $customizer->add_control('faq_title', array(
        'label' => __("FAQ's Title", 'smokeWings'),
        'section' => 'faq_section',
        'type' => 'text',
    ));


     // faqs  image
$customizer->add_setting('faq_image', array(
    'default' => get_template_directory_uri() . '/assets/images/faqs.png',
));

$customizer->add_control(new WP_Customize_Image_Control(
    $customizer,
    'faq_image_control',
    array(
        'label'    => __('Faqs Image', 'smokeWings'),
        'section'  => 'faq_section',
        'settings' => 'faq_image',
    )
    ));


}
add_action('customize_register','smokeWings_heading_customizer');
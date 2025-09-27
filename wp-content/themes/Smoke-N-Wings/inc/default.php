<?php 

/**
 * Summary of smokeWings_setup_theme default
 * @return void
 */
function smokeWings_setup_theme()
{

    // Enable post thumbnails for posts and pages
    add_theme_support( 'post-thumbnails', array( 'post','page','slider','testimonials','services','team_members') );

    
    // Enable dynamic title tag support
    add_theme_support('title-tag'); 


    register_nav_menus(array(
        'smokeWings_header_menu' => __('Smoke Wings Header Menu', 'smokeWings'),
        'smokeWings_mobile_menu' => __('Smoke Wings Mobile Menu', 'smokeWings'),
        
        // Footer Menu
        'smokeWings_footer_menu1' => __('Smoke-N-Wings Footer Menu1', 'smokeWings'),
        'smokeWings_footer_menu2' => __('Smoke-N-Wings Footer Menu2', 'smokeWings'),
    ));
}
add_action('after_setup_theme', 'smokeWings_setup_theme');






<?php

add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'test_media');
add_action('after_setup_theme', 'test_after_setup');
add_action('widgets_init', 'test_widgets');

function test_media()
{
    wp_enqueue_style('test-main', get_stylesheet_uri());

    wp_enqueue_script('test-main-script', get_template_directory_uri() . '/assets/js/script.js');
}

function test_after_setup()
{
    register_nav_menu('top', 'My news Menu');
}

function test_widgets()
{
    register_sidebar([
        'name' => 'sidebar-right',
        'id' => 'sidebar-right',
        'description' => 'Right Column',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => "</div>\n",
    ]);
    register_sidebar([
        'name' => 'sidebar-top',
        'id' => 'sidebar-top',
        'description' => 'Top Column',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => "</div>\n",
    ]);
}

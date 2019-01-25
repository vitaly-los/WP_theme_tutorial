<?php

add_action('wp_enqueue_scripts', 'test_media');

function test_media()
{
    wp_enqueue_style('test_main', get_stylesheet_uri());
}

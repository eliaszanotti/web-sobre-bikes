<?php
include_once(get_template_directory() . '/functions/frame/html.php');
include_once(get_template_directory() . '/functions/frame/meta-box.php');
include_once(get_template_directory() . '/functions/frame/taxonomy.php');
include_once(get_template_directory() . '/functions/frame/utils.php');

function sbrCustomFramePostType() {
    register_post_type('frame', array(
        'labels' => array(
            'name' => 'Cadres',
            'singular_name' => 'Cadre',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'excerpt', 'thumbnail'),
        'menu_icon' => 'dashicons-store',
    ));
}

add_action('init', 'sbrCustomFramePostType');
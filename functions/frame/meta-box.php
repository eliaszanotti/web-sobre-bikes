<?php

function add_custom_meta_box() {
    add_meta_box(
        'custom_frame_type',
        'Type de cadre',
        'html_frame_type',
        'frame',
        'normal',
        'default'
    );
    add_meta_box(
        'custom_wheel_size',
        'Taille de roue',
        'html_wheel_size',
        'frame',
        'normal',
        'default'
    );
    add_meta_box(
        'color_selection_metabox',
        'Sélection de Couleurs',
        'html_color_selection_metabox',
        'frame',
        'normal',
        'default'
    );
}

function save_custom_meta($post_id) {
    if (array_key_exists('frame_type', $_POST)) {
        $frame_type = sanitize_text_field($_POST['frame_type']);
        update_post_meta($post_id, 'frame_type', $frame_type);
        wp_set_post_terms($post_id, $frame_type, 'frame-type', false);
    }
    if (array_key_exists('wheel_size', $_POST)) {
        $wheel_size = sanitize_text_field($_POST['wheel_size']);
        update_post_meta($post_id, 'wheel_size', $wheel_size);
        wp_set_post_terms($post_id, $wheel_size, 'wheel-size', false);
    }
    if (array_key_exists('frame_color', $_POST)) {
        $frame_color = sanitize_text_field($_POST['frame_color']);
        update_post_meta($post_id, 'frame_color', $frame_color);
        wp_set_post_terms($post_id, $frame_color, 'frame_color', false);
    }
}

add_action('add_meta_boxes', 'add_custom_meta_box');
add_action('save_post', 'save_custom_meta');
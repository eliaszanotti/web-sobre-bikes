<?php
function add_custom_meta_box() {
    add_meta_box(
        'custom_product_type',
        'Type de produit',
        'html_product_type',
        'product',
        'normal',
        'high'
    );
}

function save_custom_meta($post_id) {
    if (array_key_exists('product_type', $_POST)) {
        $product_type = sanitize_text_field($_POST['product_type']);
        update_post_meta($post_id, 'product_type', $product_type);
        wp_set_post_terms($post_id, $product_type, 'product_type', false);
    }
}

add_action('add_meta_boxes', 'add_custom_meta_box');
add_action('save_post', 'save_custom_meta');
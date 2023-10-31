<?php
function wc_add_categories() {
    $frames_category = wp_insert_term('Cadres', 'product_cat', array(
        'description' => 'Catégorie pour les cadres',
        'slug' => 'frames',
    ));
    if (!is_wp_error($frames_category)) {
        wp_insert_term('Taille de roues', 'product_cat', array(
            'description' => 'Sous-catégorie pour la taille de roue',
            'parent' => $frames_category['term_id'],
            'slug' => 'wheel_size',
        ));
        wp_insert_term('Type de cadre', 'product_cat', array(
            'description' => 'Sous-catégorie pour le type de cadre',
            'parent' => $frames_category['term_id'],
            'slug' => 'frame_type',
        ));
    }
    wp_insert_term('Pieces', 'product_cat', array(
        'description' => 'Catégorie pour les pieces detachees',
        'slug' => 'pieces',
    ));
    wp_insert_term('Produits d\'occasion', 'product_cat', array(
        'description' => 'Catégorie pour les produits d\'occasion',
        'slug' => 'used',
    ));
    wp_insert_term('Stickers', 'product_cat', array(
        'description' => 'Catégorie pour les stickers',
        'slug' => 'stickers',
    ));
}

add_action('wp_ajax_wc_add_categories', 'wc_add_categories');
add_action('wp_ajax_nopriv_wc_add_categories', 'wc_add_categories');

function wc_add_attributes() {
    $attribute_slug = 'size';
    if (!in_array($attribute_slug, wc_get_attribute_taxonomy_names())) {
        $attribute = wc_create_attribute(array(
            'name' => 'Taille',
            'slug' => $attribute_slug,
            'type' => 'select',
            'order_by' => 'menu_order',
            'has_archives' => false,
        ));
        if ($attribute) {
            $terms = array('S', 'M', 'L', 'XL');
            foreach ($terms as $term_name) {
                wp_insert_term($term_name, 'pa_size', array(
                    'slug' => sanitize_title($term_name),
                ));
            }
        }
    }    
    $attribute_slug = 'color';
    if (!in_array($attribute_slug, wc_get_attribute_taxonomy_names())) {
        $attribute = wc_create_attribute(array(
            'name' => 'Couleur',
            'slug' => $attribute_slug,
            'type' => 'select',
            'order_by' => 'menu_order',
            'has_archives' => false,
        ));
        if ($attribute) {
            $terms = array(
                'Noir',
                'Blanc crème',
                'Orange',
                'Vert',
                'Olive',
                'Bleu'
            );
            foreach ($terms as $term_name) {
                wp_insert_term($term_name, 'pa_color', array(
                    'slug' => sanitize_title($term_name),
                ));
            }
        }
    }
}

add_action('init', 'wc_add_attributes');
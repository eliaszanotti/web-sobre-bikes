<?php
function theme_add_woocommerce_categories() {
    wp_insert_term('Cadres', 'product_cat', array(
        'description' => 'Catégorie pour les cadres',
        'slug' => 'frames',
    ));
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

add_action('wp_ajax_theme_add_woocommerce_categories', 'theme_add_woocommerce_categories');
add_action('wp_ajax_nopriv_theme_add_woocommerce_categories', 'theme_add_woocommerce_categories');
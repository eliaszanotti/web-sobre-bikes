function theme_add_woocommerce_categories() {
    wp_insert_term('Catégorie 1', 'product_cat', array(
        'description' => 'Description de la catégorie 1',
        'slug' => 'categorie-1',
    ));

    wp_insert_term('Catégorie 2', 'product_cat', array(
        'description' => 'Description de la catégorie 2',
        'slug' => 'categorie-2',
    ));

    die();
}

add_action('wp_ajax_theme_add_woocommerce_categories', 'theme_add_woocommerce_categories');
add_action('wp_ajax_nopriv_theme_add_woocommerce_categories', 'theme_add_woocommerce_categories');
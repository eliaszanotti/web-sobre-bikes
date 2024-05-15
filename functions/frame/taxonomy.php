<?php
function sbrCustomFrameTaxonomy() {
    register_taxonomy('product_type', 'product', array(
        'labels' => 'Type de produit',
        'hierarchical' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
    ));
}

add_action('init', 'sbrCustomFrameTaxonomy');
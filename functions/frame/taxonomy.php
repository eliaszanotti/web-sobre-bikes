<?php

function sbrCustomFrameTaxonomy() {
    register_taxonomy('frame-type', 'frame', array(
        'label' => 'Type de cadre',
        'hierarchical' => false,
        'show_ui' => false,
        'show_admin_column' => true,
    ));
    register_taxonomy('wheel-size', 'frame', array(
        'label' => 'Taille de roue',
        'hierarchical' => false,
        'show_ui' => false,
        'show_admin_column' => true,
    ));
    register_taxonomy('frame_color', 'frame', array(
        'label' => 'Couleur mise en avant',
        'hierarchical' => false,
        'show_ui' => false,
        'show_admin_column' => true,
    ));
    //  WooCommerce
    register_taxonomy('product_type', 'product', array(
        'labels' => 'Type de produit',
        'hierarchical' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
    ));
}

add_action('init', 'sbrCustomFrameTaxonomy');
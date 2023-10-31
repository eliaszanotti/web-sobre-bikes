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
}

add_action('init', 'sbrCustomFrameTaxonomy');
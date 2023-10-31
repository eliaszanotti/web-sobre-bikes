<?php

function hide_taxonomy_description() {
    global $taxnow;
    if ($taxnow === 'frame-type' || $taxnow === 'wheel-size') {
        echo '<style>.term-description-wrap { display: none; }</style>';
    }
}

function custom_manage_frame_columns($columns) {
    unset($columns['date']);
    return $columns;
}

add_action('admin_head-edit-tags.php', 'hide_taxonomy_description');
add_action('admin_head-term.php', 'hide_taxonomy_description');
add_filter('manage_edit-frame_columns', 'custom_manage_frame_columns');
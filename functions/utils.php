<?php
function custom_manage_frame_columns($columns) {
    unset($columns['date']);
    return $columns;
}

add_filter('manage_edit-frame_columns', 'custom_manage_frame_columns');
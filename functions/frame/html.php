<?php
function html_frame_type($post) {
    $frame_type = get_post_meta($post->ID, 'frame_type', true); ?>
    <label for="frame_type">Choisissez le type de cadre :</label>
    <select id="frame_type" name="frame_type">
        <option value="VTT" <?php selected($frame_type, 'VTT'); ?>>VTT</option>
        <option value="Route" <?php selected($frame_type, 'Route'); ?>>Route</option>
        <option value="Gravel" <?php selected($frame_type, 'Gravel'); ?>>Gravel</option>
    </select> <?php
}
function html_wheel_size($post) {
    $wheel_size = get_post_meta($post->ID, 'wheel_size', true); ?>
    <label for="wheel_size">Choisissez la taille de roue :</label>
    <select id="wheel_size" name="wheel_size">
        <option value='27.5"' <?php selected($wheel_size, '27.5"'); ?>>27.5"</option>
        <option value='29"' <?php selected($wheel_size, '29"'); ?>>29"</option>
        <option value="700" <?php selected($wheel_size, '700'); ?>>700</option>
    </select> <?php
}

function html_color_selection_metabox($post) {
    $frame_color = get_post_meta($post->ID, 'frame_color', true); ?>
    <label for="frame_color">Choisissez la couleur a mettre en avant :</label>
    <select id="frame_color" name="frame_color">
        <option value='576645' <?php selected($frame_color, '576645'); ?>>Olive</option>
        <option value='2f4858' <?php selected($frame_color, '2f4858'); ?>>Bleu</option>
        <option value='bc412d' <?php selected($frame_color, 'bc412d'); ?>>Orange</option>
    </select> <?php
}

function html_product_selection_metabox($post) {
    $product_id = get_post_meta($post->ID, '_frame_product_id', true); ?>
    <label for="frame_product_id">Choisissez le produit WooCommerce :</label>
    <select id="frame_product_id" name="frame_product_id">
        <?php
        $products = get_posts(array('post_type' => 'product', 'numberposts' => -1));
        foreach ($products as $product) {
            echo '<option value="' . $product->ID . '"' . selected($product_id, $product->ID, false) . '>' . $product->post_title . '</option>';
        }
        ?>
    </select> <?php
}
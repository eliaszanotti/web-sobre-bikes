<?php
function html_product_type($post) {
    $product_type = get_post_meta($post->ID, 'product_type', true); ?>
    <label for="product_type">Choisissez le type de produit :</label>
    <select id="product_type" name="product_type">
        <option value='frame' <?php selected($product_type, 'frame'); ?>>Cadre</option>
        <option value='fork' <?php selected($product_type, 'fork'); ?>>Fourche</option>
        <option value='other' <?php selected($product_type, 'autre'); ?>>Autre</option>
    </select> <?php
}
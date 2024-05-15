<?php
function html_product_type($post) {
    $product_type = get_post_meta($post->ID, 'product_type', true); ?>
    <label for="product_type">Choisissez le type de produit :</label>
    <select id="product_type" name="product_type">
        <option value='cadre' <?php selected($product_type, 'cadre'); ?>>Cadre</option>
        <option value='fourche' <?php selected($product_type, 'fourche'); ?>>Fourche</option>
        <option value='autre' <?php selected($product_type, 'autre'); ?>>Autre</option>
    </select> <?php
}
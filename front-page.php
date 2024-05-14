<?php get_header() ?>

<section class="last-posts-home">
    <?php $query = new WP_Query([
        'post_type' => array('post','frame'),
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
    ]);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); 
        // Get post type name
        $postTypeObject = get_post_type_object(get_post_type());
        if ($postTypeObject) {
            $postTypeName = $postTypeObject->labels->singular_name;
        } ?>
        <div class="card">
            <div class="meta">
                <h5 class="date"><?php echo get_the_date('j F Y'); ?> | <?php echo $postTypeName ?></h5>
                <?php the_title('<h2 class="post-title">', '</h2>'); ?>
                <?php if (get_post_type() == "frame") :
                    $type = get_the_terms(get_the_ID(), 'frame-type');
                    $size = get_the_terms(get_the_ID(), 'wheel-size');
                    if ($type && !is_wp_error($type)) {echo '<h3 class="frame-type">' . array_shift($type)->name . '</h3><br>';}
                    if ($size && !is_wp_error($size)) {echo '<h3 class="wheel-size">Taille de roues: ' . array_shift($size)->name . '</h3><br>';}
                endif; ?>
                <span class="excerpt">
                    <?php the_excerpt(); ?>
                </span>
            </div>
            <div class="thumbnail"><?php the_post_thumbnail('large'); ?></div>
        </div>
        <?php endwhile;
    endif;
    wp_reset_postdata(); ?>
</section>

<div class="triangle-light-dark"></div>
<div class="triangle-dark-light"></div>
<div class="triangle-light-dark"></div>

<section class="last-items">
    <h2 class="products-title">Les derniers produits:</h2>
    <div class="center-div">
    <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <a href="<?php echo get_permalink(); ?>" class="card product-card">
                    <div class="meta">
                        <?php the_title('<h2 class="post-title product-title">', '</h2>'); ?>
                        <?php $product = wc_get_product(get_the_ID());
                        if ($product) {
                            echo '<div class="date product-price">';
                            echo $product->get_price_html();
                            echo '</div>';
                        } ?>
                        <span class="excerpt product-excerpt">
                            <?php the_excerpt(); ?>
                        </span>
                    </div>
                    <div class="thumbnail"><?php the_post_thumbnail('large'); ?></div>
                </a>
            <?php endwhile;
        endif;
        
        wp_reset_postdata();
    ?>
    </div>
</section>

<div class="triangle-dark-light"></div>
<div class="triangle-light-dark"></div>
<div class="triangle-dark-light"></div>

<section class="steel">
    <?php $query = new WP_Query(['page_id' => 82]); ?>
    <div class="steel-center">
        <?php if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="steel-left-content">
                    <div class="steel-content">
                        <h1 class="steel-title"><?php the_title() ?></h1>
                        <?php the_excerpt() ?>
                    </div>
                    <div class="right-align">
                        <a href="<?php the_permalink() ?>" class="steel-show-more button-sm-dark">Lire la suite</a>
                    </div>
                </div>
                <?php the_post_thumbnail('large') ?>
            <?php endwhile;
        endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<div class="triangle-light-dark"></div>

<?php get_footer() ?>
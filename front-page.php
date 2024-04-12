<?php get_header() ?>

<section class="carousel">
    <?php $query = new WP_Query([
        'post_type' => array('post','frame'),
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
    ]);
    $counter = 0;

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); 
        // Get post type name
        $postTypeObject = get_post_type_object(get_post_type());
        if ($postTypeObject) {
            $postTypeName = $postTypeObject->labels->singular_name;
        } ?>
            <div class="carousel-slide">
                <?php if (has_post_thumbnail() && $counter % 2 == 0) : ?>
                    <div class="carousel-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                <?php endif; ?>
                <div class="carousel-card card">
                    <div class="carousel-card-top">
                        <h4 class="carousel-date"><?php echo get_the_date('j F Y'); ?> | <?php echo $postTypeName ?></h4>
                        <?php the_title('<h1 class="carousel-title">', '</h1>'); ?>
                        <?php if (get_post_type() == "frame") :
                            $type = get_the_terms(get_the_ID(), 'frame-type');
                            $size = get_the_terms(get_the_ID(), 'wheel-size');
                            if ($type && !is_wp_error($type)) {echo '<h3 class="carousel-frame-type">' . array_shift($type)->name . '</h3><br>';}
                            if ($size && !is_wp_error($size)) {echo '<h3 class="carousel-wheel-size">Taille de roues: ' . array_shift($size)->name . '</h3><br>';}
                        endif; ?>
                        <span class="carousel-excerpt">
                            <?php the_excerpt(); ?>
                        </span>
                    </div>
                    <div class="carousel-card-bottom right-align">
                        <?php if (get_post_type() == "frame") : ?>
                            <a href="<?php the_permalink(); ?>" class="carousel-show-more">voir le cadre</a>
                        <?php endif; ?>
                        <?php if (get_post_type() == "post") : ?>
                            <a href="<?php the_permalink(); ?>" class="carousel-show-more">lire l'article</a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if (has_post_thumbnail() && $counter % 2 == 1) : ?>
                    <div class="carousel-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                <?php endif;
                $counter++ ?>
            </div>
        <?php endwhile;
    endif;
    wp_reset_postdata(); ?>
</section>

<div class="triangle-light-dark"></div>

<div class="last-items">
    <div class="center-div">
    <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 6,
            'orderby' => 'date',
            'order' => 'DESC',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="product-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="card-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                    <?php endif ?>

                    <div class="product-meta">
                        <?php the_title('<h2 class="product-title">', '</h2>'); ?>
                        <?php $product = wc_get_product(get_the_ID());
                        if ($product) {
                            echo '<div class="product-price">';
                            echo $product->get_price_html();
                            echo '</div>';
                        } ?>
                        <?php the_excerpt(); ?>
                    </div>

                    <a href="#TODO" class="show-more">Voir plus...</a>
                </div>
            <?php endwhile;
        endif;
        
        wp_reset_postdata();
    ?>
    </div>
</div>
<!-- 
<div class="triangle-dark-light"></div>
<div class="triangle-dark-light"></div>
<div class="triangle-dark-light"></div>
<div class="triangle-dark-light"></div>
<div class="triangle-dark-light"></div>
<div class="triangle-dark-light"></div>
<div class="triangle-dark-light"></div>
<div class="triangle-dark-light"></div>

<section class="all-frames">
    <?php $query = new WP_Query([
        'post_type' => 'frame',
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
    ]); ?>

    <h1 class="all-title">Les cadres</h1>
    <div class="all-cards">
        <?php if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="all-card">
                    <?php the_post_thumbnail('large') ?>
                    <div class="all-hover">
                        <h2 class="all-card-title"><?php the_title(); ?></h2>
                        <?php 
                        $type = get_the_terms(get_the_ID(), 'frame-type');
                        $size = get_the_terms(get_the_ID(), 'wheel-size');
                        if ($type && !is_wp_error($type)) {echo '<h4 class="all-card-type">' . array_shift($type)->name . '</h4>';}
                        if ($size && !is_wp_error($size)) {echo '<h4 class="all-card-wheel">Taille de roues: ' . array_shift($size)->name . '</h4>';}
                        ?>
                    </div>
                </a>
            <?php endwhile;
        endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<div class="triangle-light-dark"></div>
<div class="triangle-dark-light"></div>
<div class="triangle-light-dark"></div>

<section class="steel">
    <?php $query = new WP_Query(['page_id' => 82]); ?>
    <div class="steel-center">
        <?php if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="steel-left-content">
                    <div class="steel-content">
                        <h1 class="steel-title"><?php the_title() ?></h1> <!-- a chager par le title de la page Steel */ -->
                        <?php the_excerpt() ?>
                    </div>
                    <div class="right-align">
                        <a href="<?php the_permalink() ?>" class="steel-show-more">Lire la suite</a>
                    </div>
                </div>
                <?php the_post_thumbnail('large') ?>
            <?php endwhile;
        endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<div class="triangle-dark-light"></div>
<!-- <div class="triangle-light-dark"></div> -->
<!-- <div class="triangle-dark-light"></div> -->
<!-- <div class="triangle-light-dark"></div> -->

<?php get_footer() ?> -->
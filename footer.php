<footer>
    <div class="logo">
        <h2 class="title">Sobre Bikes</h2>
    </div>

    <div class="pages">
        <h2 class="section-title">PAGES</h2>
		<nav class="footer-menu">
			<?php wp_nav_menu(array(
				'theme_location' => 'footer-menu',
				'menu_class' => 'footer-menu-class',
				'depth' => 1,
				'container' => ''
			)); ?>
		</nav>
    </div>

    <div class="frames">
        <h2 class="section-title">CADRES</h2>
        <?php $args = array(
            'post_type' => 'frame',
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $query = new WP_Query($args); 

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <a href="<?php the_permalink() ?>" class="footer-link"><?php the_title() ?></a>
            <?php endwhile;
        endif; ?>
    </div>
</footer>
    
    <?php wp_footer() ?>
</body>
</html>
<?php get_header(); ?>

<section class="posts-section">
    <h2 class="title card"><?php single_post_title(); ?></h2>
    <?php $args = array(
        'posts_per_page' => 12,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $query = new WP_Query($args);

	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="card">
				<div class="meta">
					<h5 class="date"><?php echo get_the_date('j F Y'); ?></h5>
					<?php the_title('<h2 class="post-title">', '</h2>'); ?>
					<span class="excerpt">
						<?php the_excerpt(); ?>
					</span>
				</div>			
				<div class="thumbnail"><?php the_post_thumbnail('large'); ?></div>
			</a>
		<?php endwhile;
	endif; 
	wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>
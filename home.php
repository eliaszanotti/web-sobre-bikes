<?php get_header(); ?>

<section class="posts-section">
	
		<h1 class="page-title"><?php the_archive_title(); ?></h1>
		<?php the_archive_description('<div class="archive-description">', '</div>'); ?>


</section>





<!-- 
<main id="main" class="site-main" role="main">
	<header>
		<h1 class="page-title"><?php the_archive_title(); ?></h1>
		<?php the_archive_description('<div class="archive-description">', '</div>'); ?>
	</header>

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</header>

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>

				<footer class="entry-footer">
					<?php edit_post_link(__('Edit', 'textdomain'), '<span class="edit-link">', '</span>'); ?>
				</footer>
			</article>
		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>
		<?php get_template_part('template-parts/content', 'none'); ?>
	<?php endif; ?>
</main> -->

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
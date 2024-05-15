<?php get_header() ?>

<div class="post-body">
	<div class="post-content">
        <?php $postTypeObject = get_post_type_object(get_post_type());
        if ($postTypeObject) {
            $postTypeName = $postTypeObject->labels->singular_name;
        } ?>
		<div class="post-meta">
			<span class="post-type"><?php echo $postTypeName ?></span>
			<span class="post-date">  Publié le <?php echo get_the_date('j F Y'); ?></span>
		</div>
        <h1 class="post-title"><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer() ?>
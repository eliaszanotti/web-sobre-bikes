<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
</head>

<body>
	<header>
		<a class="header-title" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
		<nav class="header-menu">
			<?php wp_nav_menu(array(
				'theme_location' => 'main-menu',
				'menu_class' => 'main-menu-class',
				'depth' => 1,
				'container' => ''
			)); ?>
		</nav>
		<h2 class="test">mon compte + panier</h2>
    </header>
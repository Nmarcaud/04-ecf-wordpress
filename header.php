<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head();?> 
</head>
<body <?php body_class();?>>

    <?php wp_body_open();?> 

	<header class="main-header">
		<div class="container">
			<div class="logo">Mes recettes</div>

			<!--
			<nav class="main-nav">
				<ul class="menu">
					<li class="menu-item"><a href="#" class="menu-link active">Accueil</a></li>
					<li class="menu-item"><a href="blog.html" class="menu-link">Blog</a></li>
					<li class="menu-item"><a href="recipe-list.html" class="menu-link">Recettes</a></li>
					<li class="menu-item"><a href="page.html" class="menu-link">A propos</a></li>
					<li class="menu-item"><a href="contact.html" class="menu-link">Contact</a></li>
				</ul>
			</nav>
			-->

			<?php wp_nav_menu(array(
				'theme_location'	=> 	'main',
				'menu_class'		=> 	'menu',
				'container'			=> 	'nav',
				'container_class'	=> 	'main-nav',
				'fallback_cb'		=>	FALSE,
				'depth'				=> 	1,
			)); ?>


			<form action="search.html" class="search-form">
				<label for="search" class="sr-only">Rechercher</label>
				<input type="search" id="search" placeholder="Recherche ...">
				<button type="submit">Ok</button>
			</form>
			
		</div>
	</header>
	<main class="main-content">
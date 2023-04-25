<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollow" />
		<?php endif;?>
		
		<?php wp_head() ?>
		<title><?php echo bloginfo('name'); echo ' - '; bloginfo('description');?></title> 

		<meta charset="<?php bloginfo('charset')?>" />

		<!-- Stylesheets-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;800&family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo THEME_URL ?>public/main.css">
	</head>
	

	<body <?php body_class()?>>
		<header class="header --open">
			<div class="headerInner">
				<a class="headerLogo" href="<?php echo esc_url(home_url('/')) ?>">
					<img src="<?php echo THEME_URL; ?>_dev/img/logo_small.png" alt="logo">
				</a>
				<nav class="navLinks">
					<?php wp_nav_menu(['theme_location' => 'main_nav']); ?>
				</nav>
				<div class="hamburger">
					<button>Burger</button>
				</div>
			</div>

		</header>
		
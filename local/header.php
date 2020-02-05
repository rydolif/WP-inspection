<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta name="theme-color" content="#000">
	<meta property="og:image" content="<?php the_field('preview', 'option'); ?>">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">

</head>

	<?php wp_head(); ?>

<body>

	<header class="header" id="header">
		<div class="header__container container">

			<a href="<?php echo get_home_url(); ?>" class="header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header__logo.png" alt="">
				<b>СОАСТО</b>
				<span>Союз авторизованных сервисов <br>технического осмотра</span>
			</a>

			<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="header__tel"><?php the_field('tel', 'option'); ?></a>
			
		</div>
	</header>
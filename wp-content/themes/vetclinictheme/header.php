<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php 
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
		wp_head();
	?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/site-js.js"></script>
	<title>Document</title>
</head>
<body>

<div class="content-wrapper"> </div>
<div class="site_menu">
	<?php
		wp_nav_menu( array(
			'menu'            => 'Header Menu',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
												  // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
			'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
			'container_class' => 'site-menu-container',              // (string) class контейнера (div тега)
			'menu_class'      => 'site-menu-ul', // (string) class самого меню (ul тега)
			'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
		) );
	?>
		
</div>
<div class="site-branding">
</div>
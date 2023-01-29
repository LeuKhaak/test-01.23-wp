<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>insaitika-test</title>

	<?php wp_head(); ?>

	<!--<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="style.css" />

	<link rel="stylesheet" href="media.css" />-->

</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header-wrapper">
				<div class="logo-image"></div>
				<nav class="navigation not-show">
					<div class="nav-link">
						<button class="courses-list-toggle" onclick="toggleCoursesList()">Курсы <span class="arrow"></span></button>
						<ul class="courses-list">
							<li class="courses-item"><a class="course-link" href="#courses"><?php the_field('management-coaching'); ?></a></li>
							<li class="courses-item"><a class="course-link" href="#courses"><?php the_field('android-development'); ?></a></li>
							<li class="courses-item"><a class="course-link" href="#courses"><?php the_field('digital-marketing'); ?></a></li>
							<li class="courses-item"><a class="course-link" href="#courses"><?php the_field('soft-skills'); ?></a></li>
							<li class="courses-item"><a class="course-link" href="#courses"><?php the_field('unity-game-developer'); ?></a></li>
							<li class="courses-item"><a class="course-link" href="#courses"><?php the_field('web-designer'); ?></a></li>
							<li class="courses-item"><a class="course-link" href="#courses"><?php the_field('python-developer'); ?></a></li>
							<li class="courses-item"><a class="course-link" href="#courses"><?php the_field('devops-engineer'); ?></a></li>
						</ul>
					</div>
					<a class="nav-link" href="#about">О компании</a>
					<a class="nav-link" href="#">Акции</a>
					<a class="nav-link" href="#contacts">Контакты</a>
				</nav>
				<a class="nav-link phone" href="#"><?php the_field('phone'); ?></a>
				<div class="header-telegram">
					<a class="telegram" href="<?php the_field('telegram-link'); ?>"></a>
				</div>
				<button class="hamburger" onclick="toggleMenu()"></button>
			</div>
		</div>
	</header>
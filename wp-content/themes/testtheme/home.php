<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="show-all-sections">
<main class="main">
	<div class="container">
		<div class="main-wrapper">
			<div class="main-left">
				<h1 class="main-title">Современное <span class="yellow-text">образование</span> без ограничений</h1>
				<div class="benefits-wrapper">
					<div class="benefit">Доступ из любой точки мира</div>
					<div class="benefit">Пожизненный доступ к материалу</div>
					<div class="benefit">8 направления освоения навыков</div>
					<div class="benefit">Для любого взраста</div>
				</div>
				<div class="main-buttons-wrapper">
					<button class="all-courses">Все курсы</button>
					<button class="free-lesson">Бесплатное занятие</button>
				</div>

			</div>
			<div class="main-image-wrapper">
				<div class="main-image-background"></div>
				<img class="main-image" src="<?php the_field('main-image'); ?>" alt="#">
			</div>

		</div>
	</div>
</main>
<section class="courses">
	<div class="courses-image-background-1"></div>
	<div class="courses-image-background-2"></div>
	<div class="container">
		<div class="courses-title-wrapper">
			<h2 class="courses-title"><a name="courses"></a></p>Кем <span class="yellow-text">стать</span>?</h2>
			<p class="courses-description">Выберите направление и начните изучать то, что вам интересно.
		</div>
		<div class="courses-wrapper">

			<div class="course-item item-1">
				<div class="course-item-title-wrapper">
					<div class="course-item-title">
						<h3>Управленческий коучинг</h3>
					</div>
					<div class="course-item-discount"><span>-24%</span></div>
				</div>
				<div class="course-item-description">
					<div class="course-item-image">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/course-image-1.png" alt="#">
					</div>
					<p>Курс для предпринимателей, руководителей отделов, продакт- и проджект-менеджеров — не только в
						ИТ-сфере,
						но и в офлайн-бизнесе.</p>
				</div>
				<p class="course-item-detail">Старт:<span>31 февраля</span></p>
				<p class="course-item-detail">Длительность:<span>24 месяца</span></p>
				<div class="course-item-prices">
					<div class="monthly"><span class="number">48 </span>BYN / мес.
						<p class="payment">Рассрочка на 24 месяца</p>
					</div>
					<div class="annual">
						<div class="full-pay"><span class="number">2 387 </span>BYN</div>
						<div class="reduced-pay"><span class="number">1984 </span>BYN</div>
					</div>
				</div>
				<div class="course-item-buttons">
					<button class="more-detail" onclick="showPopUp()">Подробнее<a class="detail-link"
							href="#item-1"></a></button>
					<button class="join">Записаться</button>
				</div>
			</div>

			<div class="course-item item-2">
				<div class="course-item-title-wrapper">
					<div class="course-item-title">
						<h3>Android-разработка</h3>
					</div>
					<div class="course-item-discount"><span>-10%</span></div>
				</div>
				<div class="course-item-description">
					<div class="course-item-image">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/course-image-2.png" alt="#">
					</div>
					<p>Курс мобильной разработки для новичков и junior-разработчиков.</p>
				</div>
				<p class="course-item-detail">Старт:<span>1 января</span></p>
				<p class="course-item-detail">Длительность:<span>10 дней</span></p>
				<div class="course-item-prices">
					<div class="monthly"><span class="number">48 </span>BYN / мес.
						<p class="payment">Рассрочка на 24 месяца</p>
					</div>
					<div class="full-pay"><span class="number">2 387 </span>BYN</div>
					<div class="reduced-pay"><span class="number">1984 </span>BYN</div>
				</div>
				<div class="course-item-buttons">
					<button class="more-detail" onclick="showPopUp()">Подробнее<a class="detail-link"
							href="#item-2"></a></button>
					<button class="join">Записаться</button>
				</div>
			</div>

			<div class="course-item item-3">
				<div class="course-item-title-wrapper">
					<div class="course-item-title">
						<h3>Digital-маркетинг</h3>
					</div>
					<div class="course-item-discount"><span>-30%</span></div>
				</div>
				<div class="course-item-description">
					<div class="course-item-image">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/course-image-3.png" alt="#">
					</div>
					<p>Курс по интернет-маркетингу, SMM, контекстной и таргетированной рекламе, копирайтингу, SEO и PR. На
						курсах преподают ведущие эксперты отрасли.</p>
				</div>
				<p class="course-item-detail">Старт:<span>31 февраля</span></p>
				<p class="course-item-detail">Длительность:<span>1 день</span></p>
				<div class="course-item-prices">
					<div class="monthly"><span class="number">48 </span>BYN / мес.
						<p class="payment">Рассрочка на 24 месяца</p>
					</div>
					<div class="full-pay"><span class="number">2 387 </span>BYN</div>
					<div class="reduced-pay"><span class="number">1984 </span>BYN</div>
				</div>
				<div class="course-item-buttons">
					<button class="more-detail" onclick="showPopUp()">Подробнее<a class="detail-link"
							href="#item-3"></a></button>
					<button class="join">Записаться</button>
				</div>
			</div>

			<div class="course-item item-4">
				<div class="course-item-title-wrapper">
					<div class="course-item-title">
						<h3>Soft Skills for Hard Times</h3>
					</div>
					<div class="course-item-discount"><span>-5%</span></div>
				</div>
				<div class="course-item-description">
					<div class="course-item-image">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/course-image-4.png" alt="#">
					</div>
					<p>Курс по переговорам, управлению конфликтами, креативному мышлению и не только.</p>
				</div>
				<p class="course-item-detail">Старт:<span>31 декабря</span></p>
				<p class="course-item-detail">Длительность:<span>2 дня</span></p>
				<div class="course-item-prices">
					<div class="monthly"><span class="number">48 </span>BYN / мес.
						<p class="payment">Рассрочка на 24 месяца</p>
					</div>
					<div class="full-pay"><span class="number">2 387 </span>BYN</div>
					<div class="reduced-pay"><span class="number">1984 </span>BYN</div>
				</div>
				<div class="course-item-buttons">
					<button class="more-detail" onclick="showPopUp()">Подробнее<a class="detail-link"
							href="#item-4"></a></button>
					<button class="join">Записаться</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about">
	<div class="about-image-background"></div>
	<div class="container">
		<div class="about-top-wrapper">
			<div class="about-title-wrapper">
				<h2 class="courses-title">Наша <span class="yellow-text">школа</span><a name="about"></a></h2>
				<p class="courses-description">В своём стремлении повысить качество жизни, они забывают, что перспективное
					планирование играет важную роль в формировании системы обучения кадров, соответствующей насущным
					потребностям.
				</p>
				<div class="results-wrapper">
					<div class="benefit">1000+ выпускников</div>
					<div class="benefit">80% трудоустроились</div>
				</div>
			</div>
			<div class="about-image">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/rocket.png" alt="#">
			</div>
		</div>
		<div class="about-command">
			<button class="slider left" onclick="moveLeft()"></button>
			<div class="persons-slider">
				<div class="slider-gallery" style="margin-left: 0px;">

				<?php
				global $post;

				$myposts = get_posts([ 
					'numberposts' => -1,
					'category' => 4
				]);

				if( $myposts ){
					foreach( $myposts as $post ){
						setup_postdata( $post );
				?>

					<div class="person">
					<?php the_post_thumbnail( 
						array(180, 179),
						array('class' => 'photo')
					); ?>
						<div class="person-description">
							<h4><?php the_title(); ?></h4>
							<p><?php the_content(); ?></p>
						</div>
					</div>
						
				<?php } } wp_reset_postdata(); ?>				
				
				</div>
			</div>
			<button class="slider right" onclick="moveRight()"></button>				
		</div>
</section>
<section class="feedback">
	<div class="feedback-image-background"></div>
	<div class="container">
		<h2 class="courses-title">Поможем в <span class="yellow-text">выборе</span>!</h2>
		<div class="feedback-wrapper">
			<div class="feedback-description">
				<p>
					Если у вас есть вопросы о формате или вы не знаете, что выбрать, оставьте свой номер — мы позвоним, чтобы
					ответить на все ваши вопросы.
				</p>
			</div>
			<form class="form">
				<div class="input-wrapper">
					<div class="input"><input type="tel" placeholder="Телефон"></div>
					<p>Позвоните нам для более быстрого ответа <span class="yellow-text">+375(33) 637-30-79</span></p>
				</div>
				<div class="submit-wrapper">
					<button class="submit" type="submit">Отправить</button>
					<p>Нажимая на кнопку, я соглашаюсь на обработку персональных данных.</p>
				</div>
			</form>
		</div>
	</div>
</section>
</div>
<section class="popup">
<div class="popup-wrapper">
	<div class="popup-header">
		<div class="popup-header-text">
			<h3 class="popup-title">Digital-маркетинг</h3>
			<p class="popup-description">Курс по интернет-маркетингу, SMM, контекстной и таргетированной рекламе,
				копирайтингу, SEO и PR. На курсах
				преподают ведущие эксперты отрасли.</p>
			<div class="popup-description-details">
				<p>Старт:<span>31 февраля</span></p>
				<p>Длительность:<span>24 месяца</span></p>
			</div>
		</div>
		<button class="popup-close popup-mini" onclick="closePopUp()"></button>
	</div>
	<div class="popup-main">
		<div class="popup-left">
			<h4 class="popup-left-title">Программа обучения</h4>

			<p>Вы узнаете, что такое интернет-маркетинг с точки зрения бизнеса и чего обычно ждет от маркетолога заказчик.
			</p>

			<div class="popup-slider">
				<button class="popup-slider-left"></button>
				<div class="popup-gallery-wrapper">
					<div class="popup-image">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/course-image-4.png" alt="#">
					</div>
					<div class="popup-image">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/course-image-2.png" alt="#">
					</div>
					<div class="popup-image">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/course-image-1.png" alt="#">
					</div>
					<div class="popup-image">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/course-image-3.png" alt="#">
					</div>
				</div>
				<button class="popup-slider-right"></button>
			</div>

			<div class="popup-programm">
				<div class="popup-programm-title">
					<h5>Основы интернет-маркетинга</h5>
					<button class="popup-close programm-close"></button>
				</div>
				<ul class="programm-list">
					<li class="programm-item"><span class="small-line"></span>Основные концепции маркетинга (маркетинг и
						бизнес)</li>
					<li class="programm-item"><span class="small-line"></span>Аудитория и инсайты</li>
					<li class="programm-item"><span class="small-line"></span>Анализ рынка и конкурентов</li>
					<li class="programm-item"><span class="small-line"></span>Бренды и позиционирование</li>
					<li class="programm-item not-required"><span class="small-line"></span>Карта пути клиента (CJM) и воронка
						продаж</li>
					<li class="programm-item"><span class="small-line"></span>Retention маркетинг (e-mail, sms, push,
						pop-up,
						чат-боты)</li>
				</ul>
			</div>
			<div class="popup-programm short">
				<div class="popup-programm-title">
					<h5>Стратегия digital-продвижения</h5>
					<button class="popup-close programm-close"></button>
				</div>
			</div>
			<div class="popup-programm short">
				<div class="popup-programm-title">
					<h5>Сайты и приложения</h5>
					<button class="popup-close programm-close"></button>
				</div>
			</div>
			<div class="popup-programm short">
				<div class="popup-programm-title">
					<h5>Аналитика для интернет-маркетинга</h5>
					<button class="popup-close programm-close"></button>
				</div>
			</div>

		</div>
		<div class="popup-right">
			<div class="popup-prices">
				<div class="popup-discount">-24%</div>
				<div class="popup-monthly"><span class="number">48 </span>BYN / мес.
					<p class="payment">Рассрочка на 24 месяца</p>
				</div>
				<div class="pay-variants">
					<div class="full-pay"><span class="number">2 387</span> BYN</div>
					<div class="reduced-pay"><span class="number">1984 </span>BYN</div>
				</div>
			</div>
			<button class="join">Записаться</button>
		</div>
	</div>
</div>
</div>
</section>

<?php get_footer(); ?>



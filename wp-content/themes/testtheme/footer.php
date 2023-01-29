<footer class="footer">
		<div class="container">
			<div class="footer-wrapper">
				<div class="footer-about">
					<div class="logo-image"></div>
					<p class="company-title">ООО “Бесконечные курсы”</p>
					<p>220140, Беларусь, г. Минск,<br>
						ул. Мира 2, д. 22, офис 222</p>
					<div class="social-media">
						<a class="whatsapp" href="<?php the_field('whatsapp-link'); ?>"></a>
						<a class="telegram" href="<?php the_field('telegram-link'); ?>"></a>
						<a class="viber" href="<?php the_field('viber-link'); ?>"></a>
					</div>
				</div>
				<div class="footer-courses">
					<h4 class="footer-courses-title">Курсы</h4>
					<div class="footer-courses-links">
						<a class="nav-link" href="#">Управленческий коучинг</a>
						<a class="nav-link" href="#">Разработчик игр на Unity</a>
						<a class="nav-link" href="#">Android-разработка</a>
						<a class="nav-link" href="#">Веб-дизайнер</a>
						<a class="nav-link" href="#">Digital-маркетинг</a>
						<a class="nav-link" href="#">Fullstack-разработчик на Python</a>
						<a class="nav-link" href="#">Soft Skills for Hard Times</a>
						<a class="nav-link" href="#">DevOps-инженер</a>
					</div>
				</div>
				<div class="footer-contacts"><a name="contacts"></a>
					<h4 class="footer-courses-title">Контакты</h4>
					<a class="nav-link contact-link" href="#"><?php the_field('phone'); ?></a>
					<a class="nav-link" href="#">sales@insaitika.com</a>
				</div>
			</div>
			<div class="uderline"></div>
			<div class="footer-links-wrapper">
				<p>©Все права защищены.</p>
				<div class="footer-links">
					<a class="footer-link" href="#">Политика конфиденциальности</a>
					<a class="footer-link" href="#">Публичная оферта</a>
				</div>
			</div>
		</div>
	</footer>	

	<?php wp_footer(); ?>
	
</body>

</html>
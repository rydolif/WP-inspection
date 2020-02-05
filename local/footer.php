
	<footer class="footer">
		<div class="footer__container container">

			<a href="<?php echo get_home_url(); ?>" class="footer__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header__logo.png" alt="">
				<b>СОАСТО</b>
				<span>Союз авторизованных сервисов <br>технического осмотра</span>
			</a>

			<p>
				<a href="<?php the_field('policy', 'option'); ?>" target="_blank" class="footer__policy">Публичная оферта</a>
				<br>
				<a href="<?php echo get_home_url(); ?>/sity/" target="_blank" class="footer__policy">Представительства САСТО</a>
			</p>

			

			<p>
				Обратная связь: <br>
				<a href="mailto:<?php the_field('mail', 'option'); ?>" class="footer__mail">
					<b><?php the_field('mail', 'option'); ?></b>
				</a>
			</p>

			<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="footer__tel"><?php the_field('tel', 'option'); ?></a>
			

		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>

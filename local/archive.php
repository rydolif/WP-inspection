
<?php get_header(); ?>
	

	<main class="main">

		<section class="info sity">
			<div class="info__container container">

				<h2>Представительства САСТО в городах</h2>

				<ul>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<li><a href="<?php the_permalink(); ?>"><?php the_field('sity'); ?></a></li>
						
				<?php endwhile; ?>
				<?php endif; ?>

				</ul>

			</div>
		</section>

	</main>


<?php get_footer(); ?>
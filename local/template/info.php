<?php
	/**
		* Template name: info
	*/
 ?>

<?php get_header(); ?>
	

	<main class="main">

		<section class="info">
			<div class="info__container container">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<h2><?php the_title(); ?></h2>

					<?php the_content(); ?>
						
				<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</section>

	</main>


<?php get_footer(); ?>
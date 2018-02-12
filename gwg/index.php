<?php get_header(); ?>

	<main role="main">
	
	<header class="page-banner standard__header">
		<div class="container">
			<h1 class="heading"><?php single_post_title(); ?></h1>
		</div>
	</header>

	<section class="section">
		<div class="container clear">

			<div class="section__content">
				
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</div>

			<aside class="section__sidebar">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</section>

	</main>

<?php get_footer(); ?>
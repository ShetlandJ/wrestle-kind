<?php wp_enqueue_style( 'map', get_template_directory_uri() . '/map.css', array('html5blank') ); ?>
<?php /* Template Name: Map Template */ get_header(); ?>

	<main class="map" role="main">
	
	<header class="page-banner standard__header">
		<div class="container">
			<h1 class="heading"><?php echo(get_the_title($post->post_parent)); ?></h1>
		</div>
	</header>

	<section class="section section--hospitals">
		<div class="container">
		
		<?php html5wp_list_child_pages(); ?>

			<div class="hospital-list">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>

		</div>
	</section>

	<section class="section section--map">
		<div class="container">
			<h1><a href="https://www.google.com/maps/ms?msa=0&msid=205762112351024806583.0004f3da48961bafe15bb&hl=en&ie=UTF8&t=m&ll=53.409532,-2.702637&spn=6.551743,10.964355&z=6&source=embed">Hospital Map</a></h1>
			<iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/ms?msa=0&amp;msid=205762112351024806583.0004f3da48961bafe15bb&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=53.409532,-2.702637&amp;spn=6.551743,10.964355&amp;z=5&amp;output=embed"></iframe>
		</div>
	</section>

	</main>

<?php get_footer(); ?>

<?php wp_enqueue_style( 'board', get_template_directory_uri() . '/board.css', array('html5blank') ); ?>
<?php /* Template Name: The board */ get_header(); ?>

	<main class="map" role="main">
	
	<header class="page-banner standard__header">
		<div class="container">
			<h1 class="heading"><?php echo(get_the_title($post->post_parent)); ?></h1>
		</div>
	</header>

	<section class="section section--hospitals">
		<div class="container">
		
		<?php html5wp_list_child_pages(); ?>

		<?php

		$args = array(
		    'post_type'      => 'page',
		    'posts_per_page' => 3,
		    'post_parent'    => $post->ID,
		    'order'          => 'ASC',
		    'orderby'        => 'menu_order'
		 );


		$parent = new WP_Query( $args );

		if ( $parent->have_posts() ) : ?>
			<ul class="board-list columns clear">
		    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

		        <li id="parent-<?php the_ID(); ?>" class="column">
			        <div class="wrap">
		            <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		            	<div class="column__image" style="background-image: url(<?php the_post_thumbnail_url(array(400,242)); ?>)" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		            		<?php the_post_thumbnail(array(400,242)); ?>
		            	</div>
		            <?php endif; ?>
		            	<h2>
		            		<?php the_title(); ?>
		            	</h2>
		            	<?php the_content(); ?>
					</div>
		        </li>

		    <?php endwhile; ?>
			</ul>
		<?php endif; wp_reset_query(); ?>

		</div>
	</section>

	</main>

<?php get_footer(); ?>

<?php get_header(); ?>

	<main role="main">
	
	<header class="page-banner standard__header">
		<div class="container">
			<h1 class="heading"><?php echo(get_the_title($post->post_parent)); ?></h1>
		</div>
	</header>

	<section class="section">
		<div class="container clear">
		
		<?php html5wp_list_child_pages(); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article class="section__content wp-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
		<?php else: ?>
			<article class="section__content">
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
		<?php endif; ?>
		<aside class="section__sidebar">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<div class="sidebar__image">
					<div class="sidebar__image__container" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>)">
						<img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="">
					</div>
					<?php if ( get_post( get_post_thumbnail_id()) ) : // Check if thumbnail exists ?>
						<p class="sidebar__image__caption"><?php echo(get_post( get_post_thumbnail_id() )->post_excerpt) ?></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<div class="sidebar__item sidebar__item--donate">
				<h2 class="sidebar__item__header">Recycle your old games!</h2>
				<div class="wrap">
					<?php $donate = get_page_by_title( 'Donate' ); ?>
					<p>Donate video games and consoles to hospitals across the United Kingdom.</p>
					<a href="<?php echo esc_url( get_permalink($donate->ID) ); ?>" class="btn">Donate now</a>
				</div>
			</div>
		</aside>
		</div>
	</section>

	</main>

<?php get_footer(); ?>

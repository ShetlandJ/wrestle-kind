<section class="section homepage__stories">
	<?php $category_id = get_cat_ID( 'Stories' ); ?>
	<div class="container">
		<h1><a href="<?php echo(get_category_link( $category_id )); ?>">Latest stories</a></h1>
		<?php get_category_link( 3 ); ?>
		<ul class="stories columns columns--three clear">
			<?php global $query_string; query_posts( $query_string . '&cat=' . category_id . '&posts_per_page=3'); ?>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<li id="post-<?php the_ID(); ?>" class="column stories__story">
					<div class="wrap">
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a class="column__image stories__story__image" style="background-image: url(<?php the_post_thumbnail_url(array(400,242)); ?>)" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(400,242)); ?>
						</a>
					<?php endif; ?>
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<?php html5wp_excerpt('html5wp_index'); ?>
						<span class="date"><?php the_time('F j, Y'); ?></span>
					</div>
				</li>

			<?php endwhile; ?>
			<?php endif; ?>
		</ul>
		<div class="more-stories">
			<a class="btn" href="<?php echo(get_category_link( $category_id )); ?>">More stories</a>
		</div>
	</div>
</section>
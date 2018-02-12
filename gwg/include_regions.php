<section class="section homepage__regions">

	<?php 
	$region = get_page_by_title( 'Region' ); 
	?>

	<div class="container">
		<p>Free collection service available in the following locations:</p>

		<?php

		$args = array(
		    'post_type'      => 'page',
		    'posts_per_page' => 20,
		    'post_parent'    => $region->ID,
		    'order'          => 'ASC',
		    'orderby'        => 'menu_order'
		 );


		$parent = new WP_Query( $args );

		if ( $parent->have_posts() ) : ?>
			<ul class="board-list columns clear">
		    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
		    	<li>
		    		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		    	</li>
	        <?php endwhile; ?>
	    	</ul>
	    <?php endif; ?>

	</div>

</section>
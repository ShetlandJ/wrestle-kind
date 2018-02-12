<?php wp_enqueue_style( 'form', get_template_directory_uri() . '/form.css', array('html5blank') ); ?>

<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
?>

<?php /* Template Name: Form */  get_header(); ?>

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
		</aside>

		</div>
	</section>

	</main>

	<script type="text/javascript">

		var wrap = function (top, selector, bottom) {
		  var matches = document.querySelectorAll(selector);
		  for (var i = 0; i < matches.length; i++){
		    var modified = top + matches[i].outerHTML + bottom;
		    matches[i].outerHTML = modified;
		  }
		}

		document.addEventListener("DOMContentLoaded", function() {
			if ( 'querySelector' in document && 'addEventListener' in window ) {

			    var form = document.querySelector("form");

			    if(form) {
			    	form.addEventListener('change', function(e){
			    		var checkboxWrap = e.target.parentNode;
			    	    if (e.target.matches('input[type="checkbox"]')) {
			    	        e.stopPropagation();
			    	        if(e.target.checked){
			    	        	addClass(checkboxWrap, 'checked');
			    	        } else {
			    	        	removeClass(checkboxWrap, 'checked');
			    	        }
			    	    }
			    	});
			    }

			    wrap("<div class='faux-checkbox'>", "input[type='checkbox']", "</div>");
			}
		});

	</script>

<?php get_footer(); ?>

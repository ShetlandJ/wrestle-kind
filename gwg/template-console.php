<?php wp_enqueue_style( 'form', get_template_directory_uri() . '/form.css', array('html5blank') ); ?>

<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
?>

<?php /* Template Name: Console Landing Page Template */ get_header(); ?>
	
	<style>
		.page-banner {
			background-image: url("data:image/svg+xml;utf8,<svg width='1440px' height='257px' viewBox='0 0 1440 257' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'> <defs> <rect id='path-1' x='0' y='-4.75855331e-14' width='1440' height='257'></rect> </defs> <g id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'> <g transform='translate(0.000000, -120.000000)'> <g transform='translate(0.000000, 120.000000)'> <mask id='mask-2' fill='white'> <use xlink:href='#path-1'></use> </mask> <use id='Rectangle-14' fill='#F9BE00' style='mix-blend-mode: multiply;' opacity='0.900000036' xlink:href='#path-1'></use> <path d='M-97,173 C103,169 76,223.582936 248,233 C420,242.417064 951,229.361637 1104,211.361637 C1257,193.361637 1377,162 1466,173 C1555,184 1487,328 1487,328 L-133,299.361637 C-133,299.361637 -297,177 -97,173 Z' id='Path-2' fill='#FAC519' style='mix-blend-mode: multiply;' opacity='0.300000012' mask='url(#mask-2)'></path> </g> </g> </g></svg>");
		}
	</style>

	<main role="main">
	
	<header class="page-banner page-banner--landing standard__header">
		<div class="container clear">
			<h1 class="heading">Donate your old <?php echo(get_the_title($post)); ?></h1>
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<div class="page-banner__console">
					<img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="">
				</div>
			<?php endif; ?>	
		</div>
	</header>

	<section class="section section--landing">
		<div class="container clear">

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

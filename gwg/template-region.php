<?php wp_enqueue_style( 'homepage', get_template_directory_uri() . '/homepage.css', array('html5blank') ); ?>
<?php /* Template Name: Region Template */ get_header(); ?>
	<main class="homepage" role="main">
		<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
		<header class="homepage__header page-banner">
			<div class="container">
				<div class="homepage__header__content">
					<div class="wrap">
						<h1>Donate games and consoles in <?php echo(get_the_title($post)); ?></h1>
						<p>Donate video games and consoles to hospitals across the United Kingdom</p>
						<?php $donate = get_page_by_title( 'Donate' ); ?>
						<a class="btn btn--large" href="<?php echo esc_url( get_permalink($donate->ID) ); ?>">Donate now!</a>
					</div>
				</div>
				<div class="homepage__header__image" style="background-image: url('<?php echo $featuredImage ?>')">
					<img src="<?php echo $featuredImage ?>" alt="Giving sick kids a power up!"/>
				</div>
			</div>
		</header>
		<section class="section homepage__intro">
			<div class="container clear">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article class="section__content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
			<?php endif; ?>
				<aside class="section__sidebar">
					<div class="sidebar__item sidebar__item--mail-list">
						<h2 class="sidebar__item__header">Join our mailing list</h2>
						<div class="wrap">
							<p>Sign up to our newsletter to see the difference we are making!</p>
							<form action="//getwellgamers.us8.list-manage.com/subscribe/post?u=12cd06d4d023ab7e3e8650226&amp;id=460f93f1c6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="mail-list-widget validate" target="_blank" novalidate>
								<div class="mc-field-group">
									<input placeholder="Email Address" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
								</div>	 
							    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9b3501691bfe36c773fd81b5b_a65724fa4c" tabindex="-1" value=""></div>
							    <input type="submit" value="Join!" name="subscribe" id="mc-embedded-subscribe" class="btn">
							</form>
						</div>
					</div>
					<!--
					<ul class="social-btns clear">
						<li class="facebook"><a href="https://www.facebook.com/getwellgamersuk"><i class="i-facebook"></i></a></li>
						<li class="twitter"><a href="https://twitter.com/gwguk"><i class="i-twitter"></i></a></li>
						<li class="instagram"><a href="https://www.instagram.com/gwguk/"><i class="i-insta"></i></a></li>
						<li class="mail"><a href="james@getwellgamers.org.uk"><i class="i-mail"></i></a></li>
						<li class="linkedin"><a href="https://www.linkedin.com/company/9430215"><i class="i-linkedin"></i></a></li>
					</ul>
					-->
				</aside>
			</div>
		</section>
	</main>


<?php get_footer(); ?>
<?php get_header(); ?>
	<div class="wrapper">
		<div class="wrapper-overlay"></div>
		<div class="container">
			<header>
				<h1>This page was not found.</h1>
			</header>
			<footer>
				<ul class="cf">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">&larr; Visit the homepage</a></li>
				</ul>
			</footer>
		</div>
	</div>
	<?php get_footer(); ?>
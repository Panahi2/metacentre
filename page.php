<?php get_header(); ?>
	<div class="wrapper">
		<div class="wrapper-overlay"></div>
		<div class="container">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<main>
				<article>
					<?php the_content(); ?>
				</article>
			</main>
			<footer>
				<ul class="cf">
					<li><?php the_category(); ?></li>
					<li><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('F j, Y') ?></time></li>
				</ul>
			</footer>
			<?php endwhile; ?>
			<?php else : ?>
			<main>
				<article>
					<h2>No, sorry.</h2>
				</article>
			</main>
			<?php endif; ?>
		</div>
	</div>
	<?php get_footer(); ?>
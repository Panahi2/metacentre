<?php get_header(); ?>
	<div class="wrapper">
		<div class="wrapper-overlay"></div>
		<div class="container">
			<header>
				<h1><?php bloginfo('name'); ?></h1>
			</header>
			<main>
				<ul class="post-list">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 5 );
						$myposts = get_posts();
						foreach ( $myposts as $post ) : 
							setup_postdata( $post ); ?>
								<li>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<aside><?php the_category( ', ' ); ?> | <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('F j, Y') ?></time></aside>
								</li>
						<?php endforeach;
					wp_reset_postdata(); ?>
				</ul>
			</main>
			<footer>
				<ul class="cf">
					<li>&copy; <?php the_time('Y'); ?></li>
					<li>All Rights Reserved.</li>
				</ul>
			</footer>
		</div>
	</div>
	<?php get_footer(); ?>
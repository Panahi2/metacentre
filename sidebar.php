<div class="navicon">
	<div class="toggle">
		<span class="t1"></span>
		<span class="t2"></span>
		<span class="t3"></span>
	</div>
</div>
<nav>
	<div class="nav-wrapper">
		<h3>Pages</h3>
		<ul>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
  			<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
		</ul>
		<h3>Categories</h3>
		<ul>
  			<?php wp_list_categories('sort_column=menu_order&title_li='); ?>
		</ul>
	</div>
</nav>
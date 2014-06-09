<?php get_header(); ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					
				</div>
			</div>
		</div>
		<div class="container posts">
			<?php
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					
					<div class="post <?php post_class(); ?>">
						<p class="category text-muted"><?php echo the_category(', '); ?></p>
						<h2 class="title" id="post-<?php the_ID(); ?>">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo get_the_title(); ?></a>
						</h2>
						<p class="excerpt">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo get_the_excerpt(); ?></a>
						</p>
					</div>
				</div>
			</div>
			<?php
				endwhile;
			endif;
			?>
			<?php posts_nav_link(); ?>
		</div>
<?php get_footer(); ?>
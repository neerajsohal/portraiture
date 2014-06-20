<?php get_header('single'); ?>
		<div class="container">
			<?php
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					
					<div class="post <?php post_class(); ?>">
						<div class="content">
							<?php echo apply_filters('the_content', get_the_content()); ?>
						</div>
					</div>
				</div>
			</div>
			<?php
				endwhile;
			endif;
			?>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="page_nav_links">
						<p><small><?php posts_nav_link(); ?></small></p>
					</div>
				</div>
			</div>
		</div>
<?php get_footer('single'); ?>
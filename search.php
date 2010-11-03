<?php get_header(); ?>
<div class="container">
	<div class="span-18 content">
		<h2>Search Results for: <a href="<?php bloginfo('url'); ?>/?s=<?php echo get_query_var('s'); ?>" ><?php echo get_query_var('s'); ?></a></h2>
		<hr class="space" />
		<hr class="space" />
		<?php
	       	function new_excerpt_length($length) {
				return 20;
			}
			add_filter('excerpt_length', 'new_excerpt_length');
		?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="span-18 last post">
   	    	<h3 class="title"><?php the_title(); ?></h3>
            <p class="small">Published on <span class="quiet"><?php the_time('h:m, d-m-Y'); ?></span> by <span class="quiet"><?php the_author(); ?></span></p>
            <div class="span-18 last content">
				<?php the_excerpt(); ?>
				<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
            </div>
        </div>
		<?php endwhile; ?>
		<?php else : ?>

		<h3 class="center">No posts found. Try a different search?</h3>
		<?php get_search_form(); ?>

		<?php endif; ?>
        <div class="span-18 last">
			<p><?php posts_nav_link(); ?></p>
        </div>
	</div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
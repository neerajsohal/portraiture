<?php get_header(); ?>
<div class="container">
	<div class="span-18">
			<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
        <div class="span-18 last post">
   	    	<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <p class="small loud">Published on <span class="quiet"><?php the_time('h:m, d-m-Y'); ?></span> by <span class="quiet"><?php the_author(); ?></span></p>
            <div class="span-18 last content">
				<?php the_content(); ?>
            </div>
        </div>
        <hr class="space" />
		<?php endwhile; ?>
		<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

		<?php endif; ?>
        <div class="span-18 last">
			<p><?php posts_nav_link(); ?></p>
        </div>
	</div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
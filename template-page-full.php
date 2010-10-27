<?php
/*
 * Template name: Full Width Page
 */
 get_header(); ?>
<div class="container">
	<div class="span-24 content">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
        <div class="span-24 last post">
   	    	<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <div class="span-24 last content">
				<?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div>
        </div>
        <hr class="space" />
		<?php endwhile; ?>
		<?php endif; ?>
        <div class="span-24 last">
			<p><?php posts_nav_link(); ?></p>
        </div>
        <div class="span-24 last">
	        <?php comments_template(); ?>
        </div>
	</div>
</div>
<?php get_footer(); ?>
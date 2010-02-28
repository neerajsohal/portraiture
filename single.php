<?php get_header(); ?>
<div class="container">
	<div class="span-18">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
        <div class="span-18 last post">
   	    	<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        	<div class="span-3 prepend-1 post_meta small">
                <p class="loud">Published on <span class="quiet"><?php the_time('h:m, d-m-Y'); ?></span></p>
                <p class="loud">Author<span class="quiet"><?php the_author(); ?></span></p>
                <p class="loud">Category<span class="quiet"><?php the_category(); ?></span></p>
                <p class="quiet"><a href="<?php comments_link(); ?>"><?php comments_number('No Comments', 'One Comment', '% Comments'); ?></a></p>
            </div>
            <div class="span-14 last content">
				<?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div>
            <div class="span-14 prepend-4 last tags">
	            <?php the_tags('Tags: '); ?>
            </div>
        </div>
        <hr class="space" />
		<?php endwhile; ?>
		<?php endif; ?>
        <div class="span-14 prepend-4 last">
			<p><?php posts_nav_link(); ?></p>
        </div>
        <div class="span-14 prepend-4 last">
	        <?php comments_template(); ?>
        </div>
	</div>
    <?php get_sidebar('single'); ?>
</div>
<?php get_footer(); ?>
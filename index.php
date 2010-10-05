<?php get_header(); ?>
<div class="container">
	<div class="span-18">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="span-18 last post">
            <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <div class="span-3 prepend-1 post_meta quiet">
                <p><span class="loud">Published on:</span><br/> <?php the_time('h:m, d-m-Y'); ?></p>
                <p><span class="loud">Author:</span> <?php the_author_posts_link(); ?></p>
                <p><span class="loud">Filed Under:</span> <?php
                    $categories = get_the_category();
                    $ctr = 0;
                    foreach($categories as $cat) {
                        if($ctr++ > 0) {
                            echo ', ';
                        }
                        echo $cat->name;
                    }
                ?></p>
                <p><a href="<?php comments_link(); ?>"><?php comments_number('No Comments', 'One Comment', '% Comments'); ?></a></p>
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
	</div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
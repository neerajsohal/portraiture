<?php get_header(); ?>

<div class="container">
	<div class="span-18 content">
	    <?php
		    if(isset($_GET['author_name'])) :
		        $curauth = get_user_by('slug', $author_name);
		    else :
		        $curauth = get_userdata(intval($author));
		    endif;
	    ?>
    <div class="span-18 last">
	    <h2>Profile of <?php echo $curauth->display_name; ?></h2>
	    <div class="span-3">
		    <p>
		    	<?php echo get_avatar($curauth->user_email, $size = '96'); ?>
		    </p>
	    </div>
	    <div class="span-15 last">
	    	<?php echo get_the_author_meta('description', $curauth->ID) ?>
	    </div>
    </div>
    <p>
    <?php if(get_the_author_meta('twitter', $curauth->ID)) { ?>
    	<a href="http://twitter.com/<?php echo get_the_author_meta('twitter', $curauth->ID); ?>"><img src="<?php bloginfo('template_url');?>/i/facebook.png" title="Find <?php echo $curauth->display_name; ?> on Facebook" /></a> 
   	<?php } if(get_the_author_meta('facebook', $curauth->ID)) { ?>
    	<a href="http://facebook.com/<?php echo get_the_author_meta('facebook', $curauth->ID); ?>"><img src="<?php bloginfo('template_url');?>/i/twitter.png" title="Find <?php echo $curauth->display_name; ?> on Twitter" /></a> 
   	<?php } if(get_the_author_meta('linkedin', $curauth->ID)) { ?>
    	<a href="<?php echo get_the_author_meta('linkedin', $curauth->ID); ?>"><img src="<?php bloginfo('template_url');?>/i/linkedin.png" title="Find <?php echo $curauth->display_name; ?> on Linkedin" /></a> 
   	   	<?php } if(get_the_author_meta('facebook', $curauth->ID)) { ?>
    	<a href="<?php echo get_the_author_meta('flickr', $curauth->ID); ?>"><img src="<?php bloginfo('template_url');?>/i/flickr.png" title="Find <?php echo $curauth->display_name; ?> on Flickr" /></a> 
		<?php } ?>
	</p>
	<div class="span-6">
		<?php if(get_the_author_meta('twitter', $curauth->ID)) { ?>
		<h3>Latest From Twitter</h3>
		<?php twitter_feed(get_the_author_meta('twitter', $curauth->ID)); ?>
		<?php } ?>
	</div>
	<div class="span-6">
		<?php
        	function new_excerpt_length($length) {
				return 20;
			}
			add_filter('excerpt_length', 'new_excerpt_length');
		?>
		<h3>From The Blog</h3>
		<?php query_posts('posts_per_page=5&author='.$curauth->ID); ?>
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<h6>
    		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            <?php the_title(); ?></a>
        </h6>
        <?php the_excerpt(); ?>
    	<?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>
    	<?php endif; ?>
	</div>
	<div class="span-6 last">
		<?php if(get_option('portraiture_flickr_api_key') && get_the_author_meta('flickr', $curauth->ID)) { ?>
			<h3>My Flicks From Flickr</h3>
			<?php flickr_stream(get_the_author_meta('flickr', $curauth->ID), get_the_author_meta('flickr_api_key', $curauth->ID)); ?>
		<?php } ?>
	</div>
	</div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<div class="span-5 prepend-1 last sidebar-single small">
	<ul class="sidebar">
    <li>
    	<p>You are currently reading <strong><span class="loud"><?php echo get_the_title(); ?></span></strong> at </strong><?php echo bloginfo('title'); ?></strong>.
		<h2>SHARE THE LOVE</h2>
		<p><a tagret="_blank" href='<?php echo 'http://www.twitter.com/?status=' . urlencode(get_the_title()) . get_permalink(); ?>' title="twitter"><img src="<?php bloginfo('template_url'); ?>/i/twitter.png" /></a>
        <a tagret="_blank" href='<?php echo 'http://www.facebook.com/share.php?u=' . get_permalink() . '&t=' . urlencode(get_the_title()); ?>' title="facebook"><img src="<?php bloginfo('template_url'); ?>/i/facebook.png" /></a>
        <a tagret="_blank" href='<?php echo 'http://www.stumbleupon.com/submit?url=' . get_permalink(); ?>' title="stumbleupon"><img src="<?php bloginfo('template_url'); ?>/i/stumbleupon.png" /> </a>
        <a tagret="_blank" href='<?php echo 'http://delicious.com/post?url=' . get_permalink(); ?>' title="delicious"><img src="<?php bloginfo('template_url'); ?>/i/delicious.png" /> </a>
        <a tagret="_blank" href='<?php echo 'http://technorati.com/faves?add=' . get_permalink(); ?>' title="technorati"><img src="<?php bloginfo('template_url'); ?>/i/technorati.png" /> </a>
        </p>
    </li>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Single Post Sidebar') ) : ?>
    <?php endif; ?>
    </ul>
</div>

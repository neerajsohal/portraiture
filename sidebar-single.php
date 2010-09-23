<div class="span-5 prepend-1 last sidebar-single">
    <ul class="sidebar">
        <li>
            <p>You are currently reading <strong><span class="loud"><?php echo get_the_title(); ?></span></strong> written by <strong><?php the_author_posts_link(); ?> </strong> at <strong><?php echo bloginfo('title'); ?></strong>.
            <h3>ABOUT AUTHOR</h3>
            <p class="gravatar"><?php echo get_avatar(get_the_author_id(), $size = '96'); ?></p>
            <p class="nickname loud"><strong><?php the_author_meta('display_name', get_the_author_id()); ?></strong></p>
            <p class="author_url">
            <a href="<?php the_author_meta('user_url', get_the_author_id()); ?>"><?php the_author_meta('user_url', get_the_author_id()); ?></a></p>
            <p class="description">
                <?php the_author_meta('description', get_the_author_id()); ?>
            </p>
            <p>Find more posts by <?php the_author_posts_link(); ?> </p>
            <h3>SHARE THE LOVE</h3>

            <p><a tagret="_blank" href='<?php echo 'http://www.twitter.com/?status=' . urlencode(get_the_title()) . get_permalink(); ?>' title="twitter"><img src="<?php bloginfo('template_url'); ?>/i/twitter.png" /></a>
                <a tagret="_blank" href='<?php echo 'http://www.facebook.com/share.php?u=' . get_permalink() . '&t=' . urlencode(get_the_title()); ?>' title="facebook"><img src="<?php bloginfo('template_url'); ?>/i/facebook.png" /></a>
                <a tagret="_blank" href='<?php echo 'http://www.stumbleupon.com/submit?url=' . get_permalink(); ?>' title="stumbleupon"><img src="<?php bloginfo('template_url'); ?>/i/stumbleupon.png" /> </a>
                <a tagret="_blank" href='<?php echo 'http://delicious.com/post?url=' . get_permalink(); ?>' title="delicious"><img src="<?php bloginfo('template_url'); ?>/i/delicious.png" /> </a>
                <a tagret="_blank" href='<?php echo 'http://technorati.com/faves?add=' . get_permalink(); ?>' title="technorati"><img src="<?php bloginfo('template_url'); ?>/i/technorati.png" /> </a>
            </p>
        </li>
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Single Post Sidebar')) : ?>
        <?php endif; ?>
    </ul>
</div>

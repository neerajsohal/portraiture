<div class="span-5 prepend-1 last small sidebar-default">
	<ul class="sidebar">
    <li>
    	<p><a href="<?php bloginfo('atom_url'); ?>" ><img src="<?php bloginfo('template_url'); ?>/i/rss.png" align="left" />&nbsp;Subscribe via RSS</a></p>
    </li>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') ) : ?>
	<?php endif; ?>
    
	</ul>
</div>

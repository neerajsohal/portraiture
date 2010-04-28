<div class="span-5 prepend-1 last small sidebar-default">
	<ul class="sidebar">
    <li>
<!-- <?php global $pt; if(get_option($pt->short_name.'_feed_url')) { ?>
    	<h3><a href="<?php echo get_option($pt->short_name.'_feed_url'); ?>" ><img src="<?php bloginfo('template_url'); ?>/i/rss.png" align="left" height="18"/>&nbsp;SUBSCRIBE VIA RSS</a></h3>
<?php } if(get_option($pt->short_name.'_feed_email_uri')) { ?>
<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo get_option($pt->short_name.'_feed_email_uri'); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"> //-->
<h3>SUBSCRIBE USING EMAIL</h3>
<input type="text" name="email" />
<input type="hidden" value="<?php echo get_option($pt->short_name.'_feed_email_uri'); ?>" name="uri" /><input type="hidden" name="loc" value="en_US" />
<input type="submit" value="Subscribe" />
</form>
<?php } ?>
    </li>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') ) : ?>
	<?php endif; ?>
    
	</ul>
</div>

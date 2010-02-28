<?php
global $pt; 
?>
<hr class="space" />
<div class="container footer">
	<p class="linkback"><?php $pt->get_linkback(); ?><br />
	<a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
		and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
	<?php wp_footer(); ?>
</div>
<hr class="space" />
<?php echo stripslashes(get_option($pt->short_name .'_google_analytics')); ?>
</body>
</html>

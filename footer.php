<?php
global $pt; 
?>
<hr class="space" />
<div class="container footer">
	<p class="linkback">Proudly Powered By <a href="http://portraiture.neerajkumar.name/">Portraiture version 0.4</a></p>
	<?php wp_footer(); ?>
</div>
<hr class="space" />
<?php echo stripslashes(get_option('portraiture_google_analytics')); ?>
</body>
</html>

<?php
global $pt; 
?>
<hr class="space" />
<div class="container footer">
	<p class="linkback">Powered By: Portraiture version 0.4</p>
	<?php wp_footer(); ?>
</div>
<hr class="space" />
<?php echo stripslashes(get_option('portraiture_google_analytics')); ?>
</body>
</html>

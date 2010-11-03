<div class="container footer prepend-top">
	<hr class="space" /> 
	<p class="linkback">Proudly Powered By <a href="http://portraiture.neerajkumar.name/">Portraiture version <?php global $portraiture; echo $portraiture["Version"]; ?></a></p>
	<?php wp_footer(); ?>
</div>
<hr class="space" />
<?php echo stripslashes(get_option('portraiture_google_analytics')); ?>
</body>
</html>

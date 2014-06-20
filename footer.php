		
	<div class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12">
				<p class="text-muted"><small>Powered by <a href="http://wordpress.org">Wordpress</a> and <a href="http://lab.neerajkumar.name/portraiture/">Portraiture</a></small></p>
				</div>
			</div>
		</div>
	</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/site.js"></script>
		<?php if(strlen(get_header_image()) > 0) { ?>
		<script type="text/javascript">
			$(document).ready(function() {

				$(".banner").backstretch("<?php echo get_header_image(); ?>");

			})
		</script>
	<?php } ?>
		<?php wp_footer(); ?>
	</body>
</html>
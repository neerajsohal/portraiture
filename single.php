<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
		

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<?php get_header(); ?>
				</div>
			</div>
		</div>
		<div class="container">
			<?php
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					
					<div class="post <?php post_class(); ?>">
						<p class="category text-muted"><?php echo the_category(', '); ?></p>
						<h2 class="title" id="post-<?php the_ID(); ?>">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo get_the_title(); ?></a>
						</h2>
						<p class="excerpt">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo get_the_excerpt(); ?></a>
						</p>
						<div class="content">
							<?php echo get_the_content(); ?>
						</div>
					</div>
				</div>
			</div>
			<?php
				endwhile;
			endif;
			?>
		</div>
		


		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
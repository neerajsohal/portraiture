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
	<body <?php body_class(); ?>>
		<?php get_template_part( 'primary', 'navigation' ); ?>
		<div class="banner-wrapper">
		<div class="banner">
			<div class="overlay">
			</div>
			<div class="meta">
				<?php
				if (have_posts()) :
				while (have_posts()) : the_post(); ?>
					<h1 class="title"><?php echo get_the_title(); ?></h1>
					<p class="lead excerpt"><?php echo get_the_excerpt(); ?></p>
				<?php
				endwhile;
				endif;
				?>
			</div>
		</div>
		</div>

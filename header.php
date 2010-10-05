<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/blueprint/screen.css" type="text/css" media="screen" />
<!-- [IF LTE IE 8] >
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/blueprint/ie.css" type="text/css" media="screen" />
<![ENDIF]-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/blueprint/print.css" type="text/css" media="print" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
<?php
if(get_option('portraiture_hyperlink_color')) {
    echo '<style>a {color: '.get_option('portraiture_hyperlink_color').'}</style>';
}
if(get_option('portraiture_hyperlink_hover_color')) {
    echo '<style>a:hover {color: '.get_option('portraiture_hyperlink_hover_color').'}</style>';
}
?>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if(get_option('portraiture_feed_url')) { ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php echo get_option('portraiture_feed_url'); ?>" />
<?php
}
else {
?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Comments Feed" href="<?php bloginfo('comments_rss2_url'); ?>" />
<?php
}
?>
<script src="<?php bloginfo('template_url');?>/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/fancybox/jquery.fancybox-1.3.1.pack.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/js/site.js" type="text/javascript"></script>
<?php
wp_deregister_script( 'cufon' );
wp_deregister_script( 'cufon_font_gentium' );
wp_register_script('cufon', 'http://cufon.shoqolate.com/js/cufon-yui.js');
$cufon_font_gentium = get_bloginfo('template_url') . "/js/Gentium_400.font.js";
wp_register_script('cufon_font_gentium', $cufon_font_gentium);
wp_enqueue_script('cufon');
wp_enqueue_script('cufon_font_gentium');

wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
	<div class=" header_wrapper">
	<div class="span-24 last menu">
    	<div class="span-18">
        <?php wp_nav_menu( array( 'container' => '', 'depth' => '1', 'fallback_cb' => 'fallback_wp_page_menu' ) ); ?>
        </div>
        <div class="span-6 last rightText topsearch">
			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>" >
				<?php $search_val = get_query_var('s') ? get_query_var('s') : "enter to search" ; ?>
            	<input type="text" name="s" id="s" value="<?php echo $search_val; ?>" /> <input type="submit" value="S" id="searchsubmit"  class="btn" />
            </form>
        </div>
    </div>
	<div class="span-24 last header">
   		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a>
    </div>
    <hr class="space" />
    <hr class="space" />
    <hr class="space" />
    </div>
</div>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

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
wp_deregister_script( 'jquery' );
wp_deregister_script( 'cufon' );
wp_deregister_script( 'cufon_font_gentium' );
wp_deregister_script( 'fancybox' );
wp_deregister_script( 'site_js' );

wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js');
wp_register_script('cufon', 'http://cufon.shoqolate.com/js/cufon-yui.js');
$cufon_font_gentium = get_bloginfo('template_url') . "/js/Gentium_400.font.js";
wp_register_script('cufon_font_gentium', $cufon_font_gentium);
$fancybox_js = get_bloginfo('template_url') . "/fancybox/jquery.fancybox-1.3.1.pack.js";
wp_register_script('fancybox', $fancybox_js);
$site_js = get_bloginfo('template_url') . "/js/site.js";
wp_register_script('site_js', $site_js);

wp_enqueue_script('jquery');
wp_enqueue_script('cufon');
wp_enqueue_script('cufon_font_gentium');
wp_enqueue_script('fancybox');
wp_enqueue_script('site_js');
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
	<div class=" header_wrapper">
	<div class="span-24 last menu">
    	<div class="span-18">
        <?php wp_nav_menu( array( 'container' => '' ) ); ?>
        </div>
        <div class="span-6 last rightText topsearch">
			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>" >
            	<input type="text" name="s" id="s" /> <input type="submit" value="S" id="searchsubmit" class="btn" />
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
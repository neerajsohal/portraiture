<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Comments Feed" href="<?php bloginfo('comments_rss2_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
	<div class="span-24 last menu">
    	<div class="span-14">
    	<ul>
			<?php $args = array(
            'depth'        => 1,
            'show_date'    => '',
            'date_format'  => get_option('date_format'),
            'child_of'     => 0,
            'exclude'      => '',
            'include'      => '',
            'title_li'     => '',
            'echo'         => 1,
            'authors'      => '',
            'sort_column'  => 'menu_order, post_title',
            'link_before'  => '',
            'link_after'   => '' ,
            'exclude_tree' => '' ); ?> 
			<?php wp_list_pages($args); ?> 
        </ul>
        </div>
        <div class="span-10 last rightText topsearch">
			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>" >
            	<input type="text" name="s" id="s" /> <input type="submit" value="S" id="searchsubmit" class="btn" />
            </form>
        </div>
    </div>
	<div class="span-24 last header">
   		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
    </div>
    <hr class="space" />
    <hr class="space" />
    <hr class="space" />
</div>
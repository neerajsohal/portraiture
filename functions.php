<?php
$defaults = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

function portraiture_widgets_init() {

	register_sidebar( array(
		'name' => 'Single Post Footer Widget',
		'id' => 'single_post_footer',
		'before_widget' => '<div class="widget" id="single_post_footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'portraiture_widgets_init' );

remove_filter('term_description','wpautop'); 
<?php

require dirname(__FILE__) . "/pt_data.php";

add_action('admin_menu', 'pt_init');

$options = array(
				array(
					"label" => "Color Scheme",
					"type" => "select",
					"name" => "scheme",
					"id" => "scheme",
					"desc" => "Select a color scheme from the available options",
					"values" => array('blue', 'black')
					),
			);


function pt_init() {
    add_theme_page(__('Portraiture Options'), __('Portraiture Options'), 'edit_themes', basename(__FILE__), 'pt_index');
}

function pt_index() {
	pt_display_options();
}

function pt_display_options() {
	global $options;
	pt_get_header();
	pt_gen_form($options, array('section_name'=>'General Settings', 'table_class'=>'form-table'))	;
	pt_get_footer();
}
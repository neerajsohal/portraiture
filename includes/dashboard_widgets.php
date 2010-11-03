<?php
//// Create the function to output the contents of our Dashboard Widget

function portraiture_dashboard_widget_function() {
	neerajkumar_name_feed();
}

// Create the function use in the action hook

function portraiture_add_dashboard_widgets() {
	wp_add_dashboard_widget('portraiture_dashboard_widget', 'neerajkumar.name\'s Feed', 'portraiture_dashboard_widget_function');

	// Globalize the metaboxes array, this holds all the widgets for wp-admin

	global $wp_meta_boxes;

	// Get the regular dashboard widgets array
	// (which has our new widget already but at the end)

	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];

	// Backup and delete our new dashbaord widget from the end of the array

	$portraiture_widget_backup = array('portraiture_dashboard_widget' => $normal_dashboard['portraiture_dashboard_widget']);
	unset($normal_dashboard['portraiture_widget_backup']);

	// Merge the two arrays together so our widget is at the beginning

	$sorted_dashboard = array_merge($portraiture_widget_backup, $normal_dashboard);

	// Save the sorted array back into the original metaboxes

	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
}

// Hook into the 'wp_dashboard_setup' action to register our other functions

add_action('wp_dashboard_setup', 'portraiture_add_dashboard_widgets' );
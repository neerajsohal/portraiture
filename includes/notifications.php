<?php 

add_action("admin_notices", "portraiture_notifications");

function portraiture_notifications() {
	if(is_update_available()) {
		portraiture_update_notification();
	}
}
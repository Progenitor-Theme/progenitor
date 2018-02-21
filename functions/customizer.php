<?php
// Custom Logo in Apearance Customise Site Identity
function progenitor_setup_logo() {
	add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'progenitor_setup_logo');

// Choosing the Size of the Logo
add_image_size('progenitor-logo', 150, 50);
add_theme_support('custom-logo', array(
	'size' => 'progenitor-logo'
));

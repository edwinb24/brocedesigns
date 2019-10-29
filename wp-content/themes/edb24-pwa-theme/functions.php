<?php

function acme_theme_setup() {
	
	add_theme_support('menus');

	register_nav_menu('header_menu', 'Primary Header Navigation');
	register_nav_menu('footer_menu', 'Footer Navigation');
	register_nav_menu('header_outgoing_links_menu', 'Header External Links');
	
}

add_action('init', 'acme_theme_setup');
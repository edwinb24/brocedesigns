<?php
/*
======================================
Adding Menu Support
====================================== 
*/


function acme_theme_setup() {
	add_theme_support('menus');
	register_nav_menu('header_menu', 'Main Menu');
}

add_action('init', 'acme_theme_setup');

/*
 ======================================
 Adding Custom Post Type
 ====================================== 
 */

function job_custom_post_type(){
	$labels	= array(
		'name' => 'Jobs',
		'singular' => 'Job',
		'add_new' => 'Add Job',
		'all_items' => 'All Jobs',
		'add_new_item' => 'Add Job',
		'edit_item' => 'Edit Job',
		'new_item' => 'New Job',
		'view_item' => 'View Job',
		'search_item' => 'Search Job',
		'not_found' => 'No jobs found',
		'not_found_in_trash' => 'No jobs found in trash',
		'parent_item_colon' => 'Job Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revision'
		)
	);
	register_post_type('jobs', $args);
}

add_action('init', 'job_custom_post_type');
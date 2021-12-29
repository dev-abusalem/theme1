<?php 

// Add All Theme Support

add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );

// Daynamic Menu

register_nav_menus( array(
	'topBar'			=>'Top Menu',
	'mainMenu'			=>'Main Menu',
) );
// Add Title

add_theme_support( 'title-tag' );


// Add Custom Logo

add_theme_support( 'custom-logo', array(
	'width'					=>100,
	'height'				=>100,
	'flex-width'			=>true,
	'flex-height'			=>true,
));


// Add Widget Menus

function add_widget_thelatest_theme(){
	register_sidebar(array(
		'name'				=>'Right Sidebar',
		'description'		=>'It is a custom right sidebar',
		'id'				=>'rsb',
		'before_widget'		=>'<ul>',
		'after_widget'		=>'</ul>',
		'before_title'		=>'<h2>',
		'after_title'		=>'</h2>',
	));
}


add_action('widgets_init', 'add_widget_thelatest_theme');

// Add Custom CSS And JS

function custom_css_and_js_add(){
	wp_enqueue_style( 'salemStyle', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'custom_css_and_js_add' );




// Add Customizer API


function my_footer_customize($wp_customize){
	$wp_customize->add_section('footer_sec', array(
			'title'					=>'Copyright Area',
			'priority'   			=> 30,
	));
	$wp_customize->add_setting('copywrite_sec', array(
		'default'					=>'Change Your Copyright Text.',
		'transport'   				=> 'refresh',
	));
	$wp_customize->add_control('copywrite_sec', array(
		'label'						=>'Enter Your Copyright Text.',
		'section'					=>'footer_sec',
		'settings'					=>'copywrite_sec',
	));
}


add_action( 'customize_register','my_footer_customize' );



























add_filter( 'use_block_editor_for_post', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );
 ?>